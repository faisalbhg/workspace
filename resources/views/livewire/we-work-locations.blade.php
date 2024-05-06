@push('custom_css')
<style type="text/css">
    .locationDesc ul li{
        display: inherit !important;
        padding: 5px 17px !important;
        line-height: inherit !important;
        border: none !important;
        font-size: inherit !important;
    }
    .card .card-body ul li:first-child{
        padding-left: 17px;
    }
</style>
@endpush
<section class="pager-sec bfr mb-4" style="background-image: url('{{ asset('images/banner/location-head1.jpg') }}');">
    <div class="container">
        <div class="pager-sec-details">
            <h3>We Work Locations</h3>
            <ul>
                <li><a href="{{ url('/') }}" title="">We Work</a></li>
                <li><span>Locations</span></li>
            </ul>
        </div><!--pager-sec-details end-->
    </div>
</section>

<section class="about-sec pt">
    <div class="container">
        <div class="about-us-sec">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-info intro-content">
                        <h3>GULF TOWERS</h3>
                        <h4 class="mb-4 pb-2"><i class="la la-map-marker"></i>We Work Business Centre LLC, Gulf Towers, Oud Metha, Burdubai, Dubai, United Arab Emirates</h4>
                        <p class="pt-0 pb-0">Private offices      from AED 30,000 / Year</p>
                        <p class="pt-0 pb-0">Coworking space from AED 100 / Month</p>
                        <p class="pt-0 pb-0">Meeting rooms       from AED 100 / Hour</p>
                        <p class="pt-0 pb-0">Event venues        from AED 500 / Hour</p>
                        
                    </div><!--about-info end-->
                    <div class="widget widget-tags pt-4 mt-4">
                        <ul>
                            <li><a href="{{ url('coworkspace') }}" title="" class="p-3">Co Working Space</a></li>
                            <li><a href="{{ url('meeting-rooms') }}" title="" class="p-3">Meeting Room</a></li>
                            <li><a href="{{ url('private-offices') }}" title="" class="p-3">Private Offices</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/gulf-tower.jpg') }}" alt="">
                    </div><!--about-img end-->
                </div>
            </div>
        </div><!-- about-us-sec end-->
    </div>
</section>

<section class="about-sec pt">
    <div class="container">
        <div class="about-us-sec">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/crystal-plaza.jpg') }}" alt="">
                    </div><!--about-img end-->
                </div>

                <div class="col-lg-6">
                    <div class="about-info">
                        <h3>CRYSTAL PLAZA</h3>
                        <h4 class="mb-4 pb-2"><i class="la la-map-marker"></i>We Work Business Centre LLC, Crystal Plaza, Sharjah, United Arab Emirates</h4>
                        <p class="pt-0 pb-0">Private offices        from AED 16,000 / Year</p>
                        <p class="pt-0 pb-0">Meeting rooms      from AED 100 / Hour</p>
                        
                    </div><!--about-info end-->
                    <div class="widget widget-tags pt-4 mt-4">
                        
                        <ul>
                            <li><a href="{{ url('meeting-rooms') }}" title="" class="p-3">Meeting Room</a></li>
                            <li><a href="{{ url('private-offices') }}" title="" class="p-3">Private Offices</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div><!-- about-us-sec end-->
    </div>
</section>




