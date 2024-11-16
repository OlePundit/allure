@extends('layouts.lp')

@section('content')

<div class="lp mt-5">
    <div class="row justify-content-center" style="margin-right:0px;margin-left:0px;">
        <div class="container" style="width:100%;margin:auto;">
            <div class="row blog-col section-service" style="display:flex;align-items:center;justify-content:flex-start;margin-right:0px;margin-left:0px;">
                <div class="col-lg-6 col-md-12">
                    <h1>{{$slug->title}}</h1>
                    <p>
                        {{$slug->intro}}
                    </p>
                    <div class="read_bt">
                        <a href="/book">
                            Book Today
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="/storage/{{$slug->thumb}}" alt="welcome-img" class="thumbnail rounded">

                </div>
            </div>
            <div class="row why-us align-items-center mt-5">
                <div class="col-lg-6 col-md-12">
                    <img src="/storage/{{$slug->thumb1}}" alt="benefit-img" class="thumbnail rounded">

                </div>
                <div class="col-lg-6 col-md-12">
                    <h2>Why Us?</h2>
                    {{$slug->benefits}}
                    <div class="read_bt">
                        <a href="/book">
                            Book Today
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-md-12">
                    <h2>Our Process At Allure Essence Spa & Hair Studio</h2>
                    {{$slug->process}}
                    <div class="read_bt">
                        <a href="/book">
                            Book Today
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="/storage/{{$slug->thumb2}}" alt="process-img" class="thumbnail rounded">

                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <h2 style="text-align:center;">What Our customers say</h2>

                <div class="col-lg-12">
                    <script src="https://widget.trustmary.com/m1v3XdTF5"></script>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=623%20Wood%20Avenue+(Allure%20Essence%20Spa%20and%20Hair%20Studio)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
@endsection