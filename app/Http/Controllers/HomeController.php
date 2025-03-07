<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Landing;
use App\Models\LP;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $salons = Service::where('category','Salon')->limit(3)->get();
        $massages = Service::where('category', 'Massage')->limit(3)->get();
        $bodys = Service::where('category', 'Body Scrubs')->limit(3)->get();
        $manis = Service::where('category', 'Mani-pedi treat')->limit(3)->get();
        $salonCs = Service::where('category', 'SalonC')->limit(3)->get();
        $barberAs = Service::where('category', 'Barber African')->limit(3)->get();
        $barberCs = Service::where('category', 'Barber Caucasian')->limit(3)->get();
        $steams = Service::where('category', 'Steam Aroma')->limit(3)->get();

        $moroccans = Service::where('category', 'Moroccan Bath')->limit(3)->get();
        $hots = Service::where('category', 'Hot Stones')->limit(3)->get();
        $facials = Service::where('category', 'Facials')->limit(3)->get();
        $saunas = Service::where('category', 'Sauna')->limit(3)->get();
        $waxings = Service::where('category', 'Waxing')->limit(3)->get();

        $salonGs = Gallery::where('service','Salon')->inRandomOrder()->limit(3)->get();
        $massageGs = Gallery::where('service', 'Massage')->inRandomOrder()->limit(3)->get();
        $bodyGs = Gallery::where('service', 'Body Scrubs')->inRandomOrder()->limit(3)->get();
        $maniGs = Gallery::where('service', 'Mani-pedi treat')->inRandomOrder()->limit(3)->get();
        $barberGs = Gallery::where('service', 'Barber')->inRandomOrder()->limit(3)->get();
        $steamGs = Gallery::where('service', 'Steam Aroma')->inRandomOrder()->limit(3)->get();

        $moroccanGs = Gallery::where('service', 'Moroccan Bath')->inRandomOrder()->limit(3)->get();
        $hotGs = Gallery::where('service', 'Hot Stones')->inRandomOrder()->limit(3)->get();
        $facialGs = Gallery::where('service', 'Facials')->inRandomOrder()->limit(3)->get();
        $saunaGs = Gallery::where('service', 'Sauna')->inRandomOrder()->limit(3)->get();
        $waxingGs = Gallery::where('service', 'Waxing')->inRandomOrder()->limit(3)->get();

        $landings = Landing::limit(4)->get();

        return view('home', compact('salons','massages','bodys','manis','salonCs','barberAs','barberCs',
        'steams','moroccans','hots','facials','saunas','waxings','salonGs','massageGs','bodyGs','maniGs','barberGs',
        'steamGs','moroccanGs','hotGs','facialGs','saunaGs','waxingGs','landings'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function book(Service $service)
    {
        return view('book', compact('service'));
    }
    public function book2()
    {
        return view('book2');
    }
    public function lp(LP $slug)
    {
        return view('lp', compact('slug'));
    }
    public function lp2()
    {
        return view('lp2');
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }
    public function blog(Blog $slug)
    {
        $blogs = Blog::inRandomOrder()->limit(3)->get();
        return view('blog', compact('slug','blogs'));
    }
    public function services()
    {
        $salons = Service::where('category','Salon')->get();
        $massages = Service::where('category', 'Massage')->get();
        $bodys = Service::where('category', 'Body Scrub')->get();
        $manis = Service::where('category', 'Mani-pedi treat')->get();
        $salonCs = Service::where('category', 'SalonC')->get();
        $barberAs = Service::where('category', 'BarberA')->get();
        $barberCs = Service::where('category', 'BarberC')->get();
        $steams = Service::where('category', 'Steam Aroma')->get();

        $moroccans = Service::where('category', 'Moroccan Bath')->get();
        $hots = Service::where('category', 'Hot Stones')->get();
        $facials = Service::where('category', 'Facials')->get();
        $saunas = Service::where('category', 'Sauna')->get();
        $waxings = Service::where('category', 'Waxing')->get();

        return view('services', compact('salons','massages','bodys','manis','salonCs','barberAs','barberCs',
        'steams','moroccans','hots','facials','saunas','waxings'));
    }
}
