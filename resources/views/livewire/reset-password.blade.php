<section class="about-sec pt">
    <div class="container">
        <div class="about-us-sec">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-info">
                        <h3 class="text-center">Reset Password</h3>

                        <div class="">
  
                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row mb-0 pb-2">
                                  <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                  <div class="col-md-6">
                                      <input type="text" id="email_address" class="form-control" name="email" wire:model="email" required autofocus>
                                      @error('email') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>

                                <div class="form-group row mb-0 pb-2">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                  <div class="col-md-6">
                                      <input type="password" id="password" class="form-control" name="password" wire:model="password" required autofocus>
                                      @error('password') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>

                                <div class="form-group row mb-0 pb-2">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                  <div class="col-md-6">
                                      <input type="password" id="password-confirm" class="form-control"  wire:model="password_confirmation" name="password_confirmation" required autofocus>
                                      @error('password_confirmation') <span class="mb-4 text-danger">{{ $message }}</span> @enderror
                                  </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                  <button type="button" wire:click="resetPasswordSubmit" class="btn btn-primary">
                                      Reset Password
                                  </button>
                                  <div wire:loading wire:target="resetPasswordSubmit">
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

                        