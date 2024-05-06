@push('custom_css')
<style type="text/css">
    .circular-img img
    {
        /* the magic */
        display: block;
        width: 180px;
        height: 180px;
        overflow: hidden;
        -webkit-border-radius: 180px;
        -moz-border-radius: 180px;
        -ms-border-radius: 180px;
        -o-border-radius: 180px;
        border-radius: 180px;
        /* the rest */
        position: relative; /* for the overlay later */
        margin: 0px auto;
        text-align: center;
        margin-bottom: 10px;
        border: 3px solid #FFF;
        -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3),inset 0px 3px 8px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3),inset 0px 3px 8px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3),inset 0px 3px 8px rgba(0, 0, 0, 0.3);
    }

</style>
@endpush
<main>
    <div  wire:ignore.self class="popup" id="businesssolutionrequest-popup">
        <h3>{{$service_name}} Request</h3>
        <div class="popup-form">
            <form>
                @if($successEmailResp)
                <h4><span class="text-success"><strong>Success!</strong> thanks for interesting with we work business solution , we will contact you soon..!</span></h4>
                @endif
                <!-- <h3>{{$service_name}}</h3> -->
                
                <div class="form-field">
                    <input type="text" name="name" placeholder="Name" id="name" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <input type="text" name="company_name" placeholder="Company Name" id="company_name" wire:model="company_name">
                    @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <input type="text" name="location" placeholder="Location" id="location" wire:model="location">
                    @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <textarea name="address" placeholder="Address"  wire:model="address" id="address"></textarea>
                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <input type="email" name="email" placeholder="Email" id="email" wire:model="email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <input type="text" name="phone" placeholder="Phone" wire:model="phone" id="phone">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <textarea name="message" placeholder="Message"  wire:model="message" id="message"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div><!--form-field end-->
                <div class="form-field">
                    <button type="button" class="btn btn-primary" wire:click="submitBusinessSolutionRequest">Contact</button>
                    <div wire:loading wire:target="submitBusinessSolutionRequest">
                        <div style="display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index:999999; width:100%; height:100%; opacity: .75;" >
                            <div class="la-ball-beat">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div><!--form-field end-->
            </form>
        </div>
    </div>

    <!--Business Solutions-->
    <section class="explore-feature hp7 section-padding pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading"  style="margin-bottom: 0px;">
                        <span>Explore Features</span>
                        <h3>Service You Need</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="#" title="">
                        <div class="card" style="border:none;">
                            <div class="card-body pt-2">
                                <p>Discover a world of possibilities with WeWork.ae. Our range of services is designed to meet every aspect of your business needs, providing you with the flexibility and support to thrive. A dynamic workspace where you can choose any available desk in the common area on a first-come, first-served basis. A personal workspace designed for you, providing the consistency of having your own desk in a shared office space. Fully furnished, lockable office space for teams of all sizes, designed for productivity and collaboration.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <section class="popular-cities section-padding pt-0 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem1">
                    <a href="#" class="businesssolutionrequest-op" data-val="Accounting Services">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/accounting-service-1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Accounting Services</h4>
                                <p class="busSlnItem1" style="display:none;">Unlock the potential of your business with our Accounting Service. Our specialists offer services such as <b>tax preparation, counseling, and tracking spending and earnings</b> for a comprehensive understanding of your business's financial landscape.</p>
                                <!-- <i class="fa fa-angle-right"></i> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem2">
                    <a href="#" class="businesssolutionrequest-op" data-val="Corporate Compliance">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/primage1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Corporate Compliance</h4>
                                <p class="busSlnItem2" style="display:none;">Embark on a seamless journey in business setup and licensing with our Business Setup/Licensing Service.</p>
                                <p class="busSlnItem2" style="display:none;">Navigate with confidence through :<br>--Legal compliance.<br>--Company registration.<br>--Licensing.<br>--Insightful tax consultations.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem3">
                    <a href="#" class="businesssolutionrequest-op" data-val="IT Support">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/it-support1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>IT Support</h4>
                                <p class="busSlnItem3" style="display:none;">Ensure optimal IT support with our Tech team, providing end-to-end services in design, development, and maintenance. Improve productivity with technology's efficiency, available around the clock.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem4">
                    <a href="#" class="businesssolutionrequest-op" data-val="Legal Support">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/legal-support1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Legal Support</h4>
                                <p class="busSlnItem4" style="display:none;">Access excellent legal support for your business needs, from drafting legal documents to contracts compliance and legal advice. </p>
                                <p class="busSlnItem4" style="display:none;">We also assist with customs clearance, handling import-export formalities and required documentations.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem5">
                    <a href="#" class="businesssolutionrequest-op" data-val="Administrative Services">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/administrative1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Administrative Services</h4>
                                <p class="busSlnItem5" style="display:none;">To ensure nothing is overlooked.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem6">
                    <a href="#" class="businesssolutionrequest-op" data-val="Translation Services">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/translation1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Translation Services</h4>
                                <p class="busSlnItem6" style="display:none;">Help your business reach a global audience.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem7">
                    <a href="#" class="businesssolutionrequest-op" data-val="Printing and Scanning">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/printing1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Printing and Scanning</h4>
                                <p class="busSlnItem7" style="display:none;">Professional print station for your business needs.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem8">
                    <a href="#" class="businesssolutionrequest-op" data-val="Custom Furniture">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/furniture1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Custom Furniture</h4>
                                <p class="busSlnItem8" style="display:none;">Enhance your workspace with Additional Furniture Service, customizable to your requirements.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem9">
                    <a href="#" class="businesssolutionrequest-op" data-val="Office boy Services">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/office-boy1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Office boy Services</h4>
                                <p class="busSlnItem9" style="display:none;">Experience assistance in daily tasks.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem10">
                    <a href="#" class="businesssolutionrequest-op" data-val="House Keeping Services">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/house-keeping1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>House Keeping Services</h4>
                                <p class="busSlnItem10" style="display:none;">Maintain a clean workspace.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-xs-12 mb-4 busSln" data-id="busSlnItem11">
                    <a href="#" class="businesssolutionrequest-op" data-val="Car Parking">
                        <div class="card">
                            <div class="overlay"></div>
                            <img src="{{ asset('images/services/car-parking1.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <h4>Car Parking</h4>
                                <p class="busSlnItem11" style="display:none;">Secure your convenience with our Car Parking services:</p>
                                <p class="busSlnItem11" style="display:none;">--Automated Parking System<br>--24 Hr. Surveillance</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!--End Business Solutions-->
