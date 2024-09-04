<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\HomeController::class, 'book'])->name('book');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blogs',[App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/services',[App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/callback', [PaymentController::class, 'handleGatewayCallback'])->name('callback');
Route::get('success', [PaymentController::class, 'success'])->name('success');
Route::get('cancel', [PaymentController::class, 'cancel'])->name('cancel');
Route::get('/thank-you', [HomeController::class, 'thanks']);
//Route::get('/send-test-email', function () {
//    $data = [
//        'name' => 'John Doe',
//        'booking_date' => '2024-09-06',
//        'amount' => '99.99',
//        'currency'=> 'KES',
//        'email'=>'Johndoe@gmail.com',
//        'time'=>'12:51 P.M',
//        'payment_id'=>'1',
//        'payment_terms'=>'50% deposit',
//        'service_name'=>'Hair colour'

//    ];

//    Mail::to('glennomondi.go@gmail.com')->send(new TestEmail($data));

//    return 'Test email sent!';
//});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
