<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Allure Essence</title>
      <meta name="description" content="Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.">
      <meta name="robots" content="index, follow">

      <meta name="twitter:title" content="Allure Essence">
        <meta name="twitter:description" content="<p>Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.</p>">
        <meta name="twitter:image" content="https://allureessencespa.com/storage/images/logo.png">
        <meta name="twitter:site" content="allureessencespa.com">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@allureessence">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Allure Essence"/>
        <meta property="og:description" content="<p>Welcome to Allure Essence Spa & Hair Studio, your sanctuary of tranquility and beauty in the heart of Nairobi. Immerse yourself in our luxurious treatments designed to rejuvenate your mind, body, and spirit.</p>" />
        <meta property="og:image" content="https://allureessencespa.com/storage/storage/images/logo.png" />
        <meta property="og:url" content="https://allureessencespa.com" />
        <meta property="og:site_name" content="Allure Essence"/>
        <!-- Fonts -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office:ital,wght@0,1..1000;1,1..1000|Open+Sans:400,700&&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Fonts -->
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
      <!-- Styles -->
      <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
      <!-- Scripts -->
      <link rel="stylesheet" href="{{ asset('build/assets/app-B_VZRs9C.css') }}">
      <link rel="stylesheet" href="{{ asset('build/assets/app-sEhFnVTV.css') }}">
      <link rel="stylesheet" href="{{ asset('build/assets/responsive-DhAHJOLM.css') }}">
      <script src="{{ asset('build/assets/app-BwDpqcm8.js') }}"></script>

   </head>
   <body class="app">
      <nav class="navbar navbar-expand-md shadow-sm text-3">
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
                  <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/services">Services</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/book">Book</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/blogs">Blog</a>
                  </li>
               </ul>



                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">

                  </ul>
               </div>
         </div>
      </nav>

      <main class="">
         @yield('content')
      </main>
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="storage/images/logo.png" alt="logo"></a></div>
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
                     <div class="footer_logo_1"><a href="index.html"><img src="storage/images/logo.png" alt="logo"></a></div>
                     <p class="dummy_text">Experience relaxation and rejuvenation</p>
                  </div>
                  <div class="col-sm-4">
                        <div class="main">
                            <h3 class="address_text text-white">Quick Links</h3>
                            <ul>
                                <li><a href="/about" class="text-white">About</a></li>
                                <li><a href="/contact" class="text-white">Contact</a></li>
                                <li><a href="/book" class="text-white">Book</a></li>
                                <li><a href="/blogs" class="text-white">Blog</a></li>
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

   </body>
</html>
