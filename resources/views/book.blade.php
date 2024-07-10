@extends('layouts.app')

@section('content')
 <!-- contact section start -->
 <div class="contact_section layout_padding">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="contact_taital">Book Today</h1>
            <p class="contact_text">You can book your service in advance so you dont have to wait when you get to our shop </p>
        </div>
        <div class="col-md-6">
            <div class="contact_main">
                <form method="POST" action="https://formsubmit.co/info@allureessencespa.com">
                    <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                    <input type="tel" class="form-control mb-3" name="phone" placeholder="email" required>
                    <label class="text-white" style="font-size:16px;">Booking date</label>
                    <input type="text" id="datePicker" class="form-control mb-3" name="booking date" placeholder="Booking date" required>
                    
                    <label class="text-white" style="font-size:16px;">Booking time</label>
                    <input type="time" class="form-control mb-3" name="time" placeholder="Booking date" required>

                    <select class="form-control mb-3">
                        <option value="null">Choose service type</option>
                        <option value="hair dressing">Hair dressing</option>
                        <option value="Massage">Massage</option>
                        <option value="facial">facial</option>
                        <option value="body scrub">Body scrub</option>
                        <option value="Weaving">weaving</option>
                        <option value="Pixie cut">Pixie cut</option>
                        <option value="Relaxers">relaxers</option>
                        <option value="Permanent weave">Permanent weave</option>
                        <option value="Dread locks">Dread locks</option>
                        <option value="Barber shop">Barber shop</option>
                    </select>
                    <button type="submit">Send</button>
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