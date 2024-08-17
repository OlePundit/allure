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
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#massageModal{{$massage->id}}" class="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="massageModal{{$massage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal">Close</button>
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
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#maniModal{{$mani->id}}" class="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="maniModal{{$mani->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal">Close</button>
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
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#salonModal{{$salon->id}}" class="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="salonModal{{$salon->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal">Close</button>
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
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#salonCModal{{$salonC->id}}" class="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="salonCModal{{$salonC->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal">Close</button>
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