        @push('custom_css')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/lightpick@latest/css/lightpick.css">
        <link href="{{asset('timepicker/css/mdtimepicker.css')}}" rel="stylesheet" type="text/css">
        <style type="text/css">
            section #can {

                display: block;

                position: absolute;

                top: 0;

                right: 0;

                bottom: 0;

                left: 0;

                opacity: 1;

                z-index: -1;

                min-width: 100%;

                max-width: 100%;

                min-height: 100%;

                max-height: 100%;
                opacity: 0.4;

            }

            .crumina-heading.heading--with-decoration .heading-title:after

            {

                color: #FFF;

            }

            .form--search-transparent input

            {

                color: #000;

            }

            .back-to-top:after{

                display: none;

            }

            .ui-datepicker-calendar td a{

                color: #FFF;

            }

            .ui-datepicker-current-day a{

                font-weight: bold;

                color: #ff8080;

            }
            .mdtp__wrapper
            {
                top:20px;
            }
            .mdtp__wrapper[data-theme='blue'] .mdtp__time_holder,.mdtp__wrapper[data-theme='blue'] .mdtp__digit.active span, .mdtp__wrapper[data-theme='blue'] .mdtp__clock .mdtp__digit:not(.digit--disabled) span:hover,.mdtp__wrapper[data-theme='blue'] .mdtp__digit.active:before,.mdtp__wrapper[data-theme='blue'] .mdtp__clock .mdtp__am.active, .mdtp__wrapper[data-theme='blue'] .mdtp__clock .mdtp__pm.active,.mdtp__clock .mdtp__am.active, .mdtp__clock .mdtp__pm.active,.mdtp__wrapper[data-theme='blue'] .mdtp__digit.active span
            {
                background-color: #000;
            }
            .mdtp__wrapper[data-theme='blue'] .mdtp__digit.active span, .mdtp__wrapper[data-theme='blue'] .mdtp__clock .mdtp__digit:not(.digit--disabled) span:hover {
                background-color: #000 !important;
            }
            .mdtp__wrapper[data-theme='blue'] .mdtp__button
            {
                color: #000;

            }
            .digital-clock
            {
                background: #000;
                width: 100px;
                text-align: center;
                margin: 0 auto;
            }
            .nav {
                position: relative;
                width: 100%;
                height: 40px;
                border-radius: 15px;
                background-color: var(--lightGreen);
                box-shadow: 2px 4px 6px rgba(0, 42, 50, 0.1);
            }
            .nav_copy {
                margin-top: 80px;
            }
            .nav__list {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                height: 100%;
                width: 100%;
                z-index: 1;
            }
            .nav__item {
                position: relative;
                flex: 1;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1;
            }
            .nav__link {
                display: flex;
                flex: 1;
                align-items: center;
                justify-content: center;
                height: 100%;
                color: var(--black);
                text-decoration: none;
                transition: color 0.3s ease-in-out;
            }
            .nav_copy .nav__link {
                transition: color 0.3s ease-in-out;
            }
            .nav__link_active {
                color: var(--white);
            }
            .nav__slider {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 3px;
                pointer-events: none;
                z-index: 0;
            }
            .nav_copy .nav__slider {
                left: 3px;
                right: 3px;
                padding: 0;
            }
            .nav__slider-rect {
                width: 50%;
                height: 100%;
                background-color: #1e2c36;
                border-radius: 12px;
                transition: transform 0.4s;
                box-shadow: 1px 1px 3px rgba(0, 42, 50, 0.15);
            }
            .nav_copy .nav__slider-rect {
                position: absolute;
                top: 3px;
                left: 0;
                right: 66.6%;
                bottom: 3px;
                height: auto;
                width: auto;
                transition: all 0.3s cubic-bezier(1, 0.48, 0.71, 0.96);
            }
        </style>
        @endpush
        <section class="form_sec">
            <h3 class="vis-hid">Invisible</h3>
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
                        </a>
                    </div>
                </form>
            </div>
        </section><!--form_sec end-->

        <section class="property-single-pg">
            <div class="container">
                <div class="property-hd-sec">
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                                <h3>{{$workspace_details->workSpace['title']}}</h3>
                                <p><i class="la la-map-marker"></i>{{$workspace_details->workSpace['address']}}</p>
                            </a>
                            <ul>
                                @foreach(json_decode($workspace_details->amenities) as $wSUamenities)
                                <li>{{$facilitiesGlobalList[$wSUamenities]->title}}</li>
                                @endforeach
                            </ul>
                        </div><!--card-body end-->
                        <div class="rate-info">
                            <button type="submit" class="btn btn-primary">{{config('global.workspace_unit_category')[$workspace_details->workspace_category]}}</button>
                            
                        </div><!--rate-info end-->
                    </div><!--card end-->
                </div><!---property-hd-sec end-->
                <div class="property-single-page-content">
                    <div class="row">
                        <div class="col-lg-8 pl-0 pr-0">
                            <div class="property-pg-left">
                                <div class="property-imgs">
                                    <div class="property-main-img">
                                        @foreach(json_decode($workspace_details->unit_image_gallery) as $wSUGallery1)
                                        <div class="property-img">
                                            <img src="{{ config('global.backend_url').'storage/'.$wSUGallery1}}" alt="">
                                        </div><!--property-img end-->
                                        @endforeach
                                    </div><!--property-main-img end-->
                                    <div class="property-thumb-imgs">
                                        <div class="row thumb-carous">
                                            @foreach(json_decode($workspace_details->unit_image_gallery) as $wSUGallery2)
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="{{ config('global.backend_url').'storage/'.$wSUGallery2}}" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div><!--property-thumb-imgs end-->
                                </div><!--property-imgs end-->
                                <div class="descp-text">
                                    <h3>Description</h3>
                                    <p>{{$workspace_details->workSpace['description']}}.</p>
                                </div><!--descp-text end-->
                                <div class="d-none details-info">
                                    <h3>Detail</h3>
                                    <ul>
                                        <li>
                                            <h4>Construction Tyoe:</h4>
                                            <span>Condo</span>
                                        </li>
                                        <li>
                                            <h4>Year Built:</h4>
                                            <span>2012</span>
                                        </li>
                                        <li>
                                            <h4>Units in Building: </h4>
                                            <span>87</span>
                                        </li>
                                        <li>
                                            <h4>Bathrooms:</h4>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <h4>Badrooms:</h4>
                                            <span>7</span>
                                        </li>
                                        <li>
                                            <h4>Flooring:</h4>
                                            <span>555 Sq Ft</span>
                                        </li>
                                        <li>
                                            <h4>Amenities:</h4>
                                            <span>Elevator</span>
                                        </li>
                                        <li>
                                            <h4>Cooling:</h4>
                                            <span>Central Cooling</span>
                                        </li>
                                        <li>
                                            <h4>Other Features:</h4>
                                            <span>Fireplace</span>
                                        </li>
                                    </ul>
                                </div><!--details-info end-->
                                <div class="d-none features-dv">
                                    <h3>Features</h3>
                                    <form class="form_field">
                                        <ul>
                                            @foreach(json_decode($workspace_details->amenities) as $wSUamenities1)
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c1" checked>
                                                <label for="c1">
                                                    <span></span>
                                                    <small>{{$facilitiesGlobalList[$wSUamenities1]->title}}</small>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </form>
                                </div><!--features-dv end-->
                                <div class="d-none floorplan">
                                    <h3>floorplan</h3>
                                    <img src="https://via.placeholder.com/427x268" alt="">
                                </div><!--floorplan end-->
                                <div class="map-dv">
                                    <h3>Location</h3>
                                    <div id="map-container" class="fullwidth-home-map">
                                        <div id="map" data-map-zoom="15"></div>
                                    </div>
                                </div><!--map-dv end-->
                                <div class="d-none nearby-locts">
                                    <h3>What's Nearby?</h3>
                                    <span>Powered by <img src="{{asset('images/ylog.png')}}" alt=""></span>
                                    <div class="widget-posts">
                                        <ul>
                                            <li>
                                                <div class="wd-posts">
                                                    <div class="ps-img">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </div><!--ps-img end-->
                                                    <div class="ps-info">
                                                        <h3><a href="#" title="">The Museum of Modern Art</a></h3>
                                                        <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                    </div><!--ps-info end-->
                                                </div><!--wd-posts end-->
                                                <ul class="star-rating">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                </ul><!--star-rating end-->
                                            </li>
                                            <li>
                                                <div class="wd-posts">
                                                    <div class="ps-img">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </div><!--ps-img end-->
                                                    <div class="ps-info">
                                                        <h3><a href="#" title="">Joe's Shanghai</a></h3>
                                                        <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                    </div><!--ps-info end-->
                                                </div><!--wd-posts end-->
                                                <ul class="star-rating">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                </ul><!--star-rating end-->
                                            </li>
                                            <li>
                                                <div class="wd-posts">
                                                    <div class="ps-img">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </div><!--ps-img end-->
                                                    <div class="ps-info">
                                                        <h3><a href="#" title="">Apple Fifth Avenue</a></h3>
                                                        <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                    </div><!--ps-info end-->
                                                </div><!--wd-posts end-->
                                                <ul class="star-rating">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                </ul><!--star-rating end-->
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--nearby-locts end-->
                                <div class="d-none comments-dv">
                                    <h3>3 Reviews</h3>
                                    <div class="comment-section">
                                        <ul>
                                            <li>
                                                <div class="cm-info-sec">
                                                    <div class="cm-img">
                                                        <img src="https://via.placeholder.com/79x79" alt="">
                                                    </div><!--author-img end-->
                                                    <div class="cm-info">
                                                        <h3>Kritsofer Nolan</h3>
                                                        <h4>April 25, 2018</h4>
                                                    </div>
                                                    <ul class="rating-lst">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul><!--rating-lst end-->
                                                </div><!--cm-info-sec end-->
                                                <p>Nam placerat facilisis placerat. Morbi elit nibh, auctor sit amet sodales id, porttitor eu quam. Aenean dui libero, laoreet quis con sequat vitae, posuere ut sapien. Etiam pharetra nulla vel diam eleifend, eu placerat nunc molestie. </p>
                                                <a href="#" title="" class="cm-reply">Reply</a>
                                            </li>
                                            <li>
                                                <div class="cm-info-sec">
                                                    <div class="cm-img">
                                                        <img src="https://via.placeholder.com/79x79" alt="">
                                                    </div><!--author-img end-->
                                                    <div class="cm-info">
                                                        <h3>Kritsofer Nolan</h3>
                                                        <h4>April 25, 2018</h4>
                                                    </div>
                                                    <ul class="rating-lst">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul><!--rating-lst end-->
                                                </div><!--cm-info-sec end-->
                                                <p>Nam placerat facilisis placerat. Morbi elit nibh, auctor sit amet sodales id, porttitor eu quam. Aenean dui libero, laoreet quis con sequat vitae, posuere ut sapien. Etiam pharetra nulla vel diam eleifend, eu placerat nunc molestie. </p>
                                                <a href="#" title="" class="cm-reply">Reply</a>
                                            </li>
                                            <li>
                                                <div class="cm-info-sec">
                                                    <div class="cm-img">
                                                        <img src="https://via.placeholder.com/79x79" alt="">
                                                    </div><!--author-img end-->
                                                    <div class="cm-info">
                                                        <h3>Kritsofer Nolan</h3>
                                                        <h4>April 25, 2018</h4>
                                                    </div>
                                                    <ul class="rating-lst">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul><!--rating-lst end-->
                                                </div><!--cm-info-sec end-->
                                                <p>Nam placerat facilisis placerat. Morbi elit nibh, auctor sit amet sodales id, porttitor eu quam. Aenean dui libero, laoreet quis con sequat vitae, posuere ut sapien. Etiam pharetra nulla vel diam eleifend, eu placerat nunc molestie. </p>
                                                <a href="#" title="" class="cm-reply">Reply</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review-hd">
                                        <div class="rev-hd">
                                            <h3>Write a Review</h3>
                                            <ul class="rating-lst">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul><!--rating-lst end-->
                                        </div><!--rev-hd end-->
                                        <div class="post-comment-sec">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 pl-0">
                                                        <div class="form-field">
                                                            <input type="text" name="name" placeholder="Your Name">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-field">
                                                            <input type="text" name="email" placeholder="Your Email">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 pr-0">
                                                        <div class="form-field">
                                                            <input type="text" name="phone" placeholder="Your Phone">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12 pl-0 pr-0">
                                                        <div class="form-field">
                                                            <textarea name="message" placeholder="Your Message"></textarea>
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12 pl-0 pr-0">
                                                        <button type="submit" class="btn-default">Post Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!--post-comment-sec end-->
                                    </div><!--review-hd end-->
                                </div><!--comments-dv end-->
                                <div class="d-none similar-listings-posts">
                                    <h3>Similar Listings</h3>
                                    <div class="list-products">
                                        <div class="card">
                                            <a href="24_Property_Single.html" title="">
                                                <div class="img-block">
                                                    <div class="overlay"></div>
                                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                                    <div class="rate-info">
                                                        <h5>$550.000</h5>
                                                        <span>For Rent</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card_bod_full">
                                                <div class="card-body">
                                                    <a href="24_Property_Single.html" title="">
                                                        <h3>Traditional Apartments</h3>
                                                        <p><i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                                    </a>
                                                    <ul>
                                                        <li>3 Bathrooms</li>
                                                        <li>2 Beds</li>
                                                        <li>Area 555 Sq Ft</li>
                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="crd-links">
                                                        <a href="#" class="pull-left">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        <a href="#" class="plf">
                                                            <i class="la la-calendar-check-o"></i> 25 Days Ago
                                                        </a>
                                                    </div><!--crd-links end-->
                                                    <a href="24_Property_Single.html" title="" class="btn-default">View Details</a>
                                                </div>
                                            </div><!--card_bod_full end-->
                                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                                        </div><!--card end-->
                                        <div class="card">
                                            <a href="24_Property_Single.html" title="">
                                                <div class="img-block">
                                                    <div class="overlay"></div>
                                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                                    <div class="rate-info">
                                                        <h5>$550.000</h5>
                                                        <span>For Rent</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card_bod_full">
                                                <div class="card-body">
                                                    <a href="24_Property_Single.html" title="">
                                                        <h3>Traditional Apartments</h3>
                                                        <p><i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                                    </a>
                                                    <ul>
                                                        <li>3 Bathrooms</li>
                                                        <li>2 Beds</li>
                                                        <li>Area 555 Sq Ft</li>
                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="crd-links">
                                                        <a href="#" class="pull-left">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        <a href="#" class="plf">
                                                            <i class="la la-calendar-check-o"></i> 25 Days Ago
                                                        </a>
                                                    </div><!--crd-links end-->
                                                    <a href="24_Property_Single.html" title="" class="btn-default">View Details</a>
                                                </div>
                                            </div><!--card_bod_full end-->
                                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                                        </div><!--card end-->
                                        <div class="card">
                                            <a href="24_Property_Single.html" title="">
                                                <div class="img-block">
                                                    <div class="overlay"></div>
                                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                                    <div class="rate-info">
                                                        <h5>$550.000</h5>
                                                        <span>For Rent</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card_bod_full">
                                                <div class="card-body">
                                                    <a href="24_Property_Single.html" title="">
                                                        <h3>Traditional Apartments</h3>
                                                        <p><i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                                    </a>
                                                    <ul>
                                                        <li>3 Bathrooms</li>
                                                        <li>2 Beds</li>
                                                        <li>Area 555 Sq Ft</li>
                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="crd-links">
                                                        <a href="#" class="pull-left">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        <a href="#" class="plf">
                                                            <i class="la la-calendar-check-o"></i> 25 Days Ago
                                                        </a>
                                                    </div><!--crd-links end-->
                                                    <a href="24_Property_Single.html" title="" class="btn-default">View Details</a>
                                                </div>
                                            </div><!--card_bod_full end-->
                                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                                        </div><!--card end-->
                                        <div class="card">
                                            <a href="24_Property_Single.html" title="">
                                                <div class="img-block">
                                                    <div class="overlay"></div>
                                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                                    <div class="rate-info">
                                                        <h5>$550.000</h5>
                                                        <span>For Rent</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card_bod_full">
                                                <div class="card-body">
                                                    <a href="24_Property_Single.html" title="">
                                                        <h3>Traditional Apartments</h3>
                                                        <p><i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                                    </a>
                                                    <ul>
                                                        <li>3 Bathrooms</li>
                                                        <li>2 Beds</li>
                                                        <li>Area 555 Sq Ft</li>
                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="crd-links">
                                                        <a href="#" class="pull-left">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        <a href="#" class="plf">
                                                            <i class="la la-calendar-check-o"></i> 25 Days Ago
                                                        </a>
                                                    </div><!--crd-links end-->
                                                    <a href="24_Property_Single.html" title="" class="btn-default">View Details</a>
                                                </div>
                                            </div><!--card_bod_full end-->
                                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                                        </div><!--card end-->
                                    </div><!-- list-products end-->
                                </div><!--similar-listings-posts end-->
                            </div><!--property-pg-left end-->
                        </div>
                        <div class="col-lg-4 pr-0">
                            <div class="sidebar layout2">
                                <div class="widget widget-form">
                                    <nav class="nav js-nav">
                                        <ul class="nav__list">
                                            <li class="nav__item">
                                                <a href="#" class="nav__link nav__link_active" data-transform="0">Dialy</a>
                                            </li>
                                            <li class="nav__item">
                                                <a href="#" class="nav__link" data-transform="100">Hour</a>
                                            </li>
                                        </ul>
                                        <div class="nav__slider">
                                            <div class="nav__slider-rect"></div>
                                        </div>
                                    </nav>

                                    <h3 class="widget-title my-2">Book Your Availability <span id="result-13"></span></h3>
                                    <button type="submit" class=" mb-2 btn btn-primary" id="timepicker">Start Time {{$selected_time}}</button>

                                    <div class="col-md-12 px-0">
                                        <input type="text" wire:model="selected_date" id="demo-13" class="form-control form-control-sm" style="display: none;"  />
                                    </div>
                                    <div class="col-md-12" id="gist-13"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0">
                                        
                                    </div>
                                </div>
                                
                                <div class="widget widget-form">
                                    <h3 class="widget-title">Contact Listing Agent</h3>
                                    <div class="contct-info">
                                        <img src="https://via.placeholder.com/81x74" alt="">
                                        <div class="contct-nf">
                                            <h3>Tomas Wilkinson</h3>
                                            <h4>Douglas and Eleman Agency</h4>
                                            <span><i class="la la-phone"></i>+1 212-925-3797</span>
                                        </div>
                                    </div><!--contct-info end-->
                                    <div class="post-comment-sec">
                                        <form>
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your Name">
                                            </div><!--form-field end-->
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your Email">
                                            </div><!--form-field end-->
                                            <div class="form-field">
                                                <input type="text" name="phone" placeholder="Your Phone">
                                            </div><!--form-field end-->
                                            <div class="form-field">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                            </div><!--form-field end-->
                                            <button type="submit" class="btn2">Contact</button>
                                        </form>
                                    </div><!--post-comment-sec end-->
                                </div><!--widget-form end-->
                                <div class="widget widget-catgs">
                                    <h3 class="widget-title">Features</h3>
                                    <form class="form_field">
                                        <ul>
                                            @foreach(json_decode($workspace_details->amenities) as $wSUamenities1)
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c1" checked>
                                                <label for="c1">
                                                    <span></span>
                                                    <small>{{$facilitiesGlobalList[$wSUamenities1]->title}}</small>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </form>
                                </div><!--widget-catgs end-->
                                <div class="widget widget-posts">
                                    <h3 class="widget-title">Popular Listings</h3>
                                    <ul>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Traditional Apartments</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Traditional Apartments</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Traditional Apartments</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                    </ul>
                                </div><!--widget-posts end-->
                                <div class="d-none widget widget-calculator">
                                    <h3 class="widget-title">Mortgage Calculator</h3>
                                    <form>
                                        <ul>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Total Amount">
                                            </li>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Down Payment">
                                            </li>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Interest Rate">
                                            </li>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Monthly Repayments">
                                            </li>
                                            <li>
                                                <button type="submit" class="btn2">Calculate</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div><!--widget-calculator end-->
                            </div><!--sidebar end-->
                        </div>
                    </div>
                </div><!--property-single-page-content end-->
            </div>
        </section><!--property-single-pg end-->

        @push('custom_script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="https://unpkg.com/lightpick@latest/lightpick.js"></script>
        <script type="text/javascript">
            var rangeText = function (start, end) {
                var str = '';
                str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
                str += end ? end.format('Do MMMM YYYY') : '...';

                return str;
            },
            css = function(url){
                var head  = document.getElementsByTagName('head')[0];
                var link  = document.createElement('link');
                link.rel  = 'stylesheet';
                link.type = 'text/css';
                link.href = url;
                head.appendChild(link);
            },
            script = function (url) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var head  = document.getElementsByTagName('head')[0];
                head.appendChild(s);
            }
            callbackJson = function(json){
                var id = json.files[0].replace(/\D/g,'');
                document.getElementById('gist-' + id).innerHTML = json.div;

                if (!document.querySelector('link[href="' + json.stylesheet  + '"]')) {
                    css(json.stylesheet);
                }
            };


            


            // demo-13
            var dateToday = new Date();
            new Lightpick({
                field: document.getElementById('demo-13'),
                inline: true,
                minDate: dateToday,
                onSelect: function(date){
                    Livewire.emit("selectDate", date.format('Do MMMM YYYY'))
                    document.getElementById('result-13').innerHTML = date.format('Do MMMM YYYY');
                }
            });
        </script>
        <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="{{asset('timepicker/js/mdtimepicker.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('#timepicker').mdtimepicker(); //Initializes the time picker
                $('.mdtimepicker .ok').click(function(){
                    Livewire.emit("selectTime", $('#timepicker').val())
                });
            });
        </script>
        <script type="text/javascript">
            const nav = () => {
                const nav = document.querySelector(".js-nav");
                const navLinks = nav.querySelectorAll(".nav__link");
                const slideRect = nav.querySelector(".nav__slider-rect");

                nav.addEventListener("click", (evt) => {
                    if (!evt.target.classList.contains("nav__link")) {
                        return;
                    }
                    evt.preventDefault();

                    navLinks.forEach((item) => {
                        item.classList.remove("nav__link_active");
                    });

                    if (!evt.target.classList.contains("nav__link_active")) {
                        evt.target.classList.add("nav__link_active");
                    }

                    slideRect.style.transform = `translateX(${evt.target.dataset.transform}%)`;
                });
            };
            nav();
        </script>
        <!-- Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsmlLeF_TLLl01ijNU0OMJi9DcPILmFts"></script>
        <script src="{{asset('js/map-cluster/infobox.min.js')}}"></script>
        <script src="{{asset('js/map-cluster/markerclusterer.js')}}"></script>
        <script type="text/javascript">
            !function (e) {
                "use strict"; function t() { var t = new InfoBox; var o, l, i, s, n = [
                        [(o = "", l = "{{ config('global.backend_url').'storage/'.$workspace_details->unit_image}}", i = "{{$workspace_details->workSpace['title']}}", s = "{{json_encode($workspace_details->workSpace['address'])}}", '<a href="' + o + '" class="listing-img-container"><div class="infoBox-close"><i class="fa fa-times"></i></div><img src="' + l + '" alt=""><div class="listing-item-content"><h3>' + i + "</h3><span>" + s + "</span></div></a>"),
                            {{$workspace_details->workSpace['latitude']}},
                            {{$workspace_details->workSpace['longitude']}},
                            1, '<i class="la la-home"></i>'
                        ]
                    ], r = e("#map").attr("data-map-zoom"), m = e("#map").attr("data-map-scroll"); if (void 0 !== r && !1 !== r) var c = parseInt(r); else c = 10; if (void 0 !== m && !1 !== m) var p = parseInt(m); else p = !1; var d = new google.maps.Map(document.getElementById("map"),
                    { zoom: c, scrollwheel: p, center: new google.maps.LatLng({{$workspace_details->workSpace['latitude']}},
                        {{$workspace_details->workSpace['longitude']}}), mapTypeId: google.maps.MapTypeId.ROADMAP, zoomControl: !1, mapTypeControl: !1, scaleControl: !1, panControl: !1, navigationControl: !1, streetViewControl: !1, gestureHandling: "cooperative", styles: [
                            { featureType: "water", elementType: "geometry", stylers: [
                                    { color: "#e9e9e9"
                                    },
                                    { lightness: 17
                                    }
                                ]
                            },
                            { featureType: "landscape", elementType: "geometry", stylers: [
                                    { color: "#f5f5f5"
                                    },
                                    { lightness: 20
                                    }
                                ]
                            },
                            { featureType: "road.highway", elementType: "geometry.fill", stylers: [
                                    { color: "#ffffff"
                                    },
                                    { lightness: 17
                                    }
                                ]
                            },
                            { featureType: "road.highway", elementType: "geometry.stroke", stylers: [
                                    { color: "#ffffff"
                                    },
                                    { lightness: 29
                                    },
                                    { weight: .2
                                    }
                                ]
                            },
                            { featureType: "road.arterial", elementType: "geometry", stylers: [
                                    { color: "#ffffff"
                                    },
                                    { lightness: 18
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "geometry", stylers: [
                                    { color: "#ffffff"
                                    },
                                    { lightness: 16
                                    }
                                ]
                            },
                            { featureType: "poi", elementType: "geometry", stylers: [
                                    { color: "#f5f5f5"
                                    },
                                    { lightness: 21
                                    }
                                ]
                            },
                            { featureType: "poi.park", elementType: "geometry", stylers: [
                                    { color: "#dedede"
                                    },
                                    { lightness: 21
                                    }
                                ]
                            },
                            { elementType: "labels.text.stroke", stylers: [
                                    { visibility: "on"
                                    },
                                    { color: "#ffffff"
                                    },
                                    { lightness: 16
                                    }
                                ]
                            },
                            { elementType: "labels.text.fill", stylers: [
                                    { saturation: 36
                                    },
                                    { color: "#333333"
                                    },
                                    { lightness: 40
                                    }
                                ]
                            },
                            { elementType: "labels.icon", stylers: [
                                    { visibility: "off"
                                    }
                                ]
                            },
                            { featureType: "transit", elementType: "geometry", stylers: [
                                    { color: "#f2f2f2"
                                    },
                                    { lightness: 19
                                    }
                                ]
                            },
                            { featureType: "administrative", elementType: "geometry.fill", stylers: [
                                    { color: "#fefefe"
                                    },
                                    { lightness: 20
                                    }
                                ]
                            },
                            { featureType: "administrative", elementType: "geometry.stroke", stylers: [
                                    { color: "#fefefe"
                                    },
                                    { lightness: 17
                                    },
                                    { weight: 1.2
                                    }
                                ]
                            }
                        ]
                    }); e(".listing-item-container").on("mouseover", function () { if (void 0 !== e(this).data("marker-id")) { var t = e(this).data("marker-id") - 1, o = v[t
                            ].div; e(o).addClass("clicked"), e(this).on("mouseout", function () { e(o).is(":not(.infoBox-opened)") && e(o).removeClass("clicked")
                            })
                        }
                    }); var g = document.createElement("div"); g.className = "map-box"; var f, y, u = { content: g, disableAutoPan: !1, alignBottom: !0, maxWidth: 0, pixelOffset: new google.maps.Size(-134,
                        -55), zIndex: null, boxStyle: { width: "270px"
                        }, closeBoxMargin: "0", closeBoxURL: "", infoBoxClearance: new google.maps.Size(25,
                        25), isHidden: !1, pane: "floatPane", enableEventPropagation: !1
                    }, v = []; for (f = 0; f < n.length; f++) { y = n[f
                        ][
                            4
                        ]; var h = new a(new google.maps.LatLng(n[f
                        ][
                            1
                        ], n[f
                        ][
                            2
                        ]), d,
                        { marker_id: f
                        }, y); v.push(h), google.maps.event.addDomListener(h,
                        "click", function (o, l) { return function () { t.setOptions(u), g.innerHTML = n[l
                                ][
                                    0
                                ], t.open(d, o), n[l
                                ][
                                    3
                                ], google.maps.event.addListener(t,
                                "domready", function () { e(".infoBox-close").click(function (o) { o.preventDefault(), t.close(), e(".map-marker-container").removeClass("clicked infoBox-opened")
                                    })
                                })
                            }
                        }(h, f))
                    } new MarkerClusterer(d, v,
                    { imagePath: "assets/images/", styles: [
                            { textColor: "white", url: "", height: 50, width: 50
                            }
                        ], minClusterSize: 2
                    }), google.maps.event.addDomListener(window,
                    "resize", function () { var e = d.getCenter(); google.maps.event.trigger(d,
                        "resize"), d.setCenter(e)
                    }); var T = document.createElement("div"); new function (e, t) { T.index = 1, t.controls[google.maps.ControlPosition.RIGHT_CENTER
                        ].push(T), e.style.padding = "5px", e.className = "zoomControlWrapper"; var o = document.createElement("div"); e.appendChild(o); var l = document.createElement("div"); l.className = "custom-zoom-in", o.appendChild(l); var i = document.createElement("div"); i.className = "custom-zoom-out", o.appendChild(i), google.maps.event.addDomListener(l,
                        "click", function () { t.setZoom(t.getZoom() + 1)
                        }), google.maps.event.addDomListener(i,
                        "click", function () { t.setZoom(t.getZoom() - 1)
                        })
                    }(T, d); var w = e("#scrollEnabling"); e(w).click(function (t) { t.preventDefault(), e(this).toggleClass("enabled"), e(this).is(".enabled") ? d.setOptions({ scrollwheel: !0
                        }) : d.setOptions({ scrollwheel: !1
                        })
                    }), e("#geoLocation, .input-with-icon.location a").click(function (e) { e.preventDefault(), navigator.geolocation && navigator.geolocation.getCurrentPosition(function (e) { var t = new google.maps.LatLng(e.coords.latitude, e.coords.longitude); d.setCenter(t), d.setZoom(12)
                        })
                    })
                } var o = document.getElementById("map"); function l() { var t = new google.maps.LatLng({ lng: e("#singleListingMap").data("longitude"), lat: e("#singleListingMap").data("latitude")
                    }), o = new google.maps.Map(document.getElementById("singleListingMap"),
                    { zoom: 15, center: t, scrollwheel: !1, zoomControl: !1, mapTypeControl: !1, scaleControl: !1, panControl: !1, navigationControl: !1, streetViewControl: !1, styles: [
                            { featureType: "poi", elementType: "labels.text.fill", stylers: [
                                    { color: "#747474"
                                    },
                                    { lightness: "23"
                                    }
                                ]
                            },
                            { featureType: "poi.attraction", elementType: "geometry.fill", stylers: [
                                    { color: "#f38eb0"
                                    }
                                ]
                            },
                            { featureType: "poi.government", elementType: "geometry.fill", stylers: [
                                    { color: "#ced7db"
                                    }
                                ]
                            },
                            { featureType: "poi.medical", elementType: "geometry.fill", stylers: [
                                    { color: "#ffa5a8"
                                    }
                                ]
                            },
                            { featureType: "poi.park", elementType: "geometry.fill", stylers: [
                                    { color: "#c7e5c8"
                                    }
                                ]
                            },
                            { featureType: "poi.place_of_worship", elementType: "geometry.fill", stylers: [
                                    { color: "#d6cbc7"
                                    }
                                ]
                            },
                            { featureType: "poi.school", elementType: "geometry.fill", stylers: [
                                    { color: "#c4c9e8"
                                    }
                                ]
                            },
                            { featureType: "poi.sports_complex", elementType: "geometry.fill", stylers: [
                                    { color: "#b1eaf1"
                                    }
                                ]
                            },
                            { featureType: "road", elementType: "geometry", stylers: [
                                    { lightness: "100"
                                    }
                                ]
                            },
                            { featureType: "road", elementType: "labels", stylers: [
                                    { visibility: "off"
                                    },
                                    { lightness: "100"
                                    }
                                ]
                            },
                            { featureType: "road.highway", elementType: "geometry.fill", stylers: [
                                    { color: "#ffd4a5"
                                    }
                                ]
                            },
                            { featureType: "road.arterial", elementType: "geometry.fill", stylers: [
                                    { color: "#ffe9d2"
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "all", stylers: [
                                    { visibility: "simplified"
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "geometry.fill", stylers: [
                                    { weight: "3.00"
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "geometry.stroke", stylers: [
                                    { weight: "0.30"
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "labels.text", stylers: [
                                    { visibility: "on"
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "labels.text.fill", stylers: [
                                    { color: "#747474"
                                    },
                                    { lightness: "36"
                                    }
                                ]
                            },
                            { featureType: "road.local", elementType: "labels.text.stroke", stylers: [
                                    { color: "#e9e5dc"
                                    },
                                    { lightness: "30"
                                    }
                                ]
                            },
                            { featureType: "transit.line", elementType: "geometry", stylers: [
                                    { visibility: "on"
                                    },
                                    { lightness: "100"
                                    }
                                ]
                            },
                            { featureType: "water", elementType: "all", stylers: [
                                    { color: "#d2e7f7"
                                    }
                                ]
                            }
                        ]
                    }); e("#streetView").click(function (e) { e.preventDefault(), o.getStreetView().setOptions({ visible: !0, position: t
                        })
                    }); var l = document.createElement("div"); new function (e, t) { l.index = 1, t.controls[google.maps.ControlPosition.RIGHT_CENTER
                        ].push(l), e.style.padding = "5px"; var o = document.createElement("div"); e.appendChild(o); var i = document.createElement("div"); i.className = "custom-zoom-in", o.appendChild(i); var a = document.createElement("div"); a.className = "custom-zoom-out", o.appendChild(a), google.maps.event.addDomListener(i,
                        "click", function () { t.setZoom(t.getZoom() + 1)
                        }), google.maps.event.addDomListener(a,
                        "click", function () { t.setZoom(t.getZoom() - 1)
                        })
                    }(l, o); var i = "<i class='" + e("#singleListingMap").data("map-icon") + "'></i>"; new a(t, o,
                    { marker_id: "1"
                    }, i)
                } void 0 !== o && null != o && (google.maps.event.addDomListener(window,
                "load", t), google.maps.event.addDomListener(window,
                "resize", t)); var i = document.getElementById("singleListingMap"); function a(e, t, o, l) { this.latlng = e, this.args = o, this.markerIco = l, this.setMap(t)
                } void 0 !== i && null != i && (google.maps.event.addDomListener(window,
                "load", l), google.maps.event.addDomListener(window,
                "resize", l)), a.prototype = new google.maps.OverlayView, a.prototype.draw = function () { var t = this, o = this.div; o || ((o = this.div = document.createElement("div")).className = "map-marker-container", o.innerHTML = '<div class="marker-container"><div class="marker-card"><div class="front face">' + t.markerIco + '</div><div class="back face">' + t.markerIco + '</div><div class="marker-arrow"></div></div></div>', google.maps.event.addDomListener(o,
                    "click", function (o) { e(".map-marker-container").removeClass("clicked infoBox-opened"), google.maps.event.trigger(t,
                        "click"), e(this).addClass("clicked infoBox-opened")
                    }), void 0 !== t.args.marker_id && (o.dataset.marker_id = t.args.marker_id), this.getPanes().overlayImage.appendChild(o)); var l = this.getProjection().fromLatLngToDivPixel(this.latlng); l && (o.style.left = l.x + "px", o.style.top = l.y + "px")
                }, a.prototype.remove = function () { this.div && (this.div.parentNode.removeChild(this.div), this.div = null, e(this).removeClass("clicked"))
                }, a.prototype.getPosition = function () { return this.latlng
                }
            }(this.jQuery);
        </script>
        @endpush