@extends('layouts.app')

@section('content')

        <div class="container ">
            <div class="row justify-content-center">

                <div class="container" style="width:70%;margin:auto;">
        
                </div>
                <div class="row mt-5 section-more">
                    @foreach($blogs as $blog)
                    <a href="/blogs/{{$blog->slug}}" style="text-decoration:none;" class="custom-card">
                        <img src="/storage/{{$blog->thumbnail}}" class="card-img-top">
                        <div class="card-body">
                            <h4>{{$blog->title}}</h4>
                            <p>{!! Str::limit(strip_tags($blog->body), 120, '...') !!}...</p>
                            <button>Read more</button>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
@endsection