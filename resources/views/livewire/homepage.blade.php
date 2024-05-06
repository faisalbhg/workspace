@push('custom_css')
<!--Banner SLide-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<style type="text/css">
    header .item {
      height: 100vh;
      position: relative;
    }
    header .item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    header .item .cover {
      padding: 75px 0;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      align-items: center;
    }
    header .item .cover .header-content {
      position: relative;
      padding: 56px;
      overflow: hidden;

    }
    header .item .cover .header-content .line {
      content: "";
      display: inline-block;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      position: absolute;
      border: 9px solid #fff;
      -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
      clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
    }
    header .item .cover .header-content h2 {
      font-weight: 300;
      font-size: 35px;
      color: #fff;
    }
    header .item .cover .header-content h1 {
      font-size: 56px;
      font-weight: 600;
      margin: 5px 0 20px;
      word-spacing: 3px;
      color: #fff;
    }
    header .item .cover .header-content h4 {
      font-size: 24px;
      font-weight: 300;
      line-height: 36px;
      color: #fff;
    }
    header .owl-item.active h1 {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      animation-name: fadeInDown;
      animation-delay: 0.3s;
    }
    header .owl-item.active h2 {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      animation-name: fadeInDown;
      animation-delay: 0.3s;
    }
    header .owl-item.active h4 {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      animation-name: fadeInUp;
      animation-delay: 0.3s;
    }
    header .owl-item.active button {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      animation-name: fadeInUp;
      animation-delay: 0.3s;
    }
    header .owl-item.active .line {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      animation-name: fadeInLeft;
      animation-delay: 0.3s;
    }
    header .owl-nav .owl-prev {
      position: absolute;
      left: 15px;
      top: 43%;
      opacity: 0;
      -webkit-transition: all 0.4s ease-out;
      transition: all 0.4s ease-out;
      background: rgba(0, 0, 0, 0.5) !important;
      width: 40px;
      cursor: pointer;
      height: 40px;
      position: absolute;
      display: block;
      z-index: 1000;
      border-radius: 0;
    }
    header .owl-nav .owl-prev span {
      font-size: 1.6875rem;
      color: #fff;
    }
    header .owl-nav .owl-prev:focus {
      outline: 0;
    }
    header .owl-nav .owl-prev:hover {
      background: #000 !important;
    }
    header .owl-nav .owl-next {
      position: absolute;
      right: 15px;
      top: 43%;
      opacity: 0;
      -webkit-transition: all 0.4s ease-out;
      transition: all 0.4s ease-out;
      background: rgba(0, 0, 0, 0.5) !important;
      width: 40px;
      cursor: pointer;
      height: 40px;
      position: absolute;
      display: block;
      z-index: 1000;
      border-radius: 0;
    }
    header .owl-nav .owl-next span {
      font-size: 1.6875rem;
      color: #fff;
    }
    header .owl-nav .owl-next:focus {
      outline: 0;
    }
    header .owl-nav .owl-next:hover {
      background: #000 !important;
    }
    header:hover .owl-prev {
      left: 0px;
      opacity: 1;
    }
    header:hover .owl-next {
      right: 0px;
      opacity: 1;
    }
</style>
<!-- End Banner Style -->

