@extends('layouts.app')

@section('content')

<div class="blog_section layout_padding ">
    <h1>Blogs</h1>
    <div class="row justify-content-center" style="margin-right:0; margin-left:0;">

        <div class="col-lg-10 col-md-12">
            <div class="row justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-5">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$blog->thumbnail}}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">{!! Str::limit(strip_tags($blog->title), 80) !!}</h4>
                        <p class="card-text">{!! Str::limit(strip_tags($blog->body), 120, '...') !!}...</p>
                        <div class="read_bt">
                            <a href="/blogs/{{$blog->slug}}" style="text-decoration:none;" class="custom-card">

                                Read more
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection