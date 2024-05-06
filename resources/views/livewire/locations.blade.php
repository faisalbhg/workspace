@push('custom_css')
<style type="text/css">
    .newMargHalfMap{
        margin-top: 30px !important;
    }
</style>
@endpush

<section class="half-map-sec newMargHalfMap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12" wire:ignore >
                        <div id="map-container" class="fullwidth-home-map">
                            <div id="map" data-map-zoom="12"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="widget-property-search">
                            <form action="#" class="row banner-search">
                                <div class="form_field full">
                                    <input type="text" class="form-control" wire:model="search_ws" placeholder="Enter Address, City or State">
                                </div>
                                
                                <div class="form_field">
                                    <div class="form-group">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Type</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropeddown">
                                                @foreach(config('global.workspace_unit_category') as $workspace_unit_category)
                                                <li>{{$workspace_unit_category}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_field">
                                    <div class="form-group">
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>Faiclities</span>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropeddown">
                                                @foreach($facilitiesGlobalList as $facilityVal)
                                                <li>{{$facilityVal->title}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="feat-srch">
                                    <div class="more-feat">
                                        <h3> <i class="la la-cog"></i> Show More Features</h3>
                                    </div><!--more-feat end-->
                                    <div class="form_field">
                                        <a href="#" class="btn btn-outline-primary ">
                                            <span>Search</span>
                                        </a>
                                    </div>
                                </div><!--more-feat end-->
                                <div class="features_list">
                                    <ul>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b1">
                                            <label for="b1">
                                                <span></span>
                                                <small>Parking</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b2">
                                            <label for="b2">
                                                <span></span>
                                                <small>Gym</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b3">
                                            <label for="b3">
                                                <span></span>
                                                <small>Washing Machine</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b4">
                                            <label for="b4">
                                                <span></span>
                                                <small>Elevator</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b5">
                                            <label for="b5">
                                                <span></span>
                                                <small>Storage</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b6">
                                            <label for="b6">
                                                <span></span>
                                                <small>Air Conditioner</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b7">
                                            <label for="b7">
                                                <span></span>
                                                <small>Wireless Internet</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b8">
                                            <label for="b8">
                                                <span></span>
                                                <small>Heating</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b9">
                                            <label for="b9">
                                                <span></span>
                                                <small>Swimming Pool</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="bb" id="b10">
                                            <label for="b10">
                                                <span></span>
                                                <small>Home Theater</small>
                                            </label>
                                        </li>
                                    </ul>
                                </div><!--features end-->
                            </form>
                        </div><!--widget widget-property-searche end-->
                        <div class="listing-directs">
                            <div class="list-head">
                                <div class="sortby">
                                    <span>Sort by:</span>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Relevant</span>
                                            <i class="la la-caret-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropeddown">
                                            <li>For Sale</li>
                                            <li>For Rent</li>
                                        </ul>
                                    </div>
                                </div><!--sortby end-->
                                <div class="view-change">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="grid-tab1" data-toggle="tab" href="#grid-view-tab1" role="tab" aria-controls="grid-view-tab1" aria-selected="true"><i class="la la-th-large"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="grid-tab2" data-toggle="tab" href="#grid-view-tab2" role="tab" aria-controls="grid-view-tab2" aria-selected="true"><i class="la la-th-list"></i></a>
                                        </li>
                                    </ul>
                                </div><!--view-change end-->
                            </div><!--list-head end-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="grid-view-tab1" role="tabpanel" aria-labelledby="grid-view-tab1">
                                    <div class="list_products">
                                        <div class="row">
                                            @foreach($workspaces as $workspaceg)
                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <a href="{{ url( 'workspace/'.$workspaceg->id)}}" title="">
                                                        <div class="img-block">
                                                            <div class="overlay"></div>
                                                            <img src="{{ config('global.backend_url').'storage/'.$workspaceg->unit_image}}" alt="" class="img-fluid">
                                                            <div class="rate-info">
                                                                <!-- <h5>$550.000</h5> -->
                                                                <span>{{config('global.workspace_unit_category')[$workspaceg->workspace_category]}}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card-body">
                                                        <a href="24_Property_Single.html" title="">
                                                            <h3>{{$workspaceg->title}}</h3>
                                                            <p>
                                                                <i class="la la-map-marker"></i>{{$workspaceg->locationSpace['address']}}
                                                            </p>
                                                        </a>
                                                        <ul>
                                                            @foreach(json_decode($workspaceg->amenities) as $wSUamenities)
                                                            @if(isset($facilitiesGlobalList[$wSUamenities]))
                                                            <li>{{$facilitiesGlobalList[$wSUamenities]->title}}</li>
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer">
                                                        <a href="#" class="pull-left">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        <a href="{{ url( 'workspace/'.$workspaceg->id)}}" class="btn btn-primary pull-right"> Book </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div><!--list_products end-->
                                    
                                </div>
                                <div class="tab-pane fade" id="grid-view-tab2" role="tabpanel" aria-labelledby="grid-view-tab2">
                                    <div class="list-products">
                                        @foreach($workspaces as $workspacel)
                                        <div class="card">
                                            <a href="24_Property_Single.html" title="">
                                                <div class="img-block">
                                                    <div class="overlay"></div>
                                                    <img src="{{ config('global.backend_url').'storage/'.$workspacel->unit_image}}" alt="" class="img-fluid">
                                                    <div class="rate-info">
                                                        <!-- <h5>$550.000</h5> -->
                                                        <span>{{config('global.workspace_unit_category')[$workspacel->workspace_category]}}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card_bod_full">
                                                <div class="card-body">
                                                    <a href="24_Property_Single.html" title="">
                                                        <h3>{{$workspacel->title}}</h3>
                                                        <p> <i class="la la-map-marker"></i>{{$workspacel->locationSpace['address']}}</p>
                                                    </a>
                                                    <ul>
                                                        @foreach(json_decode($workspacel->amenities) as $wSUamenities)
                                                        @if(isset($facilitiesGlobalList[$wSUamenities]))
                                                        <li>{{$facilitiesGlobalList[$wSUamenities]->title}}</li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="crd-links">
                                                        <a href="#" class="pull-left">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        
                                                    </div><!--crd-links end-->
                                                    <a href="{{ url( 'workspace/'.$workspacel->id)}}" title="" class="btn btn-primary pull-right">Book </a>
                                                </div>
                                            </div><!--card_bod_full end-->
                                        </div><!--card end-->
                                        @endforeach
                                        
                                    </div><!-- list-products end-->
                                </div>
                            </div><!--tab-content end-->
                            <div class="float-end">{{$workspaces->onEachSide(1)->links()}}</div>
                            <!--pagination end-->
                        </div><!--listing-directs end-->
                    </div>
                </div>
            </div>
        </section><!--half-map-sec end-->

@push('custom_script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#wraperBodySpace').addClass('half_map');
    });
