<div class="swiper-container4 swiper3">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="width:100%">

            <div class="row justify-content-center" style="width:100%">

                @foreach($salons as $salon)

                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
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

                @endforeach

            </div>
        </div>
        <div class="swiper-slide" style="width:100%">
            <!--swiper content-->
        </div>
        <div class="swiper-slide" style="width:100%">
            <!--swiper content-->
        </div>
        <div class="swiper-slide" style="width:100%">
            <!--swiper content-->
        </div>

    </div> 

</div>
<!-- Modal -->
<div class="modal fade" id="salonModal{{$salon->id}}" tabindex="-1" aria-labelledby="salonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="salonModalLabel">Booking Form</h5>
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
            
            <input type="text" class="form-control mb-3" name="service type" value="Salon">

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