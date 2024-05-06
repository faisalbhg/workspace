<x-layouts.base>
	
        
        <header class="headeMobDesk">
            <div class="header shd">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="{{ url('/')}}">
                                    <img src="{{asset('images/we-work-black-logo.png')}}" alt="">
                                </a>
                                <button class="menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                </button>

                                <div class="navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a href="{{ url('we-work-locations') }}" class="nav-link">
                                                <span><b>Locations</b></span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                                Services
                                            </a>
                                            <div class="dropdown-menu animated">
                                                <a class="dropdown-item" href="{{ url('private-offices') }}">Private Offices</a>
                                                <a class="dropdown-item" href="{{ url('coworkspace') }}">CoWorking Space</a>
                                                <a class="dropdown-item" href="{{ url('meeting-rooms') }}">Meeting Rooms</a>
                                                <!-- <a class="dropdown-item" href="{{ url('workspace/8') }}">Event Space</a> -->
                                                <a class="dropdown-item" href="{{ url('business-solutions') }}">Business Solutions</a>
                                                <a class="dropdown-item" href="{{ url('business-networking-hub') }}">Business Networking Hub</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                                Events
                                            </a>
                                            <div class="dropdown-menu animated">
                                                <a class="dropdown-item" style="cursor: pointer;" href="{{ url('table-tennis-championship') }}">Table Tennis Tournament</a>
                                                <a class="dropdown-item" style="cursor: pointer;" href="{{ url('wework-beyond-endless-business-solutions') }}">Business Orientation Event</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('contact') }}" class="nav-link">
                                                <span><b>Contact</b></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    <div class="d-inline my-2 my-lg-0">
                                        <ul class="navbar-nav">
                                            @guest
                                            <li class="nav-item signin-btn">
                                                <a href="#" class="nav-link">
                                                    <i class="la la-sign-in"></i>
                                                    <span><b class="signin-op">Sign in</b></span> or <span><b class="reg-op">Register</b></span>
                                                </a>

                                            </li>
                                            @endguest
                                            @auth()
                                            <li class="nav-item dropdown mt-1">
                                                <!-- <a class="cursor-pointer nav-link" href="{{ url('profile') }}" >
                                                    <i class="fa fa-user"></i>
                                                    <span><b class="">Profile</b></span>
                                                </a> -->
                                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                                    My Account
                                                </a>
                                                <div class="dropdown-menu animated">
                                                    <a class="dropdown-item active" href="{{ url('my-services') }}">Services</a>
                                                    <a class="dropdown-item" href="{{ url('my-bookings') }}">Boookings</a>
                                                    <a class="dropdown-item" href="{{ url('my-profile') }}">Profile</a>
                                                </div>

                                            </li>
                                            <livewire:auth.logout />

                                            @endauth
                                            
                                        </ul>
                                    </div>
                                    <a href="#" title="" class="close-menu"><i class="la la-close"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--header end-->


        <livewire:auth.login />
        <livewire:auth.register />
        <livewire:business-hub-create />
        

		
		{{ $slot }}

		
	    <section class="cta bottom section-padding mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-md-4">
                        <div class="bottom-logo">
                            <img src="{{asset('images/we-work-white-logo.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-3">
                        <div class="bottom-list">
                            <h3 class="text-light">Helpful Links</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('about') }}" title="">About</a>
                                </li>
                                <li>
                                    <a href="{{ url('terms-condition') }}" title="">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ url('privacy-policy') }}"  title="">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}"  title="">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" title="">Contact</a>
                                </li>
                            </ul>
                        </div><!--bottom-list end-->
                    </div>
                    <div class="col-xl-5 col-sm-12 col-md-5 pl-0">
                        <div class="bottom-desc">
                            <h3 class="text-light">About</h3>
                            <p>Tired of WFH? Choosy and looking for a flexible, low-maintenance working space that helps you contribute and stay more focused towards your goals? Grow your business free from strife with WeWork and Enter A World of Co-shared and Individual business support Workspace.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

	    <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer-content">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-md-6">
                                    <div class="copyright">
                                        <p class="text-dark">&copy; We Work. All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="footer-social">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--footer end-->

    

</x-layouts.base>