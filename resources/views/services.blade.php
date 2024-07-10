@extends('layouts.app')

@section('content')
<!-- about section start -->
<div class="product_section layout_padding">
    <div class="container">
    <div class="service_section_main">
        <h3>Hair Dressing Services</h3>

        <div class="row">
            @foreach($hairs as $hair)
            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  class="" data-bs-toggle="modal" data-bs-target="#hairModal">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="hairModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                                <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                                <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                                <label class="text-white" style="font-size:16px;">Booking date</label>
                                <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                                <label class="text-white" style="font-size:16px;">Price</label>

                                <input type="text" class="form-control mb-3" name="price" value="{{$hair->price}}">

                                <input type="text" class="form-control mb-3" name="service type" value="hair dressing">
                                <label class="text-white" style="font-size:16px;">Service name</label>
                                <input type="text" class="form-control mb-3" name="service name" value="{{$hair->name}}">
                                <label class="text-white" style="font-size:16px;">Payment terms</label>
                                <input type="text" class="form-control mb-3" name="payment terms" value="{{$hair->payment_terms}}">

                                <button type="submit">Send</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3>Massage Services</h3>
        <div class="row">
            @foreach($massages as $massage)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#massageModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="massageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Massage Services">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$hair->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$massage->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$massage->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3>Body Scrub Services</h3>

        <div class="row product-row">
            @foreach($bodys as $body)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#bodyModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="bodyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Body Scrub Services">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$body->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$body->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$body->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Dread Locks</h3>

        <div class="row product-row">
            @foreach($dreads as $dread)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#dreadModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="dreadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Dread Locks">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$dread->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$dread->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$dread->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Men's Facial Services</h3>

        <div class="row product-row">
            @foreach($mens as $men)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#menModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="menModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Men's Facial Services">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$men->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$men->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$men->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Colour Services</h3>

        <div class="row product-row">
            @foreach($colours as $colour)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#colourModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="colourModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Colour Services">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$colour->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$colour->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$colour->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>African Hair Services</h3>

        <div class="row product-row">
            @foreach($africans as $african)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#africanModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="africanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="African Hair Services">
                                                <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$african->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$african->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$african->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Caucasian Hair Services</h3>

        <div class="row product-row">
            @foreach($caucasians as $caucasian)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#caucasianModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="caucasianModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Caucasian Hair Services">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$caucasian->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$caucasian->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$caucasian->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Weaving Services</h3>

        <div class="row product-row">
            @foreach($weavings as $weaving)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#weavingModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="weavingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Weaving services">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$weaving->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$weaving->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$weaving->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Permanent Weave</h3>

        <div class="row product-row">
            @foreach($permanents as $permanent)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#permanentModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="permanentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Permanent weave">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$permanent->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$permanent->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$permanent->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Pixie Cut</h3>

        <div class="row product-row">
            @foreach($pixies as $pixie)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#pixieModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="pixieModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Pixie Cut">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$pixie->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$pixie->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$pixie->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <h3>Relaxers</h3>
        <div class="row product-row">
            @foreach($relaxers as $relaxer)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#relaxerModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="relaxerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Relaxers">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$relaxer->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$relaxer->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$relaxer->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Barber Shop Services(Caucasian)</h3>

        <div class="row product-row">
            @foreach($barberAs as $barberA)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#barberAModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="barberAModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="hair dressingBarber Shop Services(Caucasian)">
                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$barberA->price}}">

                          <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$barberA->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$barberA->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <h3>Barber Shop Services(African)</h3>

        <div class="row product-row">
            @foreach($barberCs as $barberC)

            <div class="col-lg-4 col-md-6 col-12 mt-5">
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#barberCModal" class="">Order Now</a>
                    </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="barberCModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="date" class="form-control mb-3" name="booking date" placeholder="Booking date" required>

                        <input type="text" class="form-control mb-3" name="service type" value="Barber Shop Services(African)">
                        <label class="text-white" style="font-size:16px;">Price</label>


                        <input type="text" class="form-control mb-3" name="price" value="{{$barberC->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$barberC->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>

                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$barberC->payment_terms}}">

                        <button type="submit">Send</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal">Close</button>
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