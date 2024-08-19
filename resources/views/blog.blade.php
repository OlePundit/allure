@extends('layouts.blog')

@section('content')

<div class="blog">
    <div class="row justify-content-center">
        <div class="container" style="width:100%;margin:auto;">
            <div class="row section-service" style="align-items:flex-start;justify-content:flex-start;">
                <div class="col-lg-2 mx-2 col-md-12 d-flex justify-content-center align-items-center author" style="flex-direction:column;margin-top:100px;">
                    <img src="/storage/images/author.jpg" class="rounded-circle mb-3" height="260px" width="260px" alt="author">
                    <h5 class="text-center">OlePundit</h5>
                    <h6 class="text-center">{{$slug->created_at}}</h6>
                </div>
                <div class="col-lg-9 col-md-12 body">
                    <h1>{{$slug->title}}</h1>
                    <img src="/storage/{{$slug->thumbnail}}" class="thumbnail rounded">
                    {!! $slug->body !!}
                    <div class="row">
                        <div class="read_bt">
                            <a href="/book">
                                Book Today
                            </a>
                        </div>

                    </div>
                    <h2>Read More Content</h2>

                    <div class="row blog_section">
                        @foreach($blogs as $blog)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5">
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
        </div>


    </div>
</div>
@endsection