<style type="text/css">
    .main-banner-sec.hp6
    {
        background-image: url({{ asset('images/banner/b3.jpg')}});
        background-position:center center;
        padding: 200px 0;
    }
    /* ===== PRICING PAGE ===== */
    .price-tabs {
      background-color: #fff;
      -webkit-box-shadow: 0 5px 20px 0 rgba(39, 39, 39, 0.1);
              box-shadow: 0 5px 20px 0 rgba(39, 39, 39, 0.1);
      display: inline-block;
      padding: 7px;
      border-radius: 40px;
      border: 1px solid #000;
      margin-bottom: 45px;
    }

    @media (min-width: 768px) {
      .price-tabs {
        margin-bottom: 60px;
      }
    }

    .price-tabs .nav-link {
      color: #000;
      font-weight: 500;
      font-family: "Montserrat", sans-serif;
      font-size: 16px;
      padding: 12px 35px;
      display: inline-block;
      text-transform: capitalize;
      border-radius: 40px;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }

    @media (min-width: 768px) {
      .price-tabs .nav-link {
        padding: 12px 40px;
      }
    }

    .price-tabs .nav-link.active {
      background-color: #000;
      color: #fff;
    }

    .price-item {
      background-color: #00000070;
      -webkit-box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
              box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
      border-radius: 10px;
    }

    @media (min-width: 768px) {
      .price-item {
        margin: 0 20px;
        padding-top: 20px;
      }
    }

    .price-item .price-top {
      -webkit-box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
              box-shadow: 0 5px 30px 0 rgba(39, 39, 39, 0.15);
      padding: 50px 0 25px;
      background-color: #00000040;
      border-radius: 10px;
      position: relative;
      z-index: 0;
      margin-bottom: 33px;
    }

    @media (min-width: 768px) {
      .price-item .price-top {
        margin: 0 -20px;
        border-radius: 20px;
      }
    }

    .price-item .price-top:after {
      height: 50px;
      width: 100%;
      border-radius: 0 0 10px 10px;
      background-color: #000;
      position: absolute;
      content: '';
      left: 0;
      bottom: -17px;
      z-index: -1;
      -webkit-transform: skewY(5deg);
              transform: skewY(5deg);
      -webkit-box-shadow: 0 5px 10px 0 rgba(113, 113, 113, 0.15);
              box-shadow: 0 5px 10px 0 rgba(113, 113, 113, 0.15);
    }

    @media (min-width: 768px) {
      .price-item .price-top:after {
        border-radius: 0 0 20px 20px;
      }
    }

    .price-item .price-top * {
      color: #fff;
    }

    .price-item .price-top h2 {
      font-weight: 700;
      font-size: 2rem;
    }

    .price-item .price-top h2 sup {
      top: 13px;
      left: -5px;
      font-size: 0.35em;
      font-weight: 500;
      vertical-align: top;
    }

    .price-item .price-content {
      padding: 30px;
      padding-bottom: 40px;
    }

    .price-item .price-content li {
      position: relative;
      margin-bottom: 15px;
      margin-left: 10px;
      margin-right: 10px;
      text-align: center;
    }

    @media (min-width: 992px) {
      .price-item .price-content li {
        padding-left: 28px;
        text-align: left;
      }
    }

    @media (min-width: 992px) {
      .price-item .price-content li i {
        position: absolute;
        left: 0;
        top: 3px;
      }
    }

    .price-item .price-content .zmdi-check {
      color: #28a745;
    }

    .price-item .price-content .zmdi-close {
      color: #f00;
    }

    .popular {
      background-color: #00000070;
    }

    .popular .price-top {
      background-color: #00000040;
    }

    .popular .price-top:after {
      background-color: #000;
    }

    .popular .price-top h4 {
      color: #fff;
    }

    .popular .price-top h2, .popular .price-top span, .popular .price-top sup {
      color: #fff;
    }

    .popular .price-content ul *,
    .popular .price-content ul .zmdi-close, .popular .price-content ul .zmdi-check {
      color: #fff !important;
    }


    .futures img{
        width: 25%;
        
    }
    .futures .future{
        text-align: center;
    }
    .futures p{
        color: #FFF;
        font-size: 14px;
        margin-top: 10px;
        text-align: center;
    }
    .discover-propt h2{
        font-size: 1rem;
        color: #FFF;
        border:1px solid #FFF;
        padding:20px 10px;
    }
    .discover-propt h2:hover{
        background-color: #00000081;
        -webkit-box-shadow: 0 5px 20px 0 #FFF;
        box-shadow: 0 5px 20px 0 #FFF;
        display: inline-block;
    }
    .intro-thumb{
      -webkit-box-shadow: 0px 5px 20px 0px rgba(58 57 57);
      box-shadow: 0px 5px 20px 0px rgb(58 57 57);
    }
    .intro-thumb:hover{
        -webkit-box-shadow: 0 5px 20px 0 #000;
              box-shadow: 0 5px 20px 0 #000;
        display: inline-block;
    }

    @media (max-width: 991px){
        .intro-thumb-row {
            display: block !important;
        }
    }
    .blog-img:before, .agent_img:before{
        background-color: rgb(0 0 0 / 65%);
    }
    .compLogo{
        height: 100px;
    }


    .circular-img img
    {
                        /* the magic */
      display: block;
      width: 180px;
      height: 180px;
      overflow: hidden;
      -webkit-border-radius: 180px;
      -moz-border-radius: 180px;
      -ms-border-radius: 180px;
      -o-border-radius: 180px;
      border-radius: 180px;
      /* the rest */
      position: relative; /* for the overlay later */
      margin: 0px auto;
      text-align: center;
      margin-bottom: 10px;
      border: 3px solid #FFF;
      -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3),inset 0px 3px 8px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3),inset 0px 3px 8px rgba(0,0,0,0.3);
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3),inset 0px 3px 8px rgba(0, 0, 0, 0.3);
    }
    .bsnSlnDiv a
    {
        padding:1em;
        text-align: center;
        display:inline-block;
        text-decoration: none !important;
        margin:0 auto;

        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }
    .slideSec{
        height: 100%;
        -webkit-box-shadow: 0 5px 20px 0 rgba(39, 39, 39, 0.1);
              box-shadow: 0 5px 20px 0 rgba(39, 39, 39, 0.1);
    }
    .slideSec h1{
        font-size: 20px !important;
        text-transform: uppercase   ;
    }
    .slideSec button:hover{
        background-color: #FFF !important;
        color: #000 !important;
    }
