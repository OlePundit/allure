<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;

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

        return view('home', compact('salons','massages','bodys','manis','salonCs','barberAs','barberCs',
        'steams','moroccans','hots','facials','saunas','waxings'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function book()
    {
        return view('book');
    }
    public function blogs()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }
    public function blog(Blog $slug)
    {

        return view('blog', compact('slug'));
    }
    public function services()
    {
        $salons = Service::where('category','Salon')->get();
        $massages = Service::where('category', 'Massage')->get();
        $bodys = Service::where('category', 'Body Scrubs')->get();
        $manis = Service::where('category', 'Mani-pedi treat')->get();
        $salonCs = Service::where('category', 'SalonC')->get();
        $barberAs = Service::where('category', 'Barber African')->get();
        $barberCs = Service::where('category', 'Barber Caucasian')->get();
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
