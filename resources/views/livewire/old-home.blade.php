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
        <div class="container">
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
        </div>
    </section><!--main-banner-sec end-->