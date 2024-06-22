<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

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
        return view('home');
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
}
