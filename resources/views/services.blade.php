@extends('layouts.app')

@section('content')
<!-- about section start -->
<div class="services product_section layout_padding">
    <div class="container">
        <div class="service_section_main">
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
            <h3>Nail Bar</h3>

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
            <h3>Barber Shop</h3>
            <div class="row">
                @foreach($barberAs as $barberA)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$barberA->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$barberA->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($barberA->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$barberA->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$barberA->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$barberA->price}}</p>
                                <a href="/booking/{{$barberA->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <h3>Barber Shop (Caucasian Hair)</h3>
            <div class="row">
                @foreach($barberCs as $barberC)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$barberC->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$barberC->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($barberC->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$barberC->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$barberC->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$barberC->price}}</p>
                                <a href="/booking/{{$barberC->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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
            <h3>Body Scrubs</h3>
            <div class="row">
                @foreach($bodys as $body)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$body->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$body->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($body->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$body->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$body->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$body->price}}</p>
                                <a href="/booking/{{$body->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <h3>Facials</h3>
            <div class="row">
                @foreach($facials as $facial)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$facial->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$facial->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($facial->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$facial->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$facial->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$facial->price}}</p>
                                <a href="/booking/{{$facial->id}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <h3>Waxing</h3>
            <div class="row">
                @foreach($waxings as $waxing)

                <div class="product-wrap col-lg-4 col-md-6 col-12">
                    <div class="services-thumb">
                        <img
                        src="storage/{{$waxing->thumbnail}}"
                        alt="info-img" class="services-image img-fluid" >
                        <div class="services-info">
                            <h4>{{$waxing->name}}</h4>
                            <p>{{\Illuminate\Support\Str::limit($waxing->description)}} </p>
                            <div class="d-flex mt-2 duration-wrap">
                                <span class="card-text"><i class="fa-solid fa-clock"></i>{{$waxing->duration}}</span>
                                <span class=""><i class="fa-solid fa-money-bill"></i>{{$waxing->payment_terms}}</span>
                            </div>
                            <div class="d-flex price-wrap mt-3">
                                <p class="card-text">{{$waxing->price}}</p>
                                <a href="/booking/{{$waxing->id}}">Book Now</a>
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