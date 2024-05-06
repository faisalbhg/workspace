@push('custom_css')
<style type="text/css">
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
  background-color: #fff;
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
  background-color: #000;
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
  background-color: #000;
}

.popular .price-top {
  background-color: #fff;
}

.popular .price-top:after {
  background-color: #fff;
}

.popular .price-top h4 {
  color: #101f41;
}

.popular .price-top h2, .popular .price-top span, .popular .price-top sup {
  color: #000;
}

.popular .price-content ul *,
.popular .price-content ul .zmdi-close, .popular .price-content ul .zmdi-check {
  color: #fff !important;
}
.about-info h1{
    color: #242526;
    font-size: 34px;
    font-weight: 500;
    margin-bottom: 4px;
}
.featuCoSpLi li, .featuCoSpLi h3{
    color: #FFF;
    text-align: left;
}
.featuCoSpLi ul li{
    list-style: inside;
    padding:5px 0;
    color: #FFF;
}
</style>
@endpush
<main>
    <section class="about-sec section-padding pb-4">
        <div class="container">
            <div class="text-center about-us-sec mb-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-info pt-0">
                            <h1 class="pb-0">We Work Meeting Rooms</h1>
                            <h4 style="border:none;">Gulf Tower A1 Block M Floor & B Block 9th Floor, Oud Metha, Dubai, United Arab Emirates</h4>
                            <p>The premises we offer are rather universal and can successfully accommodate diverse formats of meetings. The process of selecting meeting rooms is fully automated and you can do it via website.</p>
                        </div><!--about-info end-->
                    </div>
                </div>
                
            </div><!-- about-us-sec end-->
        </div>
    </section>

    <section class="discover-propt pb-4 pt-4 mb-0" style="background-image: url('{{ asset('images/meeting-header.jpg') }}');">
        <div class="overlay-bg" style="opacity: 0.60;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-info pt-0 featuCoSpLi ">
                        <h3 class="pt-4">Features</h3>
                        <ul class="">
                            <li> Free pantry services (tea, coffee and water)</li>
                            <li> Paid parking available</li>
                            <li> 5mins away from metro station </li>
                        </ul>
                    </div><!--about-info end-->
                </div>
                <div class="col-md-6">
                    <div class="about-info pt-0 featuCoSpLi ">
                        <h3 class="pt-4">You can Book a meeting room to hold the following types of events:</h3>
                        <ul class="">
                            <li>Seminars</li>
                            <li>Trainings</li>
                            <li>Workshops</li>
                            <li>Job interviews</li>
                            <li>Funding pitch</li>
                            <li>Career fairs</li>
                            <li>Other tailor-made occasions</li>
                        </ul>
                    </div><!--about-info end-->
                </div>
            </div>
        </div>
    </section>

    <section class="about-sec section-padding">
        <div class="container">
            <div class="tab-content wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div role="tabpanel" class="tab-pane fade show active" id="yearly">
                    <div class="row justify-content-center">
                        
                        
                        <div class="col-md-6 col-lg-3 mb-30">
                            <div class="price-item text-center">
                                <div class="price-top">
                                    <h4>Meeting Room</h4>
                                    <h2 class="mb-0">AED 100</h2>
                                    <span class="text-capitalize">per hour</span>
                                </div>
                                <div class="price-content">
                                    <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                        
                                    </ul>
                                    <a href="{{ url('workspace/7') }}" class="btn btn-primary float-none">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="popular-listing hp2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Meeting Rooms</span>
                        <h3>Popular Listing</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
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
</main>