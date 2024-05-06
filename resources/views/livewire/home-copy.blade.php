@push('custom_css')
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
</style>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>

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
@endpush
<main>
    <header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-1.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Teimagine Digital Experience with</h2>
                            <h1>Start-ups and solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                 </div>
            </div>                    
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-2.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h2>Reimagine Digital Experience with</h2>
                            <h1>Intelligent solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                 </div>
            </div>                
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-2.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h2>Peimagine Digital Experience with</h2>
                            <h1>Intelligent Solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </header>
     
    <section id="map-container" class="d-none fullwidth-home-map hp3">
        <h3 class="vis-hid">Visible Heading</h3>
        <div wire:ignore id="map" data-map-zoom="12"></div>
    </section>

    <section class="form-banner">
        <h3 class="vis-hid">Invisible Heading</h3>
        <div class="banner_form">
            <div class="container">
                <form action="#" class="row banner-search">
                    <div class="form_field addres">
                        <input type="text" class="form-control" wire:model="search_ws" placeholder="Enter Address, City or State">
                    </div>
                    <div class="form_field tpmax">
                        <div class="form-group">
                            <div class="drop-menu">
                                <div class="select">
                                    <span>Any type</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropeddown">
                                    @foreach(config('global.workspace_unit_category') as $wpKey => $workspace_unit_category)
                                    <li>{{$workspace_unit_category}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form_field tpmax">
                        <div class="form-group">
                            <!-- <div class="drop-menu">
                                <div class="select">
                                    <span>Min Price</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropeddown">
                                    <li>300$</li>
                                    <li>400$</li>
                                    <li>500$</li>
                                    <li>200$</li>
                                    <li>600$</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="form_field tpmax">
                        <div class="form-group">
                            <!-- <div class="drop-menu">
                                <div class="select">
                                    <span>Max Price</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropeddown">
                                    <li>2000</li>
                                    <li>3000</li>
                                    <li>4000</li>
                                    <li>5000</li>
                                    <li>6000</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="form_field srch-btn">
                        <a href="#" class="btn btn-outline-primary ">
                            <i class="la la-search"></i>
                            <span>Search</span>
                        </a>
                    </div>
                </form>
            </div>
        </div><!--banner_form end-->
    </section><!--form-banner end-->
    
    <section class="popular-listing hp2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Discover</span>
                        <h3>Popular Listing</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($workspaces as $wspUnit)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                        <div class="card">
                            <a href="{{ url( 'workspace/'.$wspUnit->id)}}" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="{{ config('global.backend_url').'storage/'.$wspUnit->unit_image}}" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <!-- <h5>$550.000</h5> -->
                                        <span>{{config('global.workspace_unit_category')[$wspUnit->workspace_category]}}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="24_Property_Single.html" title="">
                                    <h3>{{$wspUnit->title}}</h3>
                                    <p> <i class="la la-map-marker"></i>
                                        {!! Str::limit($wspUnit->locationSpace['address'], 50, ' ...') !!}
                                    </p>
                                </a>
                                <ul>
                                    @foreach(json_decode($wspUnit->amenities) as $wSUamenities)
                                    @if($wSUamenities!='' && isset($facilitiesGlobalList[$wSUamenities]))
                                    <li>{{$facilitiesGlobalList[$wSUamenities]->title}}</li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer py-0">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="{{ url( 'workspace/'.$wspUnit->id)}}" class="btn btn-primary pull-right"> Book </a>
                            </div>
                            <a href="{{ url( 'workspace/'.$wspUnit->id)}}" title="" class="ext-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="float-end">{{$workspaces->onEachSide(1)->links()}}</div>
        </div>
    </section>

    <section class="main-banner-sec hp6">
        <div class="overlay-bg"></div>
        <div class="row m-0 p-0">
            <div class=" col-md-12 bannner_text text-center">
                
                <h3>Discover the Best Pricing</h3>
                <p>Co-working spaces, offices, meeting rooms and cafes,<br>find all at one place!</p>
                    <!-- <a href="#" title="" class="btn btn-light">Get Started Now</a> -->
                <div class="row justify-content-center">
                    @foreach(Config('global.open_space_packages') as $package)
                    <div class="col-md-6 col-lg-3 mb-30">
                        <div class="price-item text-center">
                            <div class="price-top">
                                <h4>{{$package['name']}}(@if($package['id']!=3){{$package['credits']}} @else Unlimited @endif Credits)</h4>
                                <h2 class="mb-0">{{Config('global.CURRENCY')}} {{$package['permonth_charge']}}</h2>
                                <span class="text-capitalize">per month</span><br>
                                <p>Access @if($package['id']!=3){{$package['max_access']}} @else Unlimited @endif</p>
                                <a href="{{ url('locations') }}" class="btn btn-light float-none">Buy now</a>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="col-md-6 col-lg-3 mb-30">
                        <div class="price-item text-center">
                            <div class="price-top">
                                <h4>Meeting Room</h4>
                                <h2 class="mb-0">AED 100</h2>
                                <span class="text-capitalize">per hour</span>
                                <br>
                                <!-- <p>Average access 16-18</p> -->
                                <a href="{{ url('locations') }}" class="btn btn-light float-none">Buy now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!--banner_img end-->
        </div>
    </section><!--main-banner-sec end-->

</main>

@push('custom_script')
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js'></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
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
</script>
@endpush