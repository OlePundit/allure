@extends('layouts.app')

@section('content')
 <!-- contact section start -->
 <div class="contact_section layout_padding">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="contact_taital">Get In Touch</h1>
            <p class="contact_text">Don't hesitate to contact us when you have any queries in mind. We respond round the clock. </p>
        </div>
        <div class="col-md-6">
            <div class="contact_main">
                <form method="POST" action="https://formsubmit.co/admin@allureessencespa.com">
                    <input type="text" class="form-control mb-3" name="name" placeholder="name" required>
                    <input type="email" class="form-control mb-3" name="email" placeholder="email" required>
                    <textarea type="text" class="form-control mb-3" name="text" placeholder="Enter text" required></textarea>
                    <button type="submit">Send</button>
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