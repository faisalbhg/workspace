@push('custom_css')
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap");
* {
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}

.wrapper:before
{
    background-color: #FFF !important;
}
body {
  margin: 0;
  overflow-x: hidden;

}

.prize li{
    list-style: disc !important;
}
.prize li::marker {
  color: #000;
}

header {
  position: relative;
}
header .container {
  max-width: 1368px;
  margin: 0 auto;
  padding: 1rem 2rem;
}
header .container .navbar {
  min-height: 10vh;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
header .container .navbar .logo {
  font-size: 2.25rem;
  text-decoration: none;
  text-transform: uppercase;
  color: #fff;
  font-weight: 700;
}
header .container .navbar .nav-links {
  display: flex;
  align-items: center;
}
header .container .navbar .nav-links li {
  list-style-type: none;
}
header .container .navbar .nav-links li a {
  text-decoration: none;
  color: #fff;
  margin: 0 1.25rem;
  font-weight: 500;
  font-size: 1.05rem;
  position: relative;
}
header .container .navbar .nav-links li a::after {
  position: absolute;
  content: "";
  background-color: #fff;
  bottom: -5px;
  left: 0;
  width: 0%;
  height: 3px;
  transition: 0.3s ease all;
}
header .container .navbar .nav-links li a:hover::after {
  width: 100%;
}
header .container .navbar .nav-links button {
  border: none;
  outline: none;
  cursor: pointer;
  padding: 0.75rem 1rem;
  margin: 0 1rem;
  border-radius: 6px;
  background: transparent;
  border: 2px solid #fff;
  color: #fff;
  font-weight: 500;
}
header .container .navbar i {
  display: none;
  color: #fff;
  cursor: pointer;
}
header .container .showcase {
  min-height: 80vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  
}
header .container .showcase h1 {
  color: #fff;
  font-size: 2.5rem;
  margin-bottom: 0;
  font-weight: 700;
  margin-bottom: 1rem;
}
header .container .showcase h2 {
  color: #fff;
  font-size: 2.1rem;
  margin-bottom: 0;
  font-weight: 700;
  margin-bottom: 1rem;
}
header .container .showcase h3 {
  color: #fff;
  font-size: 1.8rem;
  margin-bottom: 0;
  font-weight: 700;
  margin-bottom: 1rem;
}
header .container .showcase h5 {
  color: #fff;
  font-size: 1.2rem;
  margin-bottom: 0;
  font-weight: 700;
  margin-bottom: 1rem;
}
header .container .showcase h2, header .container .showcase h3, header .container .showcase h4, header .container .showcase h5, header .container .showcase h6 {
  color: #fff;
}
header .container .showcase p {
  margin-top: 0;
  color: #fff;
  font-weight: 500;
  line-height: 1.4;
  font-size: 0.9rem;
 
}

header .video-container {
  z-index: -1;
  position: absolute;
  top: 0;
  left: 0;
  height: 100vh;
  width: 100vw;
}
header .video-container video {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
header .video-container::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.28);
}

