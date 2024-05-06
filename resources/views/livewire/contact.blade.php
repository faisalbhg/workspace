@push('custom_css')
@endpush
<section wire:ignore id="map-container" class="fullwidth-home-map hp3">
    <h3 class="vis-hid">Invisible</h3>
    <div  id="map" data-map-zoom="15"></div>
</section>

<div class="contact-sec">
    <div class="container">
        <div class="contact-details-sec">
            <div class="row">
                <div class="col-lg-8 col-md-8 pl-0">
                    <div class="contact_form">
                        <h3>Contact</h3>
                        <p></p>
                        
                            <div class="form-group no-pt">
                                <div class="missing-message">
                                    Populate Missing Fields
                                </div>
                                <div class="success-message">
                                    <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                                </div>
                                <div class="error-message">Populate Missing Fields</div>
                            </div><!--form-group end-->
                            <div class="form-fieldss">
                                <div class="row">
                                    @if($successEmailResp)
                                    <h4><span class="text-success"><strong>Success!</strong> Thankyou for contacting we-work, we will cotact you soon..!</span></h4>
                                    @endif
                                    <div class="col-lg-4 col-md-4 pl-0">
                                        <div class="form-field">
                                            <input type="text" name="name" placeholder="Your Name" id="name" wire:model="name">
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-field">
                                            <input type="email" name="email" placeholder="Your Email" id="email" wire:model="email">
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 pr-0">
                                        <div class="form-field">
                                            <input type="text" name="phone" placeholder="Your Phone" wire:model="phone">
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-12 col-md-12 pl-0 pr-0">
                                        <div class="form-field">
                                            <textarea name="message" placeholder="Your Message"  wire:model="bc_c_message"></textarea>
                                        </div><!-- form-field end-->
                                    </div>
                                    <div class="col-lg-12 col-md-12 pl-0">
                                        <button type="button" class="btn-default submit"  wire:click="getContactSubmit" >Send Message</button>
                                    </div>
                                    <div wire:loading wire:target="getContactSubmit">
                                        <div style="display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index:999999; width:100%; height:100%; opacity: .75;" >
                                            <div class="la-ball-beat">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><!--form-fieldss end-->
                        
                    </div><!--contact_form end-->
                </div>
                <div class="col-lg-4 col-md-4 pr-0">
                    <div class="contact_info">
                        <h3>Contact Information</h3>
                        <ul class="cont_info">
                            <li><i class="la la-map-marker"></i> We Work Business Centre LLC, Gulf Towers, 9th Floor B1 Block, Oud Metha, Burdubai, Dubai, United Arab Emirates</li>
                            <!-- <li><i class="la la-phone"></i> +1 212-925-3797</li> -->
                            <li><i class="la la-envelope"></i><a href="mailto:support@we-work.ae" title="">support@we-work.ae</a></li>
                            <li><i class="la la-phone"></i><a href="mailto:+971564100094">800-WEWORK (939675) / +971564100094</a></p>
                        </ul>
                        <ul class="social_links">
                            <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div><!--contact_info end-->
                </div>
            </div>
        </div><!--contact-details-sec end-->
    </div>
</div><!--contact-sec end-->

