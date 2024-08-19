@extends('layouts.app')

@section('content')

<div class="blog_section layout_padding ">
    <h1>Blogs</h1>
    <div class="row justify-content-center">

        <div class="col-lg-10">
            <div class="row justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-lg-3 mt-5">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$blog->thumbnail}}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <p class="card-text">{!! Str::limit(strip_tags($blog->body), 120, '...') !!}...</p>
                        <a href="/blogs/{{$blog->slug}}" style="text-decoration:none;" class="custom-card">

                            <button>Read more</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection