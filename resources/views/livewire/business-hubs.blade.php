@push('custom_css')
<style type="text/css">
    .img-block img {
        width: 80%;
        margin: auto 10%;
    }
</style>
@endpush
<main>
    <section class="main-banner-sec hp6" style="background-image: url('{{ asset('images/bus_net_hub_bg1.jpg') }}');">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="bannner_text">
                <h3>Business Networking Hub</h3>
                <p>Join the exclusive business networking platform, WE WORK connect you with game-changing partners, investors, and customers. Become part of our thriving community and experience the transformative power of collaboration.</p>
                
                <!-- <ul class="cont-links">
                    <li><span class="text-light"><i class="la la-phone"></i>800-WEWORK (939675) / +971564100094</span></li>
                    <li><a href="mailto:support@we-work.ae" title="" class="text-light"><i class="la la-envelope"></i>support@we-work.ae</a></li>
                </ul>
                <ul class="socio-links">
                    <li><a href="#" title="" class="text-light"><i class="fa fa-facebook"></i></a></li>
                    
                    <li><a href="#" title="" class="text-light"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" title="" class="text-light"><i class="fa fa-linkedin"></i></a></li>
                </ul> -->
                <a href="#" title="" class="btn btn-primary st1 pull-left businessHub-op" style="float: left;">Get Started Now</a>
            </div><!--banner_img end-->
        </div>
    </section>

    


    

    <section class="page-main-content section-padding d-none">
        <div class="container">
            <div class="agent-profile-sec">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 pl-0 pr-0">
                        <div class="agent-profile">
                            <div class="agent-img">
                                <img src="{{ asset('images/busNetHubMain.jpg') }}" alt="">
                            </div><!--agent-img end-->
                            <div class="agent-info">
                                <h3>Business Networking Hub</h3>
                                
                                <p>Join the exclusive business networking platform, WE WORK connect you with game-changing partners, investors, and customers. Become part of our thriving community and experience the transformative power of collaboration.</p>
                                <ul class="cont-links">
                                    <li><span><i class="la la-phone"></i>800-WEWORK (939675) / +971564100094</span></li>
                                    <li><a href="mailto:support@we-work.ae" title=""><i class="la la-envelope"></i>support@we-work.ae</a></li>
                                </ul>
                                <ul class="socio-links">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    
                                    <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>

                                <a href="#" class="nav-link">
                                    <i class="la la-sign-in"></i>
                                    <span><b class="businessHub-op">Create Business Hub</b></span>
                                </a>

                            </div><!--agent-info end-->
                        </div><!--agent-profile end-->
                    </div>
                    
                </div>
            </div><!--agent-profile-sec end-->
        </div>
    </section><!--page-main-content end-->

    <section class="listing-main-sec section-padding2">
        <div class="container">
            <div class="listing-main-sec-details">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Connect</span>
                            <h3>Listing Nusiness Hubs</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="listing-directs">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="grid-view-tab1" role="tabpanel" aria-labelledby="grid-view-tab1">
                                    <div class="list_products">
                                        <div class="row">

                                            @forelse($businessHubs as $businessHub)
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="card">
                                                    <a href="24_Property_Single.html" title="">
                                                        <div class="img-block" style="padding:20px;">
                                                            <div class="overlay"></div>
                                                            <img src="{{url('storage/'.$businessHub->company_logo)}}" alt="" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <div class="card-body">
                                                        <a href="#" title="">
                                                            <h3>{{$businessHub->name}}</h3>
                                                            <p>
                                                                <i class="la la-map-marker"></i>{{$businessHub->address}}, {{$businessHub->location}}
                                                            </p>
                                                        </a>
                                                        <ul>
                                                            <li>{{$businessHub->phone}}</li>
                                                            <li>{{$businessHub->email}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer">
                                                        
                                                        <!-- <a href="#" class="pull-right">
                                                            <button class="btn btn-primary" type="button">Connect</button>
                                                        </a> -->
                                                    </div>
                                                    <a href="#" title="" class="ext-link"></a>
                                                </div>
                                            </div>
                                            @empty
                                            <h3 class="text-center text-danger">Empty..!</h3>
                                            @endforelse

                                            
                                        </div>
                                    </div><!--list_products end-->
                                    
                                </div>
                            </div><!--tab-content end-->
                            <div class="pull-right">{{$businessHubs->onEachSide(1)->links()}}</div>
                        </div><!--listing-directs end-->
                    </div>
                </div>
            </div><!--listing-main-sec-details end-->
        </div>    
    </section><!--listing-main-sec end-->

</main>
@push('custom_script')
@endpush