@push('custom_css')
<style type="text/css">
    

    #booking {
        /*font-family: 'Montserrat', sans-serif;*/
        background-image: url("{{ asset('images/orientation-events/mainbackground.jpg') }}");
        background-size: cover;
        background-position: center;
    }

    #booking::before {
        content: '';
        /*position: absolute;*/
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        /*background: rgba(47, 103, 177, 0.6);*/
    }

    .booking-form {
        background-color: #fff;
        padding: 50px 20px;
        -webkit-box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
        border-radius: 4px;
    }

    .booking-form .form-group {
        position: relative;
        margin-bottom: 30px;
    }

    .booking-form .form-control {
        background-color: #ebecee;
        border-radius: 4px;
        border: none;
        height: 40px;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #3e485c;
        font-size: 14px;
    }

    .booking-form .form-control::-webkit-input-placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form .form-control:-ms-input-placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form .form-control::placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form input[type="date"].form-control:invalid {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .booking-form select.form-control+.select-arrow {
        position: absolute;
        right: 0px;
        bottom: 4px;
        width: 32px;
        line-height: 32px;
        height: 32px;
        text-align: center;
        pointer-events: none;
        color: rgba(62, 72, 92, 0.3);
        font-size: 14px;
    }

    .booking-form select.form-control+.select-arrow:after {
        content: '\279C';
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .booking-form .form-label {
        display: inline-block;
        color: #3e485c;
        font-weight: 700;
        margin-bottom: 6px;
        margin-left: 7px;
    }

    .booking-form .submit-btn {
        display: inline-block;
        color: #fff;
        background-color: #1e62d8;
        font-weight: 700;
        padding: 14px 30px;
        border-radius: 4px;
        border: none;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .booking-form .submit-btn:hover,
    .booking-form .submit-btn:focus {
        opacity: 0.9;
    }

    .booking-cta {
        margin-bottom: 30px;
    }

    .booking-cta h1 {
        font-size: 42px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
    }
    .booking-cta h2 {
        font-size: 32px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
    }

    .booking-cta h3 {
        font-size: 22px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
    }

    .booking-cta h4 {
        font-size: 18px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
    }

    .booking-cta p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }



    .list {
        position: relative;
    }
    .list h2 {
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }
    .list ul {
        position: relative;
    }
    .list ul li {
        position: relative;
        left: 0;
        color: #fce4ec;
        list-style: none;
        margin: 4px 0;
        border-left: 2px solid #f50057;
        transition: 0.5s;
        cursor: pointer;
    }
    .list ul li:hover {
        left: 10px;
    }
    .list ul li span {
        position: relative;
        padding: 8px;
        padding-left: 12px;
        display: inline-block;
        z-index: 1;
        transition: 0.5s;
    }
    .list ul li:hover span {
        color: #FFF;
    }
    .list ul li:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #f50057;
        transform: scaleX(0);
        transform-origin: left;
        transition: 0.5s;
    }
    .list ul li:hover:before {
        transform: scaleX(1);
    }

</style>
@endpush
<div>

<section class="about-sec pt-0">
    <div id="booking" class="section pt-4 ">
        <div class="section-center pt-4 pb-4">
            <div class="container pt-4 pb-4">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>WeWork Beyond:</h1>
                            <h1>Endless Business Solutions</h1>

                            <p>Welcome to WeWork, where we redefine the possibilities of business solutions. Elevate your enterprise to new heights with our comprehensive suite of services designed to propel your growth, streamline operations, and cultivate a thriving work environment.
                            </p>

                            <div class="row">
                                <div class="col-md-12 pt-4">
                                    <div class="list">
                                        <h4>ORIENTATION - DAY 1 (Opportunity to Interact, make professional relationships and exchange ideas)</h4>
                                        <ul>
                                            <li><span>Date: Tuesday, 5th March 2024</span></li>
                                            <li><span>Time: 11:00AM – 12:00PM</span></li>
                                            <li><span>Venue: 9th Floor B1 Block We Work Executive Business Center Lounge, Gulf Towers, Oud Metha</span></li>
                                        </ul>
                                        <p>Snacks will be available during the event plus a complimentary voucher (worth 20 credits) for wework services to be given for the attendees (each office).</p>
                                    </div>

                                    <div class="list mt-4">
                                        <h4>ORIENTATION – DAY 2 (VIRTUAL MEETING)</h4>
                                        <ul>
                                            <li><span>Date: Wednesday, 6th March 2024</span></li>
                                            <li><span>Time: 11:00AM – 12:00PM</span></li>
                                        </ul>
                                        <p>Complimentary voucher (worth 20 credits) for wework services to be given for the virtual attendees (each office).</p>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                        <div class="booking-form">
                            <form>
                                <div class="form-group pt-0 mb-0">
                                    <span class="form-label">
                                        <input type="radio" wire:model="attend_status" value="1" name="attendance"> I will be attending the orientation on day 1 physically.
                                    </span>
                                    <span class="form-label">
                                        <input type="radio" wire:model="attend_status" value="2" name="attendance"> I will be attending the orientation via zoom meeting on day 2.
                                    </span>
                                    <span class="form-label">
                                        <input type="radio" wire:model="attend_status" value="3" name="attendance"> Thank you, i will not attend the orientation.
                                    </span>
                                    @error('attend_status') <p><span class="mb-4 text-danger">Please select one! </span> </p> @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group pt-0 mb-0">
                                            <span class="form-label">Company Name</span>
                                            <input class="form-control" wire:model="company_name" type="text" placeholder="Company Name..!">
                                            @error('company_name') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group pt-0 mb-0">
                                            <span class="form-label">Office No</span>
                                            <select class="form-control"  wire:model="office_no">
                                                <option value="">-Select-</option>
                                                @foreach(config('global.tenants') as $tenants)
                                                <option>{{$tenants}}</option>
                                                @endforeach    
                                            </select>
                                            
                                            @error('office_no') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group pt-0 mb-0">
                                            <span class="form-label">Name of Attendee </span><small>(1 Participant per office)</small>
                                            <input class="form-control" wire:model="name_aof_attendee" type="text" placeholder="Name of Attendee..!">
                                            @error('name_aof_attendee') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group pt-0 mb-0">
                                            <span class="form-label">Mobile Number</span>
                                            <input class="form-control" wire:model="mobile_number" type="text" placeholder="Mobile Number..!">
                                            @error('mobile_number') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group pt-0 mb-0">
                                            <span class="form-label">Email Address</span>
                                            <input class="form-control" wire:model="email" type="text" placeholder="Email Address..!">
                                            @error('email') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                        
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <span class="form-label">1. Are you interested to join Wework networking business opportunities program?</span>
                                            <span class="form-label"><input wire:model="interested_to_join" value="yes" type="radio" required>Yes </span>
                                            <span class="form-label"> <input wire:model="interested_to_join" value="no" type="radio" required>No</span>
                                            @error('interested_to_join') <p><span class="mb-4 text-danger"> Please check one! </span></p> @enderror
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 pt-0">
                                            <span class="form-label">2. Is your Business prepared and ready for the UAE corporate tax? </span>
                                            <span class="form-label"><input wire:model="prepared_and_ready" value="yes" type="radio" required>Yes </span>
                                            <span class="form-label"> <input wire:model="prepared_and_ready" value="no" type="radio" required>No</span>
                                            @error('prepared_and_ready') <span class="mb-4 text-danger"> Please check one! </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 pt-0">
                                            <span class="form-label">3. Are you facing any challenges renewing your license and any government related documents or you want to start up new business?</span>
                                            <span class="form-label"><input wire:model="facing_any_challenges" value="yes" type="radio" required>Yes </span>
                                            <span class="form-label"> <input wire:model="facing_any_challenges" value="no" type="radio" required>No</span>
                                            @error('facing_any_challenges') <span class="mb-4 text-danger"> Please check one! </span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn" type="button" wire:click="saveRegistration">Save & Submit</button>
                                    @if($successEmailResp)
                                            <h4><span class="text-success"><strong>Success!</strong> Thank you for registering
                                                    We Work Beyond: Endless Business Solutions, we will contact you soon..!</span></h4>
                                            @endif
                                    <div wire:loading wire:target="saveRegistration">
                                        <div style="display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index:999999; width:100%; height:100%; opacity: .75;" >
                                            <div class="la-ball-beat">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