</script>

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsmlLeF_TLLl01ijNU0OMJi9DcPILmFts"></script>
<script src="{{asset('js/map-cluster/infobox.min.js')}}"></script>
<script src="{{asset('js/map-cluster/markerclusterer.js')}}"></script>
<script type="text/javascript">
    window.addEventListener('listenMap',event=>{
        console.log(event.detail.locations);
    });
    
    !function(e) {
    "use strict";
    function t() {
        var t=new InfoBox;
        function o(e, t, o, l, i, s) {
            return'<a href="'+e+'" class="listing-img-container"><div class="infoBox-close"><i class="fa fa-times"></i></div><img src="'+t+'" alt=""><div class="rate-info"> <h5></h5> <span>Book</span> </div><div class="listing-item-content"><h3>'+o+"</h3><span><i class='la la-map-marker'></i>"+l+"</span></div></a>"
        }
        var l=[
            @foreach($locations as $location)
                [o(
                    "{{ url( 'location/'.$location->id)}}",
                    "{{ config('global.backend_url').'storage/'.$location->front_image}}",
                    "{{$location->title}}",
                    "{{json_encode($location->address)}}"
                    ),
                {{$location->latitude}},
                {{$location->longitude}},
                1,
                '<i class="la la-home"></i>'],
            @endforeach
            ],
        i=e("#map").attr("data-map-zoom"),
        a=e("#map").attr("data-map-scroll");
        if(void 0!==i&&!1!==i)var n=parseInt(i);
        else n=10;
        if(void 0!==a&&!1!==a)var r=parseInt(a);
        else r=!1;
        var m=new google.maps.Map(document.getElementById("map"), {
            zoom:n, scrollwheel:r, center:new google.maps.LatLng(25.236133722321814, 55.31850808465924), mapTypeId:google.maps.MapTypeId.ROADMAP, zoomControl:!1, mapTypeControl:!1, scaleControl:!1, panControl:!1, navigationControl:!1, streetViewControl:!1, gestureHandling:"cooperative", styles:[ {
                featureType:"water", elementType:"geometry", stylers:[ {
                    color: "#e9e9e9"
                }
                , {
                    lightness: 17
                }
                ]
            }
            , {
                featureType:"landscape", elementType:"geometry", stylers:[ {
                    color: "#f5f5f5"
                }
                , {
                    lightness: 20
                }
                ]
            }
            , {
                featureType:"road.highway", elementType:"geometry.fill", stylers:[ {
                    color: "#ffffff"
                }
                , {
                    lightness: 17
                }
                ]
            }
            , {
                featureType:"road.highway", elementType:"geometry.stroke", stylers:[ {
                    color: "#ffffff"
                }
                , {
                    lightness: 29
                }
                , {
                    weight: .2
                }
                ]
            }
            , {
                featureType:"road.arterial", elementType:"geometry", stylers:[ {
                    color: "#ffffff"
                }
                , {
                    lightness: 18
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"geometry", stylers:[ {
                    color: "#ffffff"
                }
                , {
                    lightness: 16
                }
                ]
            }
            , {
                featureType:"poi", elementType:"geometry", stylers:[ {
                    color: "#f5f5f5"
                }
                , {
                    lightness: 21
                }
                ]
            }
            , {
                featureType:"poi.park", elementType:"geometry", stylers:[ {
                    color: "#dedede"
                }
                , {
                    lightness: 21
                }
                ]
            }
            , {
                elementType:"labels.text.stroke", stylers:[ {
                    visibility: "on"
                }
                , {
                    color: "#ffffff"
                }
                , {
                    lightness: 16
                }
                ]
            }
            , {
                elementType:"labels.text.fill", stylers:[ {
                    saturation: 36
                }
                , {
                    color: "#333333"
                }
                , {
                    lightness: 40
                }
                ]
            }
            , {
                elementType:"labels.icon", stylers:[ {
                    visibility: "off"
                }
                ]
            }
            , {
                featureType:"transit", elementType:"geometry", stylers:[ {
                    color: "#f2f2f2"
                }
                , {
                    lightness: 19
                }
                ]
            }
            , {
                featureType:"administrative", elementType:"geometry.fill", stylers:[ {
                    color: "#fefefe"
                }
                , {
                    lightness: 20
                }
                ]
            }
            , {
                featureType:"administrative", elementType:"geometry.stroke", stylers:[ {
                    color: "#fefefe"
                }
                , {
                    lightness: 17
                }
                , {
                    weight: 1.2
                }
                ]
            }
            ]
        }
        );
        e(".listing-item-container").on("mouseover", function() {
            if(void 0!==e(this).data("marker-id")) {
                var t=e(this).data("marker-id")-1, o=f[t].div;
                e(o).addClass("clicked"), e(this).on("mouseout", function() {
                    e(o).is(":not(.infoBox-opened)")&&e(o).removeClass("clicked")
                }
                )
            }
        }
        );
        var g=document.createElement("div");
        g.className="map-box";
        var p,
        c,
        d= {
            content:g,
            disableAutoPan:!1,
            alignBottom:!0,
            maxWidth:0,
            pixelOffset:new google.maps.Size(-148, -55),
            zIndex:null,
            boxStyle: {
                width: "295px"
            }
            ,
            closeBoxMargin:"0",
            closeBoxURL:"",
            infoBoxClearance:new google.maps.Size(25, 25),
            isHidden:!1,
            pane:"floatPane",
            enableEventPropagation:!1
        }
        ,
        f=[];
        for(p=0;
        p<l.length;
        p++) {
            c=l[p][4];
            var y=new s(new google.maps.LatLng(l[p][1], l[p][2]), m, {
                marker_id: p
            }
            , c);
            f.push(y),
            google.maps.event.addDomListener(y, "click", function(o, i) {
                return function() {
                    var open = false;
                    if(typeof l[i].open != 'undefined')
                        open = l[i].open;
                    
                    jQuery.each(l, function(){
                        this.open = false;
                    })
                    
                    t.close();
                    if(open){
                        l[i].open = false;
                        return false;
                    }
                    l[i].open = true;
                    
                    t.setOptions(d), g.innerHTML=l[i][0], t.open(m, o), l[i][3], google.maps.event.addListener(t, "domready", function() {
                        e(".infoBox-close").click(function(o) {
                            o.preventDefault(), t.close(), e(".map-marker-container").removeClass("clicked infoBox-opened")
                        }
                        )
                    }
                    )
                }
            }
            (y, p))
        }
        new MarkerClusterer(m, f, {
            imagePath:"images/", styles:[ {
                textColor: "white", url: "", height: 50, width: 50
            }
            ], minClusterSize:2
        }
        ),
        google.maps.event.addDomListener(window, "resize", function() {
            var e=m.getCenter();
            google.maps.event.trigger(m, "resize"), m.setCenter(e)
        }
        );
        var u=document.createElement("div");
        new function(e, t) {
            u.index=1,
            t.controls[google.maps.ControlPosition.RIGHT_CENTER].push(u),
            e.style.padding="5px",
            e.className="zoomControlWrapper";
            var o=document.createElement("div");
            e.appendChild(o);
            var l=document.createElement("div");
            l.className="custom-zoom-in",
            o.appendChild(l);
            var i=document.createElement("div");
            i.className="custom-zoom-out",
            o.appendChild(i),
            google.maps.event.addDomListener(l, "click", function() {
                t.setZoom(t.getZoom()+1)
            }
            ),
            google.maps.event.addDomListener(i, "click", function() {
                t.setZoom(t.getZoom()-1)
            }
            )
        }
        (u, m);
        var v=e("#scrollEnabling");
        e(v).click(function(t) {
            t.preventDefault(), e(this).toggleClass("enabled"), e(this).is(".enabled")?m.setOptions( {
                scrollwheel: !0
            }
            ):m.setOptions( {
                scrollwheel: !1
            }
            )
        }
        ),
        e("#geoLocation, .input-with-icon.location a").click(function(e) {
            e.preventDefault(), navigator.geolocation&&navigator.geolocation.getCurrentPosition(function(e) {
                var t=new google.maps.LatLng(e.coords.latitude, e.coords.longitude);
                m.setCenter(t), m.setZoom(12)
            }
            )
        }
        )
    }
    var o=document.getElementById("map");
    function l() {
        var t=new google.maps.LatLng( {
            lng: e("#singleListingMap").data("longitude"), lat: e("#singleListingMap").data("latitude")
        }
        ),
        o=new google.maps.Map(document.getElementById("singleListingMap"), {
            zoom:15, center:t, scrollwheel:!1, zoomControl:!1, mapTypeControl:!1, scaleControl:!1, panControl:!1, navigationControl:!1, streetViewControl:!1, styles:[ {
                featureType:"poi", elementType:"labels.text.fill", stylers:[ {
                    color: "#747474"
                }
                , {
                    lightness: "23"
                }
                ]
            }
            , {
                featureType:"poi.attraction", elementType:"geometry.fill", stylers:[ {
                    color: "#f38eb0"
                }
                ]
            }
            , {
                featureType:"poi.government", elementType:"geometry.fill", stylers:[ {
                    color: "#ced7db"
                }
                ]
            }
            , {
                featureType:"poi.medical", elementType:"geometry.fill", stylers:[ {
                    color: "#ffa5a8"
                }
                ]
            }
            , {
                featureType:"poi.park", elementType:"geometry.fill", stylers:[ {
                    color: "#c7e5c8"
                }
                ]
            }
            , {
                featureType:"poi.place_of_worship", elementType:"geometry.fill", stylers:[ {
                    color: "#d6cbc7"
                }
                ]
            }
            , {
                featureType:"poi.school", elementType:"geometry.fill", stylers:[ {
                    color: "#c4c9e8"
                }
                ]
            }
            , {
                featureType:"poi.sports_complex", elementType:"geometry.fill", stylers:[ {
                    color: "#b1eaf1"
                }
                ]
            }
            , {
                featureType:"road", elementType:"geometry", stylers:[ {
                    lightness: "100"
                }
                ]
            }
            , {
                featureType:"road", elementType:"labels", stylers:[ {
                    visibility: "off"
                }
                , {
                    lightness: "100"
                }
                ]
            }
            , {
                featureType:"road.highway", elementType:"geometry.fill", stylers:[ {
                    color: "#ffd4a5"
                }
                ]
            }
            , {
                featureType:"road.arterial", elementType:"geometry.fill", stylers:[ {
                    color: "#ffe9d2"
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"all", stylers:[ {
                    visibility: "simplified"
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"geometry.fill", stylers:[ {
                    weight: "3.00"
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"geometry.stroke", stylers:[ {
                    weight: "0.30"
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"labels.text", stylers:[ {
                    visibility: "on"
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"labels.text.fill", stylers:[ {
                    color: "#747474"
                }
                , {
                    lightness: "36"
                }
                ]
            }
            , {
                featureType:"road.local", elementType:"labels.text.stroke", stylers:[ {
                    color: "#e9e5dc"
                }
                , {
                    lightness: "30"
                }
                ]
            }
            , {
                featureType:"transit.line", elementType:"geometry", stylers:[ {
                    visibility: "on"
                }
                , {
                    lightness: "100"
                }
                ]
            }
            , {
                featureType:"water", elementType:"all", stylers:[ {
                    color: "#d2e7f7"
                }
                ]
            }
            ]
        }
        );
        e("#streetView").click(function(e) {
            e.preventDefault(), o.getStreetView().setOptions( {
                visible: !0, position: t
            }
            )
        }
        );
        var l=document.createElement("div");
        new function(e, t) {
            l.index=1,
            t.controls[google.maps.ControlPosition.RIGHT_CENTER].push(l),
            e.style.padding="5px";
            var o=document.createElement("div");
            e.appendChild(o);
            var i=document.createElement("div");
            i.className="custom-zoom-in",
            o.appendChild(i);
            var s=document.createElement("div");
            s.className="custom-zoom-out",
            o.appendChild(s),
            google.maps.event.addDomListener(i, "click", function() {
                t.setZoom(t.getZoom()+1)
            }
            ),
            google.maps.event.addDomListener(s, "click", function() {
                t.setZoom(t.getZoom()-1)
            }
            )
        }
        (l, o);
        var i="<i class='"+e("#singleListingMap").data("map-icon")+"'></i>";
        new s(t, o, {
            marker_id: "1"
        }
        , i)
    }
    void 0!==o&&null!=o&&(google.maps.event.addDomListener(window, "load", t), google.maps.event.addDomListener(window, "resize", t));
    var i=document.getElementById("singleListingMap");
    function s(e, t, o, l) {
        this.latlng=e,
        this.args=o,
        this.markerIco=l,
        this.setMap(t)
    }
    void 0!==i&&null!=i&&(google.maps.event.addDomListener(window, "load", l), google.maps.event.addDomListener(window, "resize", l)),
    s.prototype=new google.maps.OverlayView,
    s.prototype.draw=function() {
        var t=this,
        o=this.div;
        o||((o=this.div=document.createElement("div")).className="map-marker-container", o.innerHTML='<div class="marker-container"><div class="marker-card"><div class="front face">'+t.markerIco+'</div><div class="back face">'+t.markerIco+'</div><div class="marker-arrow"></div></div></div>', google.maps.event.addDomListener(o, "click", function(o) {
            var open = false;
            if(e(this).hasClass("infoBox-opened"))
                open = true;
            e(".map-marker-container").removeClass("clicked infoBox-opened"), 
            google.maps.event.trigger(t, "click");
            if(!open){
                e(this).addClass("clicked infoBox-opened");
            }
        }
        ), void 0!==t.args.marker_id&&(o.dataset.marker_id=t.args.marker_id), this.getPanes().overlayImage.appendChild(o));
        var l=this.getProjection().fromLatLngToDivPixel(this.latlng);
        l&&(o.style.left=l.x+"px", o.style.top=l.y+"px")
    }
    ,
    s.prototype.remove=function() {
        this.div&&(this.div.parentNode.removeChild(this.div), this.div=null, e(this).removeClass("clicked"))
    }
    ,
    s.prototype.getPosition=function() {
        return this.latlng
    }
}

(this.jQuery);

</script>
@endpush
