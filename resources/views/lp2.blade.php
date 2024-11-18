@extends('layouts.app')

@section('content')

<div class="lp mt-5">
    <div class="row justify-content-center" style="margin-right:0px;margin-left:0px;">
        <div class="container" style="width:100%;margin:auto;">
            <div class="row blog-col section-service" style="display:flex;align-items:center;justify-content:flex-start;margin-right:0px;margin-left:0px;">
                <div class="col-lg-6 col-md-12">
                    <h1>Welcome to Allure Essence Salon</h1>
                    <p>
                        At Allure Essence Spa and Hair Studio, we pride ourselves in redefining the beauty experience with cutting-edge technology, 
                        luxury amenities, and a team of highly skilled professionals. 
                        </br>
                        Designed with sleek, modern interiors and eco-friendly materials, our salon offers a serene ambiance that immediately puts 
                        you at ease. Equipped with the latest in haircare, skincare, and nail technology, we ensure precision and perfection 
                        in every service. 
                        </br>
                        Advanced booking systems, personalized consultations, and innovative treatments like LED therapy or 
                        precision hair analysis cater to individual needs, while premium products provide lasting results. 
                        A commitment to excellence and customer satisfaction makes our salon the ultimate destination for self-care and transformation.
                    </p>
                    <div class="read_bt">
                        <a href="/booking">
                            Book Today
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="/storage/images/lp-1.jpg" alt="welcome-img" class="thumbnail rounded">

                </div>
            </div>
            <div class="row why-us align-items-center mt-5">
                <div class="col-lg-6 col-md-12">
                    <img src="/storage/images/lp-1.jpg" alt="benefit-img" class="thumbnail rounded">

                </div>
                <div class="col-lg-6 col-md-12">
                    <h2>Why Us?</h2>
                    <ul>
                        <li>State of the art facilities
                            <p>
                                We have luxurious private suites for personalized services, ergonomic styling chairs for comfort, 
                                and state-of-the-art shampoo stations with massage functionality. 
                            </p>
                        </li>
                        <li>Professional staff
                            <p>Our staff is trained in some of the latest hair styling techniques and are able to keep up to date with emerging
                                trends.
                        </li>

                        <li>Serene environment
                            <p>We are located in an up-town neighbourhood not too far from the city center, thus widely accessible from all corners of
                                the city, with panoramic views of the city skyline.
                            </p>
                        </li>
                        <li>Value for your money
                            <p>
                                We offer quality care, and trendy styles at a very affordable price.
                            </p>
                        </li>
                        <li>Efficient booking system
                            <p>
                                You can book an appointment, and make payment through our <a href="/book">online checkout</a> system thus limiting wait time.
                            </p>
                        </li>
                        <li>Short waiting time
                            <p>We have a large number of staff who are ready to respond to your every beck and call, thus reducing your wait time.</p>
                        </li>
                        <li>Precision care
                            <p>Our staff are trained to handle clients on a person to person basis, and offer bespoke care. Since every client has different needs and sensitivities.</p>
                        </li>
                    </ul>
                    <div class="read_bt">
                        <a href="/booking">
                            Book Today
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-md-12">
                    <h2>Our Process At Allure Essence Spa & Hair Studio</h2>
                    <p>When you walk into our reception and enter our serene environment that has been purpose bult to help you relax and drop your guard, our receptionist is the first to recieve you
                        and offers you some refreshments, as she finds out about what service you need
                    </p>
                    <p>Other clients prefer to book in advance through our online booking system, but we also accept walk-ins</p>
                    <p>Once the receptionist notes down the specific service you need, she informs the supervisor, who then proceeds to pair you to a hair stylist who will best meet your requirements</p>
                    <p>We are aware that every client has a different scalp sensitivity, and they respond differently to different hands. So we bear this in mind while pairing you with a stylist. If you are a regular
                        and have a favourite stylist then we advice you that it is best to book online or call in advance so that we ensure that the stylist is free before you come in.
                    </p>
                    <p>Our stylists are trained to work with speed, and we ensure that you do not stay too long at our salon. Because we understand that our clients are busy, and we would like
                        to relieve you promptly, while looking and feeling your very best
                    </p>
                    <div class="read_bt">
                        <a href="/booking">
                            Book Today
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="/storage/images/lp-1.jpg" alt="process-img" class="thumbnail rounded">

                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <h2 style="text-align:center;">What Our customers say</h2>

                <div class="col-lg-12">
                    <script src="https://widget.trustmary.com/m1v3XdTF5"></script>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=623%20Wood%20Avenue+(Allure%20Essence%20Spa%20and%20Hair%20Studio)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <h2 style="text-align:center;">FAQs</h2>

                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{$slug->faq_1}}
                            </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$slug->ans_1}}
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{$slug->faq_2}}
                            </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$slug->ans_2}}
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{$slug->faq_3}}
                            </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$slug->ans_3}}
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{$slug->faq_4}}
                            </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$slug->ans_4}}
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{$slug->faq_5}}
                            </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$slug->ans_5}}

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
@endsection