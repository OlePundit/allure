@extends('layouts.app')

@section('content')
<!-- about section start -->
<div class="services product_section layout_padding">
    <div class="container">
        <div class="service_section_main">
            <h3>Massage Services</h3>
            <div class="row">
                @foreach($massages as $massage)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$massage->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$massage->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($massage->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$massage->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$massage->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$massage->price}}</p>
                                <a href="/booking/{{$massage->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <h3>Mani-pedi treat</h3>

            <div class="row product-row">
                @foreach($manis as $mani)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$mani->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$mani->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($mani->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$mani->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$mani->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$mani->price}}</p>
                                <a href="/booking/{{$mani->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <h3>Salon</h3>

            <div class="row product-row">
                @foreach($salons as $salon)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$salon->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$salon->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($salon->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$salon->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$salon->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$salon->price}}</p>
                                <a href="/booking/{{$salon->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h3>Salon(Caucasian Hair)</h3>

            <div class="row product-row">
                @foreach($salonCs as $salonC)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$salonC->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$salonC->name}}</h4>
                            <p>{{ \Illuminate\Support\Str::limit($salonC->description, 50) }}
                            </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$salonC->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$salonC->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$salonC->price}}</p>
                                <a href="/booking/{{ $salonC->id }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
@endsection