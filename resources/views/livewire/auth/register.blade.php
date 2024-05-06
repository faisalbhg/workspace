<div  wire:ignore.self class="popup" id="register-popup">
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
        <form wire:submit.prevent="registerStore">
            <div class="form-field">
                <input type="text" wire:model="name" placeholder="Name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-field">
                <input type="text" wire:model="mobile" placeholder="Mobile">
                @error('mobile') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-field">
                <input type="email" wire:model="email" placeholder="Email">
                @error('email') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-field">
                <input type="password" wire:model="password" placeholder="Password">
                @error('password') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
            </div>
            <a href="#" title="" class="signin-op">Have an account?</a>
            <button type="button" class="btn btn-primary" wire:click="registerStore">Sign Up Now</button>
            
        </form>
    </div>
</div><!--popup end-->
