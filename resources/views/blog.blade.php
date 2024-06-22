@extends('layouts.app')

@section('content')

<div class="container service">
    <div class="row justify-content-center">
        <div class="container" style="width:100%;margin:auto;">
            <div class="row section-service" style="align-items:flex-start;justify-content:flex-start;">
                <div class="col-lg-2 mx-2 col-md-12 d-flex justify-content-center align-items-center author" style="flex-direction:column;margin-top:100px;">
                    <img src="/storage/author.png" class="roounded-circle" height="260px" width="260px" alt="author">
                    <h5 class="text-center">OlePundit</h5>
                    <h6 class="text-center">{{$slug->created_at}}</h6>
                </div>
                <div class="col-lg-9 col-md-12 body">
                {!! $slug->body !!}
                    <div class="row">
                        <button>Request Quotation</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection