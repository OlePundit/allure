@extends('layouts.app')

@section('content')
 <!-- contact section start -->
 <div class="contact_section layout_padding">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="contact_taital">Book Today</h1>
            <p class="contact_text">You can book your service in advance so you dont have to wait when you get to our shop </p>
            <img src="/storage/images/spa2.webp" class="rounded mt-5" alt="contact-img">
        </div>
        <div class="col-md-6">
            <div class="contact_main">
                <form id="paymentForm">
                    <input type="text" class="form-control mb-3" id="name" name="name" placeholder="name" required>
                    <input type="email" class="form-control mb-3" id="email" name="email" placeholder="email" required>
                    <label class="text-white" style="font-size:16px;">Booking date</label>
                    <input type="text" id="datePicker" class="form-control mb-3" name="booking_date" placeholder="Booking date" required>
                    
                    <label class="text-white" style="font-size:16px;">Booking time</label>
                    <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     

                    <input type="text" class="form-control mb-3" id="service_type" name="service_type" value="{{$service->category}}">
                    <label class="text-white" style="font-size:16px;">Price</label>
                    <input type="hidden" name="orderID" value="{{ $service->id }}"/>
                    <input type="number" class="form-control mb-3" id="amount" name="amount" value="{{$service->price}}">

                    <label class="text-white" style="font-size:16px;">Service name</label>
                    <input type="text" class="form-control mb-3" id="service_name" name="service_name" value="{{$service->name}}">
                    <label class="text-white" style="font-size:16px;">Payment terms</label>
                    <input type="text" class="form-control mb-3" id="payment_terms" name="payment_terms" value="{{$service->payment_terms}}">
                    <div class="read_bt">
                        <button type="submit">Send</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="map_main">
    <div class="map-responsive">
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kilimani+(allure%20essence)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
    </div>
    </div>
</div>
<!-- contact section end -->
@endsection