@media (max-width: 850px) {
  header .container .navbar .nav-links {
    position: absolute;
    top: 0;
    left: 0;
    background-color: #fff;
    height: 100%;
    width: 225px;
    margin: 0;
    padding: 0;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    transform: translateX(-100%);
    transition: 0.4s ease all;
    z-index: 10;
  }
  header .container .navbar .nav-links li a {
    color: #000;
  }
  header .container .navbar .nav-links li a::after {
    background-color: #000;
  }
  header .container .navbar .nav-links button {
    border-color: #000;
    color: #000;
    padding: 0.75rem 1.5rem;
  }
  header .container .navbar .nav-links.active {
    transform: translateX(0%);
  }
  header .container .navbar i {
    display: block;
  }
  header .container .showcase {
    min-height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    text-align: center;
  }
  header .container .showcase h1 {
    font-size: 2.25rem;
  }
}
@media (max-width: 500px) {
  header .container .showcase h1 {
    font-size: 2.1rem;
  }
  header .container .showcase p {
    font-size: 0.85rem;
    width: 300px;
  }
  .mobilere{
    background: #000 !important;
  }
}
</style>
@endpush
    <div style="background: #000; float: left; width: 100%;">
        <header >
            <div class="container pt-4">
                <section class="showcase" style="z-index: 999;">
                    <div class="contact-details-sec">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 p-0">
                                <div class="contact_form text-center">
                                    <h1>TABLE TENNIS TOURNAMENT</h1>
                                    <h4>AT WEWORK EXECUTIVE BUSINESS CENTER – Lounge (9TH FLOOR B1 BLOCK)<br>SPONSORED BY ROASTERY STATION</h4>
                                    <img src="{{ asset('images/roastery-station-logo.svg')}}" width="100" class="mb-2">
                                    <br>
                                    <p>Get ready for a thrilling showcase of skill, speed, and sportsmanship at the WeWork Table Tennis Championship Sponsored by Roastery Station. This event brings together the finest table tennis players to the competition like no other.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 pl-0">
                                <div class="contact_form bg-light p-4 text-left">
                                    <h3 class="mb-0 text-dark">Date & Venue</h3>
                                    <p class="mb-0 text-dark">Qualifying matches will start from: Wednesday, 14th February 2024</p>
                                    <p class="mb-0 text-dark">Time: 12:00PM – 3:00PM</p>
                                    <p class="mb-0 text-dark">Location: Gulf Towers, Oud Metha<br>At WeWork Executive Business Center – Lounge (9TH FLOOR B1 BLOCK)</p>
                                </div>
                            
                                <div class="contact_form mt-2 bg-light p-4 text-left">
                                    <h3 class="mb-0 text-dark">Prizes:</h3>
                                    <ul class="prize">
                                        <li>
                                            <h4 class="mb-0 text-dark">1st Place – AED 500/- + 20 vouchers from Roastery Station (<small>Worth 20 AED each</small>)</h4>
                                        </li>
                                        <li>
                                            <h4 class="mb-0 text-dark">2nd Place – AED 250/- + 10 vouchers from Roastery Station (<small>Worth 20 AED each</small>)</h4>
                                        </li>
                                        <li>
                                            <h4 class=" text-dark">3rd Place – 10 vouchers from Roastery Station (<small>Worth 20 AED each</small>)</h4>
                                        </li>
                                        <li>
                                            <h4 class=" text-dark">4th Place – 5 vouchers from Roastery Station (<small>Worth 20 AED each</small>)</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 pb-4 mobilere" >
                                <div class="contact_form text-left">

                                    @if($registrationClosed)
                                    <div class="contact_form text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="text-align:justify;" class="mb-2">Thank you for your enthusiastic response to the WeWork Table Tennis Tournament! We are delighted by the overwhelming interest and support from our community.</p>
                                                <p style="text-align:justify;" class="mb-2 text-danger font-weight-bold">We regret to inform you that registration for the tournament is now closed. Due to the high number of entries, we have reached full capacity, and we are no longer able to accept additional registrations.</p>
                                                <p style="text-align:justify;" class="mb-2">We appreciate your passion for table tennis and your eagerness to be part of this exciting event. For those who have successfully registered, we look forward to hosting a thrilling tournament filled with fierce competition and camaraderie.</p>
                                                <p style="text-align:justify;">Stay tuned for further updates, including the tournament schedule, participant guidelines, and other important details. If you have any urgent inquiries or concerns, please feel free to reach out to our event organizers at WeWork.</p><br><br>
                                                <h5>Thank you once again for your interest and participation in the WeWork Table Tennis Tournament. Let the games begin!</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @else

                                        <h3>Registration</h3>
                                        
                                        <div class="form-group no-pt">
                                            <div class="missing-message">
                                                Populate Missing Fields
                                            </div>
                                            <div class="success-message">
                                                <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully
                                                sent...
                                            </div>
                                            <div class="error-message">Populate Missing Fields</div>
                                        </div><!--form-group end-->
                                        <div class="form-fieldss">
                                            <div class="row">
                                                
                                                @if($successEmailResp)
                                                <h4><span class="text-success"><strong>Success!</strong> Thank you for registering
                                                        we-work Pinball Competition, we will contact you soon..!</span></h4>
                                                @endif
                                                <div class="col-lg-4 col-md-4 pl-0">
                                                    <div class="form-field">
                                                        <label class="text-light" for="name">Name</label>
                                                        <input type="text" name="name" placeholder="Your Name" id="name"
                                                            wire:model="name">
                                                        @error('name') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-field">
                                                        <label class="text-light" for="email">Email</label>
                                                        <input type="email" name="email" placeholder="Your Email" id="email"
                                                            wire:model="email">
                                                        @error('email') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 pr-0">
                                                    <div class="form-field">
                                                        <label class="text-light" for="mobile">Mobile No.</label>
                                                        <input type="text" name="mobile" placeholder="Mobile No."
                                                            wire:model="mobile">
                                                        @error('mobile') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-12 col-md-12 pl-0 pr-0">
                                                    <div class="form-field">
                                                        <label class="text-light" for="company">Company</label>
                                                        <input type="text" name="company" placeholder="Company"
                                                            wire:model="company">
                                                        @error('company') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-12 col-md-12 pl-0 pr-0">
                                                    <div class="form-field">
                                                        <label class="text-light" for="qtn1">1. How often do you play table tennis
                                                            in a month?</label>
                                                        <select class="form-control" name="qtn1" wire:model="qtn1">
                                                            <option value="">-Select-</option>
                                                            <option value="0-3 times a month">0-3 times a month</option>
                                                            <option value="4-6 times a month">4-6 times a month</option>
                                                            <option value="7-10 times a month">7-10 times a month</option>
                                                            <option value="11-15 times a month">11-15 times a month</option>
                                                            <option value="16 and above">16 and above</option>
                                                        </select>
                                                        @error('qtn1') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-12 col-md-12 pl-0 pr-0">
                                                    <div class="form-field">
                                                        <label class="text-light" for="qtn2">2. How do you rate your serve and
                                                            receive skills?<small>Rating: 1 (Beginner) to 5 (Expert)</small></label>
                                                        <input type="number" name="qtn2"
                                                            placeholder="Rating: 1 (Beginner) to 5 (Expert)" wire:model="qtn2">
                                                        @error('qtn2') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-12 col-md-12 pl-0 pr-0">
                                                    <div class="form-field">
                                                        <label class="text-light" for="qtn3">3. How do you evaluate your table
                                                            tennis in general?<small>Rating: 1 (Beginner) to 5
                                                                (Expert)</small></label>
                                                        <input type="number" name="qtn3"
                                                            placeholder="Rating: 1 (Beginner) to 5 (Expert)" wire:model="qtn3">
                                                        @error('company') <span class="mb-4 text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div><!-- form-field end-->
                                                </div>
                                                <div class="col-lg-12 col-md-12 pl-0">
                                                    <button type="button" class="btn-default submit"
                                                        wire:click="getRegistrationSubmit">Submit Registration</button>
                                                </div>
                                                <div wire:loading wire:target="getRegistrationSubmit">
                                                    <div
                                                        style="display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index:999999; width:100%; height:100%; opacity: .75;">
                                                        <div class="la-ball-beat">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            

                                            </div>
                                        </div><!--form-fieldss end-->
                                    @endif

                                </div><!--contact_form end-->
                            </div>

                        </div>
                        <hr>

                    </div><!--contact-details-sec end-->
                </section>
            </div>

            <div class="video-container"  style="z-index: 998;">
                <video src="{{ asset('images/pingpong/ping-pong0.mp4')}}" autoplay loop muted></video>
            </div>

        </header>
    </div>



<div class="contact-sec">
    <div class="container">

        
    </div>
</div><!--contact-sec end-->

@push('custom_script')

@endpush