</main>
@push('custom_script')
<script type="text/javascript">
    $(document).ready(function(){
        /*$('.busSln').mouseover(function(){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).show(200); 
        });
        $('.busSln').mouseover(function(){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).show(200); 
        });*/

        $('.busSln').bind('mouseover',function(event){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).show(200); 
        })
        .bind('mouseleave',function(){
            var pTagDisText = $(this).attr('data-id');
            $('.'+pTagDisText).hide(200); 
        });

        $(".businesssolutionrequest-op").on("click", function() {
            var dateText = $(this).attr('data-val');
            $("#businesssolutionrequest-popup").toggleClass("active");
            $("#businesshub-popup").removeClass("active");
            $("#sign-popup").removeClass("active");
            $("#register-popup").removeClass("active");
            $(".wrapper").addClass("overlay-bgg");
            @this.set('service_name', dateText);
            @this.set('successEmailResp', false);
            $('#name, #company_name, #location, #address, #phone, #email, #message').val('');
        });
        $("html").on("click", function(){
            $("#businesssolutionrequest-popup").removeClass("active");
            $(".wrapper").removeClass("overlay-bgg");
        });
        $(".businesssolutionrequest-op , .popup").on("click", function(e) {
            e.stopPropagation();
        });

    });
</script>
<script type="text/javascript">
    window.addEventListener('closeBusinessSolutionRequest',event=>{
        $("#businesssolutionrequest-popup").removeClass("active");
        $(".wrapper").removeClass("overlay-bgg");
    });
</script>

@endpush