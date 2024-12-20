@extends('layouts.app')

@section('content')
 <!-- contact section start -->
 <div class="contact_section layout_padding">
    <div class="container">
    <div class="row mobi">
        <div class="col-md-6">
            <h1 class="contact_taital">Book Today</h1>
            <p class="contact_text">You can book your service in advance so you dont have to wait when you get to our shop </p>
            <img src="/storage/images/spa2.webp" class="rounded mt-5" alt="contact-img">
        </div>
        <div class="col-md-6">
            <div class="contact_main">
                <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                    <input type="text" class="form-control mb-3" id="name" name="name" placeholder="name" required>
                    <input type="email" class="form-control mb-3" id="email" name="email" placeholder="email" required>
                    <label class="text-white" style="font-size:16px;">Booking date</label>
                    <input type="text" id="datePicker" class="form-control mb-3" name="booking_date" placeholder="Booking date" required>
                    
                    <label class="text-white" style="font-size:16px;">Booking time</label>
                    <input type="text" id="timePicker" class="form-control mb-3" name="time" placeholder="Select time" required>                                                     

                    <label class="text-white" style="font-size:16px;">Describe the service you need</label>
                    <input type="text" class="form-control mb-3" id="service_name" name="service_name">
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
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=6th%20Floor,623%20Wood%20Avenue%20Plaza,%20Kilimani,%20Nairobi+(allure%20essence%20spa)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
    </div>
    </div>
</div>
<!-- contact section end -->
@endsection