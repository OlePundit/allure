@extends('layouts.app')

@section('content')
<!-- about section start -->
<div class="service_section layout_padding">
    <div class="container">
    <div class="service_section_main">
        <h3>Hair Dressing Services</h3>

        <div class="row">
            @foreach($hairs as $hair)
            <div class="col-lg-2">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$hair->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$hair->name}}</h5>
                    <p class="card-text">Ksh {{$hair->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3>Massage Services</h3>
        <div class="row">
            @foreach($massages as $massage)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$massage->thumbnail}}" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">{{$massage->name}}</h5>
                    <p class="card-text">Ksh {{$massage->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3>Body Scrub Services</h3>

        <div class="row product-row">
            @foreach($bodys as $body)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$body->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$body->name}}</h5>
                    <p class="card-text">Ksh {{$body->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Dread Locks</h3>

        <div class="row product-row">
            @foreach($dreads as $dread)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$dread->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$dread->name}}</h5>
                    <p class="card-text">Ksh {{$dread->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Men's Facial Services</h3>

        <div class="row product-row">
            @foreach($mens as $men)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$men->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$men->name}}</h5>
                    <p class="card-text">Ksh {{$men->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Colour Services</h3>

        <div class="row product-row">
            @foreach($colours as $colour)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$colour->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$colour->name}}</h5>
                    <p class="card-text">Ksh {{$colour->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>African Hair Services</h3>

        <div class="row product-row">
            @foreach($africans as $african)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$african->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$african->name}}</h5>
                    <p class="card-text">Ksh {{$african->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Caucasian Hair Services</h3>

        <div class="row product-row">
            @foreach($caucasians as $caucasian)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$caucasian->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$caucasian->name}}</h5>
                    <p class="card-text">Ksh {{$caucasian->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Weaving Services</h3>

        <div class="row product-row">
            @foreach($weavings as $weaving)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$weaving->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$weaving->name}}</h5>
                    <p class="card-text">Ksh {{$weaving->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Permanent Weave</h3>

        <div class="row product-row">
            @foreach($permanents as $permanent)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$permanent->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$permanent->name}}</h5>
                    <p class="card-text">Ksh {{$permanent->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>relaxer Cut</h3>

        <div class="row product-row">
            @foreach($pixies as $pixie)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$pixie->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$pixie->name}}</h5>
                    <p class="card-text">Ksh {{$pixie->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Relaxers</h3>
        <div class="row product-row">
            @foreach($relaxers as $relaxer)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$relaxer->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$relaxer->name}}</h5>
                    <p class="card-text">Ksh {{$relaxer->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Barber Shop Services(Caucasian)</h3>

        <div class="row product-row">
            @foreach($barberAs as $barberA)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$barberA->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$barberA->name}}</h5>
                    <p class="card-text">Ksh {{$barberA->price}}</p>
                    <a href="/book" class="">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Barber Shop Services(African)</h3>

        <div class="row product-row">
            @foreach($barberCs as $barberC)

            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <img src="/storage/{{$barberC->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$barberC->name}}</h5>
                    <p class="card-text">Ksh {{$barberC->price}}</p>
                    <a href="/book" class="">Order Now</a>
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