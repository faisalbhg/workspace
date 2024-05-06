<div  wire:ignore.self class="popup" id="sign-popup">
    <h3>Sign In to your Account</h3>
    <div class="popup-form">
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
        <form  wire:submit.prevent="doLogin">
            @if($showuseremail)
            <div class="form-field">
                <input type="email" wire:model="email" placeholder="Email">
                @error('email') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
            </div>
            @endif
            @if($showuserpassword)
            <div class="form-field">
                <input type="password" wire:model="password" placeholder="Password">
                @error('password') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
            </div>
            @endif
            <div class="form-cp">
                @if($showRememberCheck)
                <div class="form-field">
                    <div class="input-field">
                        <input type="checkbox" name="ccc" id="cc1" wire:model="remember_me" value="1">
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
            <a href="#" title="" class="reg-op">Create new account?</a>
            @if($showSignInLink)
            
            @endif
            @if($showSignInButton)
            <button type="button" class="btn btn-primary" wire:click="doLogin">Sign In</button>
            @endif
            @if($showForGotPasswordButton)
            <button type="button" class="btn btn-primary" wire:click="doForgorPassword">Forgot Password</button>
            @endif
        </form>
    </div>
</div><!--popup end-->