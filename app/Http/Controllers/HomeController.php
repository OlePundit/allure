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
        $hairs = Service::where('category','Hair dressing')->limit(4)->get();
        $massages = Service::where('category', 'Massage')->limit(4)->get();
        $bodys = Service::where('category', 'Body Scrubs')->limit(4)->get();

        return view('home', compact('hairs','massages','bodys'));
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
        $hairs = Service::where('category','Hair dressing')->get();
        $messages = Service::where('category', 'Massage')->get();
        $bodys = Service::where('category', 'Body Scrubs')->get();
        $dreads = Service::where('category', 'Dread locks')->get();
        $mens = Service::where('category', 'Mens')->get();
        $colours = Service::where('category', 'Colour')->get();
        $africans = Service::where('category', 'African Hair')->get();
        $caucasians = Service::where('category', 'Caucasian Hair')->get();
        $weavings = Service::where('category', 'weaving')->get();
        $permanents = Service::where('category', 'Permanent Weave')->get();
        $pixies = Service::where('category', 'Pixie cut')->get();
        $relaxers = Service::where('category', 'Relaxers')->get();
        $barberAs = Service::where('category', 'Barber African')->get();
        $barberCs = Service::where('category', 'Barber Caucasian')->get();

        return view('services', compact('hairs','messages','bodys','dreads','mens','colours','africans','caucasians','weavings','permanents','pixies','relaxers','barberAs','barberCs'));
    }
}