</style>
@endpush

<main>

    <!-- Slider Banner-->
    <header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-1.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Discover the future of workspace with</h2>
                            <h1 class="mb-0 pb-0">WE WORK BUSINESS CENTER</h1>
                            <h4 class="text-center mt-0 pt-0">ENDLESS SOLUTIONS</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-2.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="row slideSecs">
                            <div class="col-md-4 slideSec">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h1>Private Offices</h1>
                                    <a href="{{ url('private-offices') }}"><button class="btn btn-primary" style="float:left; border-radius: inherit !important;">Book Now</button></a>
                                </div>
                            </div>
                            <div class="col-md-4 slideSec">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h1>CoWorking Space</h1>
                                    <a href="{{ url('coworkspace') }}"><button class="btn btn-primary" style="float:left; border-radius: inherit !important;">Book Now</button>
                                </div>
                            </div>
                            <div class="col-md-4 slideSec">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h1>Meeting Room</h1>
                                    <a href="{{ url('meeting-rooms') }}"><button class="btn btn-primary" style="float:left; border-radius: inherit !important;">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                 </div>
            </div>                
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-3.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h1>Business Solutions</h1>
                            <h4>Discover a world of possibilities with WeWork.ae</h4>
                            <a href="{{ url('business-solutions') }}"><button class="btn btn-primary" style="float:left; border-radius: inherit !important;">Business Solutions</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Slider Banner -->

    <!--First intro -->
    <section class="intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pl-0">
                    <div class="intro-content">
                        <h3 class=" mt-0 mb-0">WE WORK</h3>
                        <h4 class="mb-4"><span>ENDLESS SOLUTIONS</span></h4>
                        <p>If you are looking for a modern, comfortable and well-equipped workspace in Dubai or Sharjah, we will be glad to offer you a vast selection of options. You can with equal success launch a startup from scratch, relocate to the UAE an existing enterprise or open a branch here. Or maybe you already have a company in Dubai and just want to move it to a newer, more advanced facility. Opening up incredible opportunities for businesses of all sizes, WE WORK is an ideal place for your office to play a crucial role in your company's growth.</p>
                        <p>Business competition in UAE is rather fierce. The office you rent will become an essential competitive benefit for your enterprise. A comfortable working space will motivate your staff, please your customers and contribute to the impeccable reputation of the brand. Make sure to rent the most appropriate premises for your sphere of activity and target audience, selecting from the categories that we offer.  </p>
                        

                        </p>
                        <a href="{{ url('about') }}" class="btn btn-outline-primary view-btn" style="float:left;">
                            <i class="icon-arrow-right-circle"></i>explore</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pr-0">
                    <div class="intro-img">
                        <img src="{{ asset('images/we-work-lobby.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="intro-thumb-row" style="top:0px;">
                <a href="{{ url('coworkspace') }}" class="intro-thumb">
                    <img src="{{ asset('images/co-working-thumb.jpg') }}" alt="">
                    <h6>Co Working Space</h6>
                </a>
                <a href="{{ url('meeting-rooms') }}" class="intro-thumb">
                    <img src="{{ asset('images/meeting-room.jpg') }}" alt="">
                    <h6>Meeting Room</h6>
                </a>
                <a href="{{ url('private-offices') }}" class="intro-thumb">
                    <img src="{{ asset('images/office-space.jpg') }}" alt="">
                    <h6>Private Offices</h6>
                </a>
            </div>
        </div>
    </section>
    <!--End First intro -->

    <!--Services Paralex-->
    <section class="discover-propt pb-4 pt-4" style="background-image: url('{{ asset('images/discover-bg-img.jpg') }}');">
        <div class="overlay-bg" style="opacity: 0.60;"></div>
        <div class="container">
            <div class="discover-text pt-4 pb-4">
                <h3>Features</h3>
                <p><u>Explore a variety of convenient features</u></p>
            </div>
            <div class="row futures pb-4 mb-4">
                <div class="col-md-2 future">
                    <img src="{{ asset('images/icons/future-table-icon.png')}}">
                    <p>FURNISHED OFFICES</p>
                </div>
                <div class="col-md-2 future">
                    <img src="{{ asset('images/icons/future-pantry-icon.png')}}">
                    <p>PANTRY ACCESS</p>
                </div>
                <div class="col-md-2 future">
                    <img src="{{ asset('images/icons/future-meetingroom-icon.png')}}">
                    <p>MEETING ROOMS</p>
                </div>
            
                <div class="col-md-2 future">
                    <img src="{{ asset('images/icons/free-dewa1.png')}}">
                    <p>FREE DEWA/AC/Wi-Fi</p>
                </div>
                <div class="col-md-2 future">
                    <img src="{{ asset('images/icons/cleaning-icon1.png')}}">
                    <p>HOUSEKEEPING</p>
                </div>
                <div class="col-md-2 future">
                    <img src="{{ asset('images/icons/maintanence-icon1.png')}}">
                    <p>MAINTENANCE</p>
                </div>
            </div>

            <div class="discover-text mt-4 pt-4 mb-4 d-none">
                <p>Experience a new level of excellence with our plans at We Work Business Center. Our team is thrilled to introduce innovative solutions for our valued clients.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h2 >Providing online access.</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2>Improved services.</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2>Exciting new Programs.</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Services Paralex-->

    <!--Business Networking Hub-->
    <section class="apartment-sec section-padding">
        <div class="container">
            <div class="card" style="-webkit-box-shadow: 0px 5px 20px 0px rgba(58 57 57); box-shadow: 0px 5px 20px 0px rgb(58 57 57);">
                <div class="card_bod_full" style="border: 1px solid rgba(0,0,0,.125); border-bottom: none;">
                    <div class="card-body">
                        <h3>Business Networking Hub</h3>
                        <p>Join our exclusive networking platform We Work, connecting you with game-changing partners, investors, and customers.</p>
                        <p>Become part of our thriving community. Join We-Work.ae's Business Networking Hub and experience the transformative power of collaboration.</p>
                        <a href="{{ url('business-networking-hub') }}" class="btn btn-outline-primary view-btn" style="float:left;">
                            <i class="icon-arrow-right-circle"></i>explore</a>
                    </div>
                    <div class="card-footer">
                        <div class="crd-links">
                        </div><!--crd-links end-->
                    </div>
                </div><!--card_bod_full end-->
                
                <div class="img-block" style="height: 461px;">
                    <div class="overlay"></div>
                    <img src="{{ asset('images/resources/apart-img1.jpg')}}" alt="" class="img-fluid">
                </div>
                
            </div>
        </div>
    </section>
    <!--End Business Networking Hub-->
     
    <!--Business Solutions-->
    <section class="explore-feature hp7 section-padding pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading"  style="margin-bottom: 0px;">
                        <span>Explore Features</span>
                        <h3>Service You Need</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="#" title="">
                        <div class="card" style="border:none;">
                            <div class="card-body pt-2 intro-content">
                                <p>Discover a world of possibilities with WeWork.ae. Our range of services is designed to meet every aspect of your business needs, providing you with the flexibility and support to thrive. A dynamic workspace where you can choose any available desk in the common area on a first-come, first-served basis. A personal workspace designed for you, providing the consistency of having your own desk in a shared office space. Fully furnished, lockable office space for teams of all sizes, designed for productivity and collaboration.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <section class="explore-feature section-padding pt-0">
        <div class="container">
            <div class="d-none row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading mb-2">
                        <h3>Additional Service</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="height: 100%; border: none;">
                        <div class="card-body p-2">
                            <div class="circular-img">
                                <img src="{{ asset('images/services/accounting-service-1.jpg') }}" >
                            </div>
                            <h3>Accounting Services</h3>
                            <!-- <p>Professional print station for your business needs.</p> -->
                        </div>
                    </div><!--card end-->
                </div>
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="height: 100%; border:none;">
                        <div class="card-body p-2 ">
                            <div class="circular-img">
                                <img src="{{ asset('images/services/primage1.jpg') }}" >
                            </div>
                            <h3>Corporate Compliance</h3>
                            <!-- <p>Enhance your workspace with Additional Furniture Service, customizable to your requirements.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="height: 100%; border:none;">
                        <div class="card-body p-2">
                            <div class="circular-img">
                                <img src="{{ asset('images/services/it-support1.jpg') }}" >
                            </div>
                            <h3>IT Support</h3>
                            <!-- <p>Secure your convenience with our Car Parking services:</p>
                            <ul style="border-bottom:none;">
                                <li>Automated Parking System</li>
                                <li>24 Hr. Surveillance</li>
                                <li>Monthly and Yearly package</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" style="height: 100%; border:none;">
                        <div class="card-body p-2 ">
                            <div class="circular-img">
                                <img src="{{ asset('images/services/legal-support1.jpg') }}" >
                            </div>
                            <h3>Legal Support</h3>
                            <!-- <p>Enhance your workspace with Additional Furniture Service, customizable to your requirements.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading mb-2 bsnSlnDiv">
                        <a href="{{ url('business-solutions') }}" class="btn btn-outline-primary view-btn" style="float:none;">
                            <i class="icon-arrow-right-circle"></i>explore more services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Business Solutions-->

    

    <!-- Testimonial -->
    <section class="testimonial-sec hp5 section-padding" wire:ignore>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Clients Say</span>
                        <h3>Testimonials</h3>
                    </div>
                </div>
            </div>
            <div class="testimonail-sect">
                <div class="comment-carousel">
                  @foreach($testimonials as $testimonial)
                    <div class="comment-info">
                        <p>{{$testimonial['message']}}</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img2.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>{{$testimonial['name']}}</h3>
                                <h4>{{$testimonial['company_name']}}</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                  @endforeach
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img2.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>Kritsofer Nolan</h3>
                                <h4>Property Owner</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img3.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>Kritsofer Nolan</h3>
                                <h4>Property Owner</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img2.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>Kritsofer Nolan</h3>
                                <h4>Property Owner</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img3.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>Kritsofer Nolan</h3>
                                <h4>Property Owner</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img2.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>Kritsofer Nolan</h3>
                                <h4>Property Owner</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="{{ asset('images/resources/cm-img3.png') }}" alt="">
                            </div><!--author-img end-->
                            <div class="cm-info">
                                <h3>Kritsofer Nolan</h3>
                                <h4>Property Owner</h4>
                            </div>
                        </div><!--cm-info-sec end-->
                    </div><!--comment-info end-->
                </div><!--comment-carousel end-->
            </div><!--testimonail-sect end-->
        </div>
    </section>
    <!-- End Testimonial -->

    <!-- contact Form -->
    <section class="explore-feature section-padding pt-0">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading">
                    <span>Get in touch</span>
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-details-sec">
                <div class="row">
                    <div class="col-lg-8 col-md-8 pl-0">
                        <div class="contact_form">
                            <div class="form-group no-pt">
                                <div class="missing-message">
                                    Populate Missing Fields
                                </div>
                                <div class="success-message">
                                    <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                                </div>
                                <div class="error-message">Populate Missing Fields</div>
                            </div><!--form-group end-->
                            <div class="form-fieldss">
                                <div class="row">
                                    @if($successEmailResp)
                                    <h4><span class="text-success"><strong>Success!</strong> Thankyou for contacting we-work, we will cotact you soon..!</span></h4>
                                    @endif
                                    <div class="col-lg-4 col-md-4 pl-0">
                                        <div class="form-field">
                                            <input type="text" name="name" placeholder="Your Name" id="name" wire:model="name">
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-field">
                                            <input type="email" name="email" placeholder="Your Email" id="email" wire:model="email">
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 pr-0">
                                        <div class="form-field">
                                            <input type="text" name="phone" placeholder="Your Phone" wire:model="phone">
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-12 col-md-12 pl-0 pr-0">
                                        <div class="form-field">
                                            <textarea name="message" placeholder="Your Message"  wire:model="bc_c_message"></textarea>
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-12 col-md-12 pl-0">
                                        <button type="button" class="btn-default submit"  wire:click="getContactSubmit" >Send Message</button>
                                    </div>
                                    <div wire:loading wire:target="getContactSubmit">
                                        <div style="display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index:999999; width:100%; height:100%; opacity: .75;" >
                                            <div class="la-ball-beat">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><!--form-fieldss end-->
                        </div><!--contact_form end-->
                    </div>
                    <div class="col-lg-4 col-md-4 no-pt">
                        <div class="contact_info mt-0">
                            <h3>Contact Information</h3>
                            <ul class="cont_info">
                                <li><i class="la la-map-marker"></i> We Work Business Centre LLC, Gulf Towers, 9th Floor B1 Block, Oud Metha, Burdubai, Dubai, United Arab Emirates</li>
                                <!-- <li><i class="la la-phone"></i> +1 212-925-3797</li> -->
                                <li><i class="la la-envelope"></i><a href="mailto:support@we-work.ae" title="">support@we-work.ae</a></li>
                                <li><i class="la la-phone"></i><a href="mailto:+971564100094">800-WEWORK (939675) / +971564100094</a></p>
                            </ul>
                            <ul class="social_links">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!--contact_info end-->
                    </div>
                </div>
            </div><!--contact-details-sec end-->
        </div>
    </section>
    <!-- COntact Form End-->

</main>

@push('custom_script')
<script src="{{ asset('js/owl.carousel.js')}}"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:false,
        rewind: true,
        margin:10,
        dots:false,
        nav:true,
        mouseDrag:true,
        autoplay:true,
        animateOut: 'slideOutRight',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(document).ready(function(){
        /*$('.busSln').mouseover(function(){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).show(200); 
        });
        $('.busSln').mouseover(function(){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).show(200); 
        });*/

        $('.busSln').bind('mouseover',function(event){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).show(200); 
        })
        .bind('mouseleave',function(){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).hide(200); 
        });


        

    });
</script>

@endpush
