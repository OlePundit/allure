@extends('layouts.app')

@section('content')
<!-- about section start -->
<div class="product_section layout_padding">
    <div class="container">
    <div class="service_section_main">
        <h3>Hair Dressing Services</h3>

        <div class="row">
            @foreach($hairs as $hair)
            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$hair->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$hair->name}}</h5>
                    <h6 class="desc">{{$hair->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$hair->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$hair->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$hair->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3>Massage Services</h3>
        <div class="row">
            @foreach($massages as $massage)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$massage->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$massage->name}}</h5>
                    <h6 class="desc">{{$massage->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$massage->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$massage->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$massage->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3>Body Scrub Services</h3>

        <div class="row product-row">
            @foreach($bodys as $body)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$body->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$body->name}}</h5>
                    <h6 class="desc">{{$body->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$body->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$body->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$body->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Dread Locks</h3>

        <div class="row product-row">
            @foreach($dreads as $dread)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$dread->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$dread->name}}</h5>
                    <h6 class="desc">{{$dread->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$dread->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$dread->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$dread->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Men's Facial Services</h3>

        <div class="row product-row">
            @foreach($mens as $men)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$men->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$men->name}}</h5>
                    <h6 class="desc">{{$men->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$men->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$men->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$men->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Colour Services</h3>

        <div class="row product-row">
            @foreach($colours as $colour)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$colour->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$colour->name}}</h5>
                    <h6 class="desc">{{$colour->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$colour->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$colour->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$colour->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>African Hair Services</h3>

        <div class="row product-row">
            @foreach($africans as $african)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$african->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$african->name}}</h5>
                    <h6 class="desc">{{$african->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$african->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$african->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$african->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Caucasian Hair Services</h3>

        <div class="row product-row">
            @foreach($caucasians as $caucasian)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$caucasian->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$caucasian->name}}</h5>
                    <h6 class="desc">{{$caucasian->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$caucasian->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$caucasian->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$caucasian->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Weaving Services</h3>

        <div class="row product-row">
            @foreach($weavings as $weaving)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$weaving->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$weaving->name}}</h5>
                    <h6 class="desc">{{$weaving->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$weaving->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$weaving->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$weaving->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Permanent Weave</h3>

        <div class="row product-row">
            @foreach($permanents as $permanent)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$permanent->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$permanent->name}}</h5>
                    <h6 class="desc">{{$permanent->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$permanent->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$permanent->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$permanent->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>relaxer Cut</h3>

        <div class="row product-row">
            @foreach($pixies as $pixie)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$pixie->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$pixie->name}}</h5>
                    <h6 class="desc">{{$pixie->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$pixie->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$pixie->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$pixie->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Relaxers</h3>
        <div class="row product-row">
            @foreach($relaxers as $relaxer)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$relaxer->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$relaxer->name}}</h5>
                    <h6 class="desc">{{$relaxer->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$relaxer->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$relaxer->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$relaxer->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Barber Shop Services(Caucasian)</h3>

        <div class="row product-row">
            @foreach($barberAs as $barberA)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$barberA->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$barberA->name}}</h5>
                    <h6 class="desc">{{$barberA->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$barberA->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$barberA->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$barberA->price}}</p>
                        <a href="/book" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Barber Shop Services(African)</h3>

        <div class="row product-row">
            @foreach($barberCs as $barberC)

            <div class="col-md-4 col-12 mt-5">
                <div class="card mb-5" style="width: 100%;">
                    <img src="/storage/{{$barberC->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$barberC->name}}</h5>
                    <h6 class="desc">{{$barberC->description}}</h6>
                    <div class="d-flex duration-wrap">
                        <span class="card-text"><i class="fa-solid fa-clock"></i>{{$barberC->duration}}</span>
                        <span class=""><i class="fa-solid fa-money-bill"></i>{{$barberC->payment_terms}}</span>
                    </div>
                    <hr></hr>
                    <div class="d-flex price-wrap">
                        <p class="card-text">KSH {{$barberC->price}}</p>
                        <a href="/book" class="">Order Now</a>
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