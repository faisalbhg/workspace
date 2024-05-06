@push('custom_css')

<style type="text/css">
    .payment-title {
        width: 100%;
        text-align: center;
    }
    .payment-title h3{
        font-size: 1.5rem !important;
        text-transform: uppercase;
    }

    .form-container .field-container:first-of-type {
        grid-area: name;
    }

    .form-container .field-container:nth-of-type(2) {
        grid-area: number;
    }

    .form-container .field-container:nth-of-type(3) {
        grid-area: expiration;
    }

    .form-container .field-container:nth-of-type(4) {
        grid-area: security;
    }

    .field-container input {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .field-container {
        position: relative;
    }

    .form-container {
        display: grid;
        grid-column-gap: 10px;
        grid-template-columns: auto auto;
        grid-template-rows: 90px 90px 90px;
        grid-template-areas: "name name""number number""expiration security";
        /*max-width: 400px;*/
        padding: 20px 20px 0 0;
        color: #707070;
    }

    label {
        padding-bottom: 5px;
        font-size: 13px;
    }

    input {
        margin-top: 3px;
        padding: 5px;
        font-size: 16px;
        width: 100%;
        border-radius: 3px;
        border: 1px solid #dcdcdc;
    }

    .ccicon {
        height: 38px;
        position: absolute;
        right: 6px;
        top: calc(50% - 17px);
        width: 60px;
    }

    /* CREDIT CARD IMAGE STYLING */
    .preload * {
        -webkit-transition: none !important;
        -moz-transition: none !important;
        -ms-transition: none !important;
        -o-transition: none !important;
    }

    .containerpayment {
        width: 100%;
        /*max-width: 400px;*/
        max-height: 251px;
        height: 54vw;
        padding: 20px;
    }


    
    #ccsingle {
        position: absolute;
        right: 15px;
        top: 20px;
    }

    #ccsingle svg {
        width: 100px;
        max-height: 60px;
    }

    .creditcard svg#cardfront,
    .creditcard svg#cardback {
        width: 100%;
        -webkit-box-shadow: 1px 5px 6px 0px black;
        box-shadow: 1px 5px 6px 0px black;
        border-radius: 22px;
    }

    #generatecard{
        cursor: pointer;
        float: right;
        font-size: 12px;
        color: #fff;
        padding: 2px 4px;
        background-color: #909090;
        border-radius: 4px;
        cursor: pointer;
        float:right;
    }

    /* CHANGEABLE CARD ELEMENTS */
    .creditcard .lightcolor,
    .creditcard .darkcolor {
        -webkit-transition: fill .5s;
        transition: fill .5s;
    }

    .creditcard .lightblue {
        fill: #03A9F4;
    }

    .creditcard .lightbluedark {
        fill: #0288D1;
    }

    .creditcard .red {
        fill: #ef5350;
    }

    .creditcard .reddark {
        fill: #d32f2f;
    }

    .creditcard .purple {
        fill: #ab47bc;
    }

    .creditcard .purpledark {
        fill: #7b1fa2;
    }

    .creditcard .cyan {
        fill: #26c6da;
    }

    .creditcard .cyandark {
        fill: #0097a7;
    }

    .creditcard .green {
        fill: #66bb6a;
    }

    .creditcard .greendark {
        fill: #388e3c;
    }

    .creditcard .lime {
        fill: #d4e157;
    }

    .creditcard .limedark {
        fill: #afb42b;
    }

    .creditcard .yellow {
        fill: #ffeb3b;
    }

    .creditcard .yellowdark {
        fill: #f9a825;
    }

    .creditcard .orange {
        fill: #ff9800;
    }

    .creditcard .orangedark {
        fill: #ef6c00;
    }

    .creditcard .grey {
        fill: #bdbdbd;
    }

    .creditcard .greydark {
        fill: #616161;
    }

    /* FRONT OF CARD */
    #svgname {
        text-transform: uppercase;
    }

    #cardfront .st2 {
        fill: #FFFFFF;
    }

    #cardfront .st3 {
        font-family: 'Source Code Pro', monospace;
        font-weight: 600;
    }

    #cardfront .st4 {
        font-size: 54.7817px;
    }

    #cardfront .st5 {
        font-family: 'Source Code Pro', monospace;
        font-weight: 400;
    }

    #cardfront .st6 {
        font-size: 33.1112px;
    }

    #cardfront .st7 {
        opacity: 0.6;
        fill: #FFFFFF;
    }

    #cardfront .st8 {
        font-size: 24px;
    }

    #cardfront .st9 {
        font-size: 36.5498px;
    }

    #cardfront .st10 {
        font-family: 'Source Code Pro', monospace;
        font-weight: 300;
    }

    #cardfront .st11 {
        font-size: 16.1716px;
    }

    #cardfront .st12 {
        fill: #4C4C4C;
    }

    /* BACK OF CARD */
    #cardback .st0 {
        fill: none;
        stroke: #0F0F0F;
        stroke-miterlimit: 10;
    }

    #cardback .st2 {
        fill: #111111;
    }

    #cardback .st3 {
        fill: #F2F2F2;
    }

    #cardback .st4 {
        fill: #D8D2DB;
    }

    #cardback .st5 {
        fill: #C4C4C4;
    }

    #cardback .st6 {
        font-family: 'Source Code Pro', monospace;
        font-weight: 400;
    }

    #cardback .st7 {
        font-size: 27px;
    }

    #cardback .st8 {
        opacity: 0.6;
    }

    #cardback .st9 {
        fill: #FFFFFF;
    }

    #cardback .st10 {
        font-size: 24px;
    }

    #cardback .st11 {
        fill: #EAEAEA;
    }

    #cardback .st12 {
        font-family: 'Rock Salt', cursive;
    }

    #cardback .st13 {
        font-size: 37.769px;
    }

    /* FLIP ANIMATION */
    .containerpayment {
        perspective: 1000px;
    }

    .creditcard {
        width: 100%;
        max-width: 400px;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        transition: -webkit-transform 0.6s;
        -webkit-transition: -webkit-transform 0.6s;
        transition: transform 0.6s;
        transition: transform 0.6s, -webkit-transform 0.6s;
        cursor: pointer;
    }

    .creditcard .front,
    .creditcard .back {
        position: absolute;
        width: 100%;
        max-width: 400px;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-font-smoothing: antialiased;
        color: #47525d;
    }

    .creditcard .back {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .creditcard.flipped {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }









.box-right {
    padding: 30px 25px;
    background-color: #f9f9f9;
    border-radius: 15px;
}

.box-left {
    padding: 20px 20px;
    background-color: #f9f9f9;
    border-radius: 15px;
}

.h7 {
    font-size: 15px
}

.h8 {
    font-size: 12px
}

.h9 {
    font-size: 10px
}

.bg-blue {
    background-color: #dfe9fc9c;
    border-radius: 5px
}

.form-control {
    box-shadow: none !important
}

.card input::placeholder {
    font-size: 14px
}

::placeholder {
    font-size: 14px
}

input.card {
    position: relative
}

.far.fa-credit-card {
    position: absolute;
    top: 10px;
    padding: 0 15px
}

.fas,
.far {
    cursor: pointer
}

.cursor {
    cursor: pointer
}

.btn.btn-primary {
    box-shadow: none;
    height: 40px;
    padding: 11px
}

.bg.btn.btn-primary {
    background-color: transparent;
    border: none;
    color: #1976d2
}

.bg.btn.btn-primary:hover {
    color: #539ee9
}

@media(max-width:320px) {
    .h8 {
        font-size: 11px
    }

    .h7 {
        font-size: 13px
    }

    ::placeholder {
        font-size: 10px
    }
}

.border-danger{
    border:1px solid red;
}
</style>
@endpush
<section class="page-main-content section-padding">

    <div class="container">
        <div class="agent-profile-sec">

            
            
        </div><!--agent-profile-sec end-->
    </div>
    
    <div class="container">
        <div class="row m-0">
            
            <div class="payment-title mb-4">
                <h3>MEETING ROOM BOOKING</h3>
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
                                        <h3>{{$heading}}</h3>
                                        <form>
                                            @if($showusername)
                                            <div class="form-field">
                                                <input type="text" wire:model="name" placeholder="Name">
                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            @endif
                                            @if($showusermobile)
                                            <div class="form-field">
                                                <input type="text" wire:model="mobile" placeholder="Mobile">
                                                @error('mobile') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            @endif
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