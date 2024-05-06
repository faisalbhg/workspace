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
.featuCoSpLi li{
    color: #000;
}
</style>
@endpush

<main>
    <section class="about-sec section-padding">
        <div class="container">
            <div class="text-center about-us-sec mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-info pt-0">
                            <h1 class="pb-0">We Work Co-working Space</h1>
                            <h4 style="border:none;">Gulf Tower B Block 9th Floor, Oud Metha, Dubai, United Arab Emirates</h4>
                            <p>Regardless of your area of activity, you will find an environment where you will feel genuinely comfortable. Inside the premises, dozens of people might be working simultaneously, being members of different teams or independent professionals. Co-workings spaces are open-planned where you can either rent a space (or spaces) that will belong exclusively to you or occupy a new one each time. When you want to take a break, you can enjoy our coffee lounge. For negotiations or presentations, you can book a meeting room. </p>
                            <h3 class="pt-4">Features</h3>
                            <ul class="featuCoSpLi">
                                <li>- Free pantry services (tea, coffee and water)</li>
                                <li>- Paid parking available</li>
                                <li>- Meeting Rooms </li>
                                <li>- 5mins away from metro station </li>
                                <li>- Major industries and sectors have their offices in the building</li>
                            </ul>
                            
                        </div><!--about-info end-->
                    </div>
                </div>
            </div><!-- about-us-sec end-->
            <div class="tab-content wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div role="tabpanel" class="tab-pane fade show active" id="yearly">
                    <div class="row justify-content-center">
                        @foreach(Config('global.open_space_packages') as $package)
                        <div class="col-md-6 col-lg-3 mb-30">
                            <div class="price-item text-center">
                                <div class="price-top">
                                    <h4>{{$package['name']}}</h4>
                                    <h2 class="mb-0">{{Config('global.CURRENCY')}} {{$package['permonth_charge']}}</h2>
                                    <span class="text-capitalize">per month</span>
                                </div>
                                <div class="price-content p-2">
                                    <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                        <li style="padding-left:0;">
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <h4 style="font-size:16px; text-align:center;">Access @if($package['id']!=3){{$package['max_access']}} @else Unlimited @endif</h4>
                                            <!-- <span class="c-black text-dark">Access @if($package['id']!=3){{$package['max_access']}} @else Unlimited @endif</span> -->
                                        </li>
                                        <!-- <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black text-dark">(@if($package['id']!=3){{$package['credits']}} @else Unlimited @endif Credits)</span>
                                        </li> -->
                                    </ul>
                                    <a href="#listingDiv" class="btn btn-primary float-none">Buy now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="popular-listing hp2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6" id="listingDiv">
                    <div class="section-heading">
                        <span>WorkSpace</span>
                        <h3>Popular Listing</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" >
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
