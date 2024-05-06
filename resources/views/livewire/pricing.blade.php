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
</style>
@endpush
<section class="about-sec section-padding">
    <div class="container">
        <div class="text-center about-us-sec mb-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-info">
                        <h3>Choose a plan that works for you</h3>
                        <p>Whether you’re a growing start up, a Fortune 500 company or flying solo - our flexible plans are tailored to meet your workspace needs.</p>
                        
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
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black text-dark">Access @if($package['id']!=3){{$package['max_access']}} @else Unlimited @endif</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black text-dark">(@if($package['id']!=3){{$package['credits']}} @else Unlimited @endif Credits)</span>
                                    </li>
                                </ul>
                                <a href="{{ url('workspace/1') }}" class="btn btn-primary float-none">Buy now</a>
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
            <div role="tabpanel" class="tab-pane fade" id="monthly">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-30">
                        <div class="price-item text-center">
                            <div class="price-top">
                                <h4>Personal</h4>
                                <h2 class="mb-0"><sup>$</sup>29</h2>
                                <span class="text-capitalize">per month</span>
                            </div>
                            <div class="price-content">
                                <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Eget erovtiu faucid</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Cras justo odio</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Morbi leo risus</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span>Porta consectetur ac</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span> Vestibulum at eros</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span>Adipisci atque beatae</span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-custom">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-30">
                        <div class="price-item text-center popular">
                            <div class="price-top">
                                <h4>Business</h4>
                                <h2 class="mb-0"><sup>$</sup>59</h2>
                                <span class="text-capitalize">per month</span>
                            </div>
                            <div class="price-content">
                                <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Eget erovtiu faucid</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Cras justo odio</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Morbi leo risus</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span>Porta consectetur ac</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span> Vestibulum at eros</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span>Adipisci atque beatae</span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-custom btn-light">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-30">
                        <div class="price-item text-center">
                            <div class="price-top">
                                <h4>Enterprise</h4>
                                <h2 class="mb-0"><sup>$</sup>99</h2>
                                <span class="text-capitalize">per month</span>
                            </div>
                            <div class="price-content">
                                <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Eget erovtiu faucid</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Cras justo odio</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check mr-2"></i>
                                        <span class="c-black">Morbi leo risus</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span>Porta consectetur ac</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span> Vestibulum at eros</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-close mr-2"></i>
                                        <span>Adipisci atque beatae</span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-custom">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>