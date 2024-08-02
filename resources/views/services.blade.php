@extends('layouts.app')

@section('content')
<!-- about section start -->
<div class="product_section layout_padding">
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
                    <div class="services-info align-items-end">
                        <h4>{{$massage->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($massage->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$massage->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$massage->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$massage->price}}</p>
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
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Massage Services">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$massage->price}}">

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
        <h3>Facials</h3>

        <div class="row product-row">
        @foreach($facials as $facial)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$facial->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$facial->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($facial->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$facial->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$facial->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$facial->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#facialModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="facialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Facials">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$facial->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$facial->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$facial->payment_terms}}">

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
        <h3>Hot Stones</h3>
        <div class="row product-row">
            @foreach($hots as $hot)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$hot->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$hot->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($hot->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$hot->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$hot->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$hot->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#hotModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="hotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Hot stones">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$hot->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$hot->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$hot->payment_terms}}">

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
        <h3>Moroccan Bath</h3>
        <div class="row product-row">
            @foreach($moroccans as $moroccan)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$moroccan->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$moroccan->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($moroccan->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$moroccan->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$moroccan->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$moroccan->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#moroccanModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="moroccanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Moroccan Bath">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$moroccan->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$moroccan->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$moroccan->payment_terms}}">

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
        <h3>Steam Aroma</h3>

        <div class="row product-row">
            @foreach($steams as $steam)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$steam->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$steam->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($steam->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$steam->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$steam->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$steam->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#steamModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="steamModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Steam Aroma">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$steam->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$steam->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$steam->payment_terms}}">

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
        <h3>Sauna</h3>

        <div class="row product-row">
            @foreach($saunas as $sauna)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$sauna->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$sauna->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($sauna->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$sauna->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$sauna->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$sauna->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#saunaModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="saunaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Sauna">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$sauna->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$sauna->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$sauna->payment_terms}}">

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
        <h3>Waxing</h3>

        <div class="row product-row">
            @foreach($waxings as $waxing)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$waxing->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$waxing->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($waxing->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$waxing->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$waxing->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$waxing->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#waxingModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="waxingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Waxing">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$waxing->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$waxing->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$waxing->payment_terms}}">

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
        <h3>Mani-pedi treat</h3>

        <div class="row product-row">
            @foreach($manis as $mani)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$mani->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$mani->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($mani->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$mani->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$mani->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$mani->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#maniModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="maniModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Mani-pedi treat">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$mani->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$mani->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$mani->payment_terms}}">

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
        <h3>Salon</h3>

        <div class="row product-row">
            @foreach($salons as $salon)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$salon->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$salon->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($salon->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$salon->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$salon->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$salon->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#salonModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="salonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Salon (Caucasian hair)">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$salon->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$salon->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$salon->payment_terms}}">

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

        <h3>Salon(Caucasian Hair)</h3>

        <div class="row product-row">
            @foreach($salonCs as $salonC)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$salonC->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$salonC->name}}</h4>
                        <p>{{ \Illuminate\Support\Str::limit($salonC->description, 50) }}
                        </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$salonC->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$salonC->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$salonC->price}}</p>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#salonCModal" class="">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="salonCModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Salon (Caucasian hair)">

                        <label class="text-white" style="font-size:16px;">Price</label>

                        <input type="text" class="form-control mb-3" name="price" value="{{$salonC->price}}">

                        <label class="text-white" style="font-size:16px;">Service name</label>
                        <input type="text" class="form-control mb-3" name="service name" value="{{$salonC->name}}">
                        <label class="text-white" style="font-size:16px;">Payment terms</label>
                        <input type="text" class="form-control mb-3" name="payment terms" value="{{$salonC->payment_terms}}">

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
            @foreach($barberCs as $barberC)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$barberC->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$barberC->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($barberC->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$barberC->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$barberC->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$barberC->price}}</p>
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
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                        <label class="text-white" style="font-size:16px;">Booking date</label>
                        <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                        <label class="text-white" style="font-size:16px;">Booking time</label>
                        <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                        
                        <input type="text" class="form-control mb-3" name="service type" value="Barber Shop (Caucasian Hair)">

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
        <h3>Barber Shop Services(African)</h3>

        <div class="row product-row">
            @foreach($barberAs as $barberA)

            <div class="product-wrap col-lg-4 col-md-6 col-12">
                <div class="services-thumb">
                    <img
                    src="storage/{{$barberA->thumbnail}}"
                    alt="info-img" class="services-image img-fluid" >
                    <div class="services-info align-items-end">
                        <h4>{{$barberA->name}}</h4>
                        <p>{{\Illuminate\Support\Str::limit($barberA->description)}} </p>
                        <div class="d-flex mt-2 duration-wrap">
                            <span class="card-text"><i class="fa-solid fa-clock"></i>{{$barberA->duration}}</span>
                            <span class=""><i class="fa-solid fa-money-bill"></i>{{$barberA->payment_terms}}</span>
                        </div>
                        <div class="d-flex price-wrap mt-3">
                            <p class="card-text">{{$barberA->price}}</p>
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
                    <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                    <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                    <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                    <label class="text-white" style="font-size:16px;">Booking date</label>
                    <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                    <label class="text-white" style="font-size:16px;">Booking time</label>
                    <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     
                    
                    <input type="text" class="form-control mb-3" name="service type" value="Barber Shop (African Hair)">

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
    </div>
    </div>
</div>
<!-- about section end -->
@endsection