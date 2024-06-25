<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Allure Essence</title>

        <!-- Fonts -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office:ital,wght@0,1..1000;1,1..1000|Open+Sans:400,700&&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- style css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- Scripts -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <!-- Scripts -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
        <link rel="stylesheet" href="{{ asset('build/assets/app-D7yHkshj.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/app-sEhFnVTV.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/responsive-Dx8seIzz.css') }}">
        <script src="{{ asset('build/assets/app-BwDpqcm8.js') }}"></script>
    </head>
    <body>

        <!-- banner section start -->
        <div class="banner_section layout_padding1">

            <!-- Slider main container -->
            <div class="swiper-container3 swiper swiper1 box-2">
                <nav class="navbar navbar-expand-md text-3">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="/storage/images/logo.png" class="mx-2" width="200" alt="logo">
                        </a>                    
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/services">Services</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/book">Book</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/blogs">Blog</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="https://wa.me/+254795614357"><i class="fab fa-whatsapp" style="margin-right:10px;"></i>Always online</a>
                            </li>
                        </ul>



                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">

                            </ul>
                        </div>
                    </div>
                </nav>
                <aside class="text-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M2 5h20v2H2zM2 13h20v2H2zM2 19h16v2H2z" fill="#ffffff"/>
                    </svg>


                    <div class="social-info">
                        <h2 class="vertical-text mb-3">Spa & Hair Studio</h2>
                        <div class="vertical-line mb-3"></div>

                        <div class="social-icons">
                            <a href="https://www.facebook.com/allureessencespa"><i class="fa fa-facebook mb-4" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/allure_essence_spa/"><i class="fa fa-instagram mb-4" aria-hidden="true"></i></a>
                            <a href="mailto:info@allureessence.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </aside>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slides -->
                    <div class="swiper-slide box">
                        <div class="col-sm-6 text">
                            <img src="/storage/images/hero.png" alt="hero-img">
                            <p class="banner_text">Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.</p>
                            <div class="read_bt"><a href="/book">Book Today</a></div>
                        </div>
                        <img src="/storage/images/slider4.webp" class="" alt="slider-img">
                    </div>

                    <div class="swiper-slide box">
                        <div class="col-sm-6 text">
                            <img src="/storage/images/hero.png" alt="hero-img">
                            <p class="banner_text">Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.</p>
                            <div class="read_bt"><a href="/book">Book Today</a></div>
                        </div>
                        <img src="/storage/images/slider.webp" class="" alt="slider-img">

                    </div>
                    <div class="swiper-slide box">
                        <div class="col-sm-6 text">
                            <img src="/storage/images/hero.png" alt="hero-img">
                            <p class="banner_text">Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.</p>
                            <div class="read_bt"><a href="/book">Book Today</a></div>
                        </div>
                        <img src="/storage/images/slider1.webp" class="" alt="slider-img">

                    </div>
                    <div class="swiper-slide box">
                        <div class="col-sm-6 text">
                            <img src="/storage/images/hero.png" alt="hero-img">
                            <p class="banner_text">Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.</p>
                            <div class="read_bt"><a href="/book">Book Today</a></div>
                        </div>
                        <img src="/storage/images/slider2.webp" class="" alt="slider-img">

                    </div>
                </div>
            <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination1"></div>

            <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"><i class="fas fa-arrow-left" aria-hidden="true"></i></div>
                <div class="swiper-button-next"><i class="fas fa-arrow-right" aria-hidden="true"></i></div>

                <!-- If we need scrollbar -->
            </div>
        </div>

        <!-- banner section end -->
        <!-- about section start -->
        <div class="about_section layout_padding">
            <div class="container">
                <div class="about_section_main">
                <h2 class="mb-3">Welcome to Allure Essence</h2>
                <div class="row">
                    <div class="col-md-6 tab">
                    <div class="image-container">
                        <img src="/storage/images/about3.webp" class="image_3 rounded" alt="info-img">
                        <img src="/storage/images/about.webp" class="image-4-overlap rounded" alt="info-img">
                    </div>

                    </div>
                    <div class="col-md-6">
                        <div class="about_taital_main">
                            <h1 class="about_taital">Nairobi's #1 Spa and hair studio</h1>
                            <p class="about_text">Located in the heart of Nairobi, Allure Essence Spa & Hair Studio is your ultimate destination for relaxation and rejuvenation. Our luxurious spa and state-of-the-art hair studio offer a wide range of services for both men and women, ensuring you leave feeling refreshed and revitalized.</p>
                        </div>
                    </div>

                </div>
                <div class="row mt-5 tab-2">
                    <div class="col-md-6">
                        <div class="about_taital_main-1">
                            <h1 class="about_taital">State of the art facilities</h1>
                            <p class="about_text">From our massage therapy room, to our shower room, and sauna. We boast of having state of the art facilities and experienced attendants who are available round the clock to cater to your every need.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container-1">
                            <img src="/storage/images/about4.webp" class="image_3 rounded" alt="info-img">
                            <img src="/storage/images/about2.webp" class="image-4-overlap rounded" alt="info-img">
                        </div>

                    </div>


                </div>
                </div>
            </div>
        </div>
        <!-- about section end -->
        <!-- product section start -->
        <div class="product_section layout_padding">
            <div class="container">
                <div class="row">
                <div class="col-3 space-heading">
                    <h3><i class="fa fa-circle" aria-hidden="true"></i>Allure Essence</h3>
                </div>
                <div class="col-sm-9">
                    <h1 class="product_taital">Our Services</h1>
                    <p class="product_text">We offer a wide range of services for a diverse group of customers</p>
                </div>
                </div>
                <div class="product_section_2 layout_padding">
                <h3>Hair Dressing Services</h3>
                <div class="row product-row">
                    @foreach($hairs as $hair)

                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="width: 100%;">
                            <img src="/storage/images/product.jpg" class="card-img-top" alt="thumbnail">
                            <div class="card-body">
                            <h5 class="card-title">{{$hair->name}}</h5>
                            <p class="card-text">{{$hair->price}}</p>
                            <a href="/book" class="">Order Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <h3>Massage Services</h3>

                <div class="row product-row">
                    @foreach($massages as $massage)

                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="width: 100%;">
                            <img src="/storage/images/product.jpg" class="card-img-top" alt="thumbnail">
                            <div class="card-body">
                            <h5 class="card-title">{{$massage->name}}</h5>
                            <p class="card-text">{{$massage->price}}</p>
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
                            <img src="/storage/images/product.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$body->name}}</h5>
                            <p class="card-text">{{$body->price}}</p>
                            <a href="/book" class="">Order Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="seemore_bt"><a href="/services">See More</a></div>
                </div>
            </div>
        </div>
        <!-- product section end -->
        <!-- banner section start -->
        <div class="info_section layout_padding">
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-md-6 col-12 info">
                                <h3>Allure Essence</h3>
                                <p class="mb-5">At Allure Essence Spa & Hair Studio, we take pride in offering a comprehensive range of hairdressing services tailored to meet the diverse needs of our clientele. Whether you're looking for a fresh new look, maintaining your current style, or preparing for a special occasion, our expert stylists are here to ensure you leave our salon looking and feeling your best.</p>
                                <img src="/storage/images/aboutSlider.webp" alt="banner-img">
                            </div>
                            <div class="col-md-1 col-12 buttons">
                                <div class="swiper-button-prev swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                <div class="swiper-button-next swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-md-4 col-12 info-side">
                                <div class="row">
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/aboutSlider1.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/aboutSlider2.webp">
                                </div>                           
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/aboutSlider3.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/aboutSlider4.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/aboutSlider5.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/aboutSlider6.webp">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-md-6 col-12 info">
                                <h3>Allure Essence</h3>
                                <p class="mb-5">At Allure Essence Spa & Hair Studio, we believe in the power of therapeutic touch to heal the body, calm the mind, and rejuvenate the spirit. Our comprehensive range of massage services is designed to address your unique needs and preferences, ensuring a deeply relaxing and restorative experience.</p>
                                <img src="/storage/images/about2Slide.webp" alt="banner-img">
                            </div>
                            <div class="col-md-1 col-12 buttons">
                                <div class="swiper-button-prev swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                <div class="swiper-button-next swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-md-4 col-12 info-side">
                                <div class="row">
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/spa.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/about2Slide2.webp">
                                </div>                           
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/spa1.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/about2Slide4.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/spa2.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/about2Slide6.webp">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-md-6 col-12 info">
                                <h3>Allure Essence</h3>
                                <p class="mb-5">Welcome to the Barber Shop at Allure Essence Spa & Hair Studio, where classic barbering meets contemporary style. Located in the heart of Nairobi, our barber shop offers a full range of grooming services designed to keep you looking sharp and feeling your best. Whether you need a quick trim, a precise shave, or a complete style transformation, our experienced barbers are here to deliver exceptional service with meticulous attention to detail.</p>
                                <img src="/storage/images/barber.webp" alt="banner-img">
                            </div>
                            <div class="col-md-1 col-12 buttons">
                                <div class="swiper-button-prev swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                <div class="swiper-button-next swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-md-4 col-12 info-side">
                                <div class="row">
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/barber1.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/barber2.webp">
                                </div>                           
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/barber3.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/barber4.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/barber5.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/barber6.webp">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-md-6 col-12 info">
                                <h3>Allure Essence</h3>
                                <p class="mb-5">Indulge in the ultimate pampering experience with our luxurious nail and feet services at Allure Essence Spa & Hair Studio. Located in the heart of Nairobi, our salon offers a serene escape where you can relax and rejuvenate while our skilled technicians provide meticulous care for your hands and feet. From elegant manicures to revitalizing pedicures and soothing foot scrubs, we offer a range of treatments designed to leave you looking and feeling your best.</p>
                                <img src="/storage/images/feet.webp" alt="banner-img">
                            </div>
                            <div class="col-md-1 col-12 buttons">
                                <div class="swiper-button-prev swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                <div class="swiper-button-next swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
                            <div class="col-md-4 col-12 info-side">
                                <div class="row">
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/feet1.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/feet2.webp">
                                </div>                           
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/feet3.webp">
                                </div>
                                <div class="col-6 mb-3">
                                    <img src="/storage/images/feet4.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/feet5.webp">
                                </div>
                                <div class="col-6">
                                    <img src="/storage/images/feet6.webp">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Add Pagination -->
                <div class="swiper-pagination2 mt-5"></div>
            </div>
        </div>

        <!-- banner section end -->

        <!-- customer section start -->
        <div class="customer_section layout_padding">
            <div class="container">
                <div class="row">
                <div class="col-sm-12">
                    <h1 class="customer_taital">What Our customers say</h1>
                </div>
                </div>
                <div class="swiper-container1 swiper3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client_section_2">
                            <div class="client_main">
                            <div class="client_left">
                                <div class="client_img"><img src="/storage/images/testimonial.webp" class="rounded" alt="testimonial"></div>
                            </div>
                            <div class="client_right">
                                <h3 class="name_text">Sarah J</h3>
                                <p class="dolor_text">I had an absolutely amazing experience at Allure Essence Spa & Hair Studio! From the moment I walked in, I was greeted with warm smiles and a calming atmosphere. </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client_section_2">
                            <div class="client_main">
                            <div class="client_left">
                                <div class="client_img"><img src="/storage/images/testimonial2.webp" class="rounded" alt="testimonial"></div>
                            </div>
                            <div class="client_right">
                                <h3 class="name_text">Mark R</h3>
                                <p class="dolor_text">Allure Essence Spa & Hair Studio exceeded all my expectations! I booked a full spa day for my wife and me, and it was worth every penny. The facilities are clean and beautifully decorated, creating a perfect ambiance for relaxation. </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client_section_2">
                            <div class="client_main">
                            <div class="client_left">
                                <div class="client_img"><img src="/storage/images/testimonial1.webp" class="rounded" alt="testimonial"></div>
                            </div>
                            <div class="client_right">
                                <h3 class="name_text">Emily L</h3>
                                <p class="dolor_text">I cannot say enough good things about Allure Essence Spa & Hair Studio! I had a wonderful experience from start to finish. The staff are incredibly friendly and made me feel at ease right away. </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev3"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="swiper-button-next3"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>

            </div>
        </div>
        <!-- customer section end -->
        <!-- contact section start -->
        <div class="contact_section layout_padding">
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <h1 class="contact_taital">Get In Touch</h1>
                    <p class="contact_text">Dont hesitate to contact us in case of any queries or when you want to book an appointment </p>
                </div>
                <div class="col-md-6">
                    <div class="contact_main">
                        <div class="contact_bt"><a href="/contact">Contact Form</a></div>
                        <div class="newletter_bt"><a href="#">Newletter</a></div>
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
        <!-- footer section start -->
        <div class="footer_section layout_padding">
            <div class="container">
                <div class="footer_logo"><a href="index.html"><img src="/storage/images/logo.png"></a></div>
                <div class="contact_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="address_text">Contact Us</h3>
                        <div class="address_bt">
                            <ul>
                            <li>
                                <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : 6th Floor, Wood Avenue Plaza, Kilimani, Nairobi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +07 95 614 357</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : info@allureessence.com</span>
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer_logo_1"><a href="index.html"><img src="/storage/images/logo.png"></a></div>
                        <p class="dummy_text">Experience relaxation and rejuvenation</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="main">
                            <h3 class="address_text text-white">Quick Links</h3>
                            <ul>
                                <li><a href="/about" class="text-white">About</a></li>
                                <li><a href="/contact" class="text-white">Contact</a></li>
                                <li><a href="/book" class="text-white">Book</a></li>
                                <li><a href="/blog" class="text-white">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="social_icon">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/allureessencespa"><i class="fa fa-facebook mb-4" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="mailto:info@allureessence.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="tel:+254795614357"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/allure_essence_spa/"><i class="fa fa-instagram mb-4" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">2024 All Rights Reserved. Powered by <a href="https://sansa.Digital">Sansa Digital</a></p>
            </div>
        </div>

        <!-- copyright section end -->
      <!-- Javascript files-->
      <!-- sidebar -->

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <script>
        var swiper3 = new Swiper('.swiper3', {
               spaceBetween: 30,
               pagination: {
               el: '.swiper-pagination3',
               clickable: true,
               },
               navigation: {
                  nextEl: '.swiper-button-next3',
                  prevEl: '.swiper-button-prev3',
               },
            });
        var swiper1 = new Swiper('.swiper1', {
            // Optional parameters
            direction: 'vertical',
            // If we need pagination
            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + ' — </span>';
                },
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },


                // Adding space between slides
                spaceBetween: 0,

                // Adding slide visibility check
                watchSlidesVisibility: true,

                // Adjusting slide transition
                speed: 600,

                // Debugging overlapping issues
                on: {
                    init: function () {
                        this.update();
                    },
                    slideChangeTransitionEnd: function () {
                        this.update();
                    }
                }
            });

         var slideTexts = [
               "hair dressing services", 
               "Spa services", 
               "Barber shop", 
               "Nail and feet services"
            ];
         var swiper2 = new Swiper('.swiper2', {
               pagination: {
                  el: '.swiper-pagination2',
                  type: 'custom',
                  renderCustom: function (swiper, current, total) {
                        var text = slideTexts[current - 1] || '';
                        return '<span class="swiper-pagination-current">' + current + '/' + total + '<span class="current-cat">' + text + '</span>'+ '</span>';
                  }
               },

               navigation: {
                  nextEl: '.swiper-button-next2',
                  prevEl: '.swiper-button-prev2',
               },
               on: {
                  slideChange: function () {
                        updatePagination(swiper2);
                  },
               },
            });

            function updatePagination(swiper) {
               var current = swiper.realIndex + 1; // Swiper uses 0-based index, so add 1 for human-readable number
               var total = swiper.slides.length;
               var text = slideTexts[current - 1] || '';
               var paginationEl = document.querySelector('.swiper-pagination2');
               paginationEl.innerHTML = '<span class="swiper-pagination-current">' + current + '/' + total + '<span class="current-cat">' + text + '</span>' + '</span>';
            }


            // Initialize the pagination display
            updatePagination(swiper2);


      </script>
   </body>
</html>
