@push('custom_css')
<style type="text/css">
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
    .apartment-sec .card_bod_full:before
    {
        height: 0px;
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
</style>
@endpush

<main>

    <section class="main-banner-sec">
        <div class="banner-carousel">
            <div class="banner-slide">
                <img src="{{ asset('images/banner/new-banner-img-1.jpg') }}" alt="">
                <div class="banner_text">
                    <div class="rate-info">
                        <span>For Rent</span>
                        <h5>$550.000</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                                <h3>Traditional Apartments</h3>
                                <p> <i class="la la-map-marker"></i>212 5th Ave, New York</p>
                            </a>
                            <ul>
                                <li>3 Bathrooms</li>
                                <li>2 Beds</li>
                                <li>Area 555 Sq Ft</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="#" title="">Read More <i class="la la-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--banner_text end-->
            </div><!--banner-slide end-->
            <div class="banner-slide">
                <img src="{{ asset('images/banner/new-banner-img-2.jpg') }}" alt="">
                <div class="banner_text">
                    <div class="rate-info">
                        <span>For Rent</span>
                        <h5>$550.000</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                                <h3>Traditional Apartments</h3>
                                <p> <i class="la la-map-marker"></i>212 5th Ave, New York</p>
                            </a>
                            <ul>
                                <li>3 Bathrooms</li>
                                <li>2 Beds</li>
                                <li>Area 555 Sq Ft</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="#" title="">Read More <i class="la la-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--banner_text end-->
            </div><!--banner-slide end-->
            <div class="banner-slide">
                <img src="{{ asset('images/banner/new-banner-img-3.jpg') }}" alt="">
                <div class="banner_text">
                    <div class="rate-info">
                        <span>For Rent</span>
                        <h5>$550.000</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                                <h3>Traditional Apartments</h3>
                                <p> <i class="la la-map-marker"></i>212 5th Ave, New York</p>
                            </a>
                            <ul>
                                <li>3 Bathrooms</li>
                                <li>2 Beds</li>
                                <li>Area 555 Sq Ft</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="#" title="">Read More <i class="la la-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--banner_text end-->
            </div><!--banner-slide end-->
        </div><!--banner-carousel end-->
    </section><!--main-banner-sec end-->

    <section class="partner-sec section-padding pb-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading mb-2">
                        <h3>WE WORK</h3>
                        <span>ENDLESS SOLUTIONS</span>
                    </div>
                </div>
            </div><!--justify-content-center end-->
        </div>
    </section><!--agents-sec end-->
        
    <section class="apartment-sec hp5 section-padding">
        <div class="container">
            <div class="card">
                <a href="24_Property_Single.html" title="">
                    <div class="img-block">
                        <div class="overlay"></div>
                        <img src="{{ asset('images/we-work-lobby.jpg') }}" alt="" class="img-fluid">
                    </div>
                </a>
                <div class="card_bod_full">
                    <div class="card-body pb-4  ">
                        <p>If you are looking for a modern, comfortable and well-equipped workspace in Dubai or Sharjah, we will be glad to offer you a vast selection of options. You can with equal success launch a startup from scratch, relocate to the UAE an existing enterprise or open a branch here. Or maybe you already have a company in Dubai and just want to move it to a newer, more advanced facility. Opening up incredible opportunities for businesses of all sizes, WE WORK is an ideal place for your office to play a crucial role in your company's growth.</p>
                        <p>Business competition in UAE is rather fierce. The office you rent will become an essential competitive benefit for your enterprise. A comfortable working space will motivate your staff, please your customers and contribute to the impeccable reputation of the brand. Make sure to rent the most appropriate premises for your sphere of activity and target audience, selecting from the categories that we offer.  </p>
                        <a href="{{ url('about') }}" class="btn btn-outline-primary view-btn"><i class="icon-arrow-right-circle"></i>explore</a>
                    </div>
                    
                </div><!--card_bod_full end-->
                <a href="24_Property_Single.html" title="" class="ext-link"></a>
            </div>
            <div class="intro-thumb-row" style="top:0px;">
                <a href="{{ url('workspace/1') }}" class="intro-thumb">
                    <img src="{{ asset('images/co-working-thumb.jpg') }}" alt="">
                    <h6>Co Working Space</h6>
                </a>
                <a href="{{ url('workspace/7') }}" class="intro-thumb">
                    <img src="{{ asset('images/meeting-room.jpg') }}" alt="">
                    <h6>Meeting Room</h6>
                </a>
                <a href="{{ url('workspace/8') }}" class="intro-thumb">
                    <img src="{{ asset('images/office-space.jpg') }}" alt="">
                    <h6>Private Offices</h6>
                </a>
            </div>
        </div>
    </section><!--apartment-sec end-->

    <!--Services Paralex-->
    <section class="discover-propt pb-4 pt-4" style="background-image: url('{{ asset('images/discover-bg-img.jpg') }}');">
        <div class="overlay-bg" style="opacity: 0.60;"></div>
        <div class="container">
            <div class="discover-text pt-4">
                <h3>Features</h3>
                <p><u>Explore a variety of convenient features</u></p>
            </div>
            <div class="row futures mb-4 pb-4">
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
            <div class="card">
                <div class="card_bod_full">
                    <div class="card-body">
                        <h3>Business Networking Hub</h3>
                        <p>Join our exclusive networking platform We Work, connecting you with game-changing partners, investors, and customers.</p>
                        <p>Become part of our thriving community. Join We-Work.ae's Business Networking Hub and experience the transformative power of collaboration.</p>
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
                <a href="24_Property_Single.html" title="" class="ext-link"></a>
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
                            <div class="card-body pt-2">
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
    <section class="testimonial-sec hp5 section-padding">
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
                    <div class="comment-info">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elitco nsequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accum sanpsum velit. Nam nec tellus a odio tinci.</p>
                        <div class="cm-info-sec">
                            <div class="cm-img">
                                <img src="https://via.placeholder.com/61x61" alt="">
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
                                <img src="https://via.placeholder.com/61x61" alt="">
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
                                <img src="https://via.placeholder.com/61x61" alt="">
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
                                <img src="https://via.placeholder.com/61x61" alt="">
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
                                <img src="https://via.placeholder.com/61x61" alt="">
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
                                <img src="https://via.placeholder.com/61x61" alt="">
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

        

</main>

@push('custom_script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('js/map-cluster/infobox.min.js') }}"></script>
    <script src="{{ asset('js/map-cluster/markerclusterer.js') }}"></script>
    <script src="{{ asset('js/map-cluster/maps.js') }}"></script>
@endpush