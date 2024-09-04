<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use App\Mail\BookingConfirmationAdmin;


class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        // computed amount -> $amount;
        $data = $request;
        $paystack = new Paystack();
        $user = Auth::user();
        $request->email = $data['email'];
        $request->amount = $data['amount'];
        $request->currency =  $data['currency'];
        $request->orderID =  $data['orderID'];
        $request->reference = Paystack::genTranxRef();
        $request->key = config('paystack.secretKey');

        return $paystack->getAuthorizationUrl($data)->redirectNow();
    }
    public function handleGatewayCallback(Request $request)
    {
        //dd($request->all());
        $reference = $request->reference;
        $secret_key = env('PAYSTACK_SECRET_KEY');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $secret_key",
                "Cache-Control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        //dd($response);
        $meta_data = $response->data->metadata->custom_fields;
        if($response->data->status == 'success')
        dd($response->data->metadata);

        {
            $obj = new Booking;
            $obj->payment_id = $reference;
            $obj->name = $meta_data[0]->value;
            $obj->booking_date = $meta_data[1]->value;
            $obj->time = $meta_data[2]->value;
            $obj->service_name = $meta_data[3]->value;
            $obj->payment_terms = $meta_data[4]->value;
            $obj->service_type = $meta_data[5]->value;

            $obj->amount = $response->data->amount;
            $obj->email = $response->data->email;

            $obj->currency = $response->data->currency;
            $obj->save();

            Mail::to($obj->email)->send(new BookingConfirmation($obj));
            Mail::to('info@allureessencespa.com')->send(new BookingConfirmationAdmin($obj));

            return redirect()->route('success');
        } else {
            return redirect()->route('cancel');
        }
    }
    public function success()
    {
        return view('success');
    }
    public function cancel()
    {
        return "Payment is cancelled";
    }
}
