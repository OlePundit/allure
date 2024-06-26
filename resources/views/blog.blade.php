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
                    {!! $slug->body !!}
                    <div class="row">
                        <a href="/book">
                            <button>Book Today</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection