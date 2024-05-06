@push('custom_css')

@endpush
<section class="page-main-content section-padding">

    <div class="container">
        <div class="agent-profile-sec">

            
            
        </div><!--agent-profile-sec end-->
    </div>
    
    <div class="container">
        <div class="row m-0">
            <div class="col-12">
                <div class="mb-4 text-center">
                    
                </div>
            </div>

            <div class="col-md-8 col-12 offset-md-2">
                <div class="row">
                    <div class="col-12">
                        <div class="box-right">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>Success!</strong> {{ $message }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>Error!</strong> {{ $message }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
                            @if($showAuthPannel)
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 pl-0 pr-0 pb-4 mb-4">
                                    <div class="contact-agent">
                                        <h3 class="text-center">CUSTOMER AUTHENTICATION</h3>
                                        <hr class="mb-4 pb-4">
                                        <h3>{{$heading}}</h3>
                                        <form>
                                            @if($showusername)
                                            <div class="form-field">
                                                <input type="text" wire:model="cus_name" placeholder="Name">
                                                @error('cus_name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            @endif
                                            @if($showusermobile)
                                            <div class="form-field">
                                                <input type="text" wire:model="cus_mobile" placeholder="Mobile">
                                                @error('cus_mobile') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            @endif
                                            @if($showuseremail)
                                            <div class="form-field">
                                                <input type="email" wire:model="cus_email" placeholder="Email">
                                                @error('cus_email') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            @endif
                                            @if($showuserpassword)
                                            <div class="form-field">
                                                <input type="password" wire:model="cus_password" placeholder="Password">
                                                @error('cus_password') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            @endif
                                            <div class="form-cp">
                                                @if($showRememberCheck)
                                                <div class="form-field">
                                                    <div class="input-field">
                                                        <input type="checkbox" name="ccc" id="cc1" wire:model="cus_remember_me" value="1">
                                                        <label for="cc1">
                                                            <span></span>
                                                            <small>Remember me</small>
                                                        </label>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($showForGotPasswordLink)
                                                <a wire:click="showForgotPasswordPannel" class="text-dark cursor-pointer" title="">Forgot Password?</a>
                                                @endif
                                            </div><!--form-cp end-->
                                            @if($showSignUpLink)
                                            <a title="" class="text-dark">Create new account? <span wire:click="signUpPannel" class="cursor-pointer">Sign Up</span></a>
                                            @endif
                                            @if($showSignInLink)
                                            <a title="" class="text-dark">Already have an account? <span wire:click="signInPannel" class="cursor-pointer">Sign In</span></a>
                                            @endif
                                            @if($showSignInButton)
                                            <button type="button" class="btn btn-primary" wire:click="doLogin">Sign In</button>
                                            @endif
                                            @if($showSignUpButton)
                                            <button type="button" class="btn btn-primary" wire:click="registerStore">Sign Up Now</button>
                                            @endif
                                            @if($showForGotPasswordButton)
                                            <button type="button" class="btn btn-primary" wire:click="doForgorPassword">Forgot Password</button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif

                            
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>


@push('custom_script')


@endpush