@push('custom_script')
<!-- Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsmlLeF_TLLl01ijNU0OMJi9DcPILmFts"></script>
        <script src="{{asset('js/map-cluster/infobox.min.js')}}"></script>
        <script src="{{asset('js/map-cluster/markerclusterer.js')}}"></script>
        <script type="text/javascript">
            !function(e){"use strict";function t(){var t=new InfoBox;var o,l,i,s,n=[[(o="24_Property_Single.html",l="assets/images/map-cluster/listing-item-01.jpg",i="Grameen Sweets",s="964 School Street, New York",'<a href="'+o+'" class="listing-img-container"><div class="infoBox-close"><i class="fa fa-times"></i></div><img src="'+l+'" alt=""><div class="listing-item-content"><h3>'+i+"</h3><span>"+s+"</span></div></a>"),25.236133722321814, 55.31850808465924,1,'<i class="la la-home"></i>']],r=e("#map").attr("data-map-zoom"),m=e("#map").attr("data-map-scroll");if(void 0!==r&&!1!==r)var c=parseInt(r);else c=10;if(void 0!==m&&!1!==m)var p=parseInt(m);else p=!1;var d=new google.maps.Map(document.getElementById("map"),{zoom:c,scrollwheel:p,center:new google.maps.LatLng(25.236133722321814, 55.31850808465924),mapTypeId:google.maps.MapTypeId.ROADMAP,zoomControl:!1,mapTypeControl:!1,scaleControl:!1,panControl:!1,navigationControl:!1,streetViewControl:!1,gestureHandling:"cooperative",styles:[{featureType:"water",elementType:"geometry",stylers:[{color:"#e9e9e9"},{lightness:17}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:20}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#ffffff"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#ffffff"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:16}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:21}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#dedede"},{lightness:21}]},{elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"},{lightness:16}]},{elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#333333"},{lightness:40}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#f2f2f2"},{lightness:19}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#fefefe"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#fefefe"},{lightness:17},{weight:1.2}]}]});e(".listing-item-container").on("mouseover",function(){if(void 0!==e(this).data("marker-id")){var t=e(this).data("marker-id")-1,o=v[t].div;e(o).addClass("clicked"),e(this).on("mouseout",function(){e(o).is(":not(.infoBox-opened)")&&e(o).removeClass("clicked")})}});var g=document.createElement("div");g.className="map-box";var f,y,u={content:g,disableAutoPan:!1,alignBottom:!0,maxWidth:0,pixelOffset:new google.maps.Size(-134,-55),zIndex:null,boxStyle:{width:"270px"},closeBoxMargin:"0",closeBoxURL:"",infoBoxClearance:new google.maps.Size(25,25),isHidden:!1,pane:"floatPane",enableEventPropagation:!1},v=[];for(f=0;f<n.length;f++){y=n[f][4];var h=new a(new google.maps.LatLng(n[f][1],n[f][2]),d,{marker_id:f},y);v.push(h),google.maps.event.addDomListener(h,"click",function(o,l){return function(){t.setOptions(u),g.innerHTML=n[l][0],t.open(d,o),n[l][3],google.maps.event.addListener(t,"domready",function(){e(".infoBox-close").click(function(o){o.preventDefault(),t.close(),e(".map-marker-container").removeClass("clicked infoBox-opened")})})}}(h,f))}new MarkerClusterer(d,v,{imagePath:"assets/images/",styles:[{textColor:"white",url:"",height:50,width:50}],minClusterSize:2}),google.maps.event.addDomListener(window,"resize",function(){var e=d.getCenter();google.maps.event.trigger(d,"resize"),d.setCenter(e)});var T=document.createElement("div");new function(e,t){T.index=1,t.controls[google.maps.ControlPosition.RIGHT_CENTER].push(T),e.style.padding="5px",e.className="zoomControlWrapper";var o=document.createElement("div");e.appendChild(o);var l=document.createElement("div");l.className="custom-zoom-in",o.appendChild(l);var i=document.createElement("div");i.className="custom-zoom-out",o.appendChild(i),google.maps.event.addDomListener(l,"click",function(){t.setZoom(t.getZoom()+1)}),google.maps.event.addDomListener(i,"click",function(){t.setZoom(t.getZoom()-1)})}(T,d);var w=e("#scrollEnabling");e(w).click(function(t){t.preventDefault(),e(this).toggleClass("enabled"),e(this).is(".enabled")?d.setOptions({scrollwheel:!0}):d.setOptions({scrollwheel:!1})}),e("#geoLocation, .input-with-icon.location a").click(function(e){e.preventDefault(),navigator.geolocation&&navigator.geolocation.getCurrentPosition(function(e){var t=new google.maps.LatLng(e.coords.latitude,e.coords.longitude);d.setCenter(t),d.setZoom(12)})})}var o=document.getElementById("map");function l(){var t=new google.maps.LatLng({lng:e("#singleListingMap").data("longitude"),lat:e("#singleListingMap").data("latitude")}),o=new google.maps.Map(document.getElementById("singleListingMap"),{zoom:15,center:t,scrollwheel:!1,zoomControl:!1,mapTypeControl:!1,scaleControl:!1,panControl:!1,navigationControl:!1,streetViewControl:!1,styles:[{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#747474"},{lightness:"23"}]},{featureType:"poi.attraction",elementType:"geometry.fill",stylers:[{color:"#f38eb0"}]},{featureType:"poi.government",elementType:"geometry.fill",stylers:[{color:"#ced7db"}]},{featureType:"poi.medical",elementType:"geometry.fill",stylers:[{color:"#ffa5a8"}]},{featureType:"poi.park",elementType:"geometry.fill",stylers:[{color:"#c7e5c8"}]},{featureType:"poi.place_of_worship",elementType:"geometry.fill",stylers:[{color:"#d6cbc7"}]},{featureType:"poi.school",elementType:"geometry.fill",stylers:[{color:"#c4c9e8"}]},{featureType:"poi.sports_complex",elementType:"geometry.fill",stylers:[{color:"#b1eaf1"}]},{featureType:"road",elementType:"geometry",stylers:[{lightness:"100"}]},{featureType:"road",elementType:"labels",stylers:[{visibility:"off"},{lightness:"100"}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#ffd4a5"}]},{featureType:"road.arterial",elementType:"geometry.fill",stylers:[{color:"#ffe9d2"}]},{featureType:"road.local",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"road.local",elementType:"geometry.fill",stylers:[{weight:"3.00"}]},{featureType:"road.local",elementType:"geometry.stroke",stylers:[{weight:"0.30"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{visibility:"on"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#747474"},{lightness:"36"}]},{featureType:"road.local",elementType:"labels.text.stroke",stylers:[{color:"#e9e5dc"},{lightness:"30"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{visibility:"on"},{lightness:"100"}]},{featureType:"water",elementType:"all",stylers:[{color:"#d2e7f7"}]}]});e("#streetView").click(function(e){e.preventDefault(),o.getStreetView().setOptions({visible:!0,position:t})});var l=document.createElement("div");new function(e,t){l.index=1,t.controls[google.maps.ControlPosition.RIGHT_CENTER].push(l),e.style.padding="5px";var o=document.createElement("div");e.appendChild(o);var i=document.createElement("div");i.className="custom-zoom-in",o.appendChild(i);var a=document.createElement("div");a.className="custom-zoom-out",o.appendChild(a),google.maps.event.addDomListener(i,"click",function(){t.setZoom(t.getZoom()+1)}),google.maps.event.addDomListener(a,"click",function(){t.setZoom(t.getZoom()-1)})}(l,o);var i="<i class='"+e("#singleListingMap").data("map-icon")+"'></i>";new a(t,o,{marker_id:"1"},i)}void 0!==o&&null!=o&&(google.maps.event.addDomListener(window,"load",t),google.maps.event.addDomListener(window,"resize",t));var i=document.getElementById("singleListingMap");function a(e,t,o,l){this.latlng=e,this.args=o,this.markerIco=l,this.setMap(t)}void 0!==i&&null!=i&&(google.maps.event.addDomListener(window,"load",l),google.maps.event.addDomListener(window,"resize",l)),a.prototype=new google.maps.OverlayView,a.prototype.draw=function(){var t=this,o=this.div;o||((o=this.div=document.createElement("div")).className="map-marker-container",o.innerHTML='<div class="marker-container"><div class="marker-card"><div class="front face">'+t.markerIco+'</div><div class="back face">'+t.markerIco+'</div><div class="marker-arrow"></div></div></div>',google.maps.event.addDomListener(o,"click",function(o){e(".map-marker-container").removeClass("clicked infoBox-opened"),google.maps.event.trigger(t,"click"),e(this).addClass("clicked infoBox-opened")}),void 0!==t.args.marker_id&&(o.dataset.marker_id=t.args.marker_id),this.getPanes().overlayImage.appendChild(o));var l=this.getProjection().fromLatLngToDivPixel(this.latlng);l&&(o.style.left=l.x+"px",o.style.top=l.y+"px")},a.prototype.remove=function(){this.div&&(this.div.parentNode.removeChild(this.div),this.div=null,e(this).removeClass("clicked"))},a.prototype.getPosition=function(){return this.latlng}}(this.jQuery);
        </script>
@endpush