<div  wire:ignore.self class="popup" id="businesssolutionrequest-popup">
    <h3>{{$serviceValue}} Request</h3>
    <div class="popup-form">
        <form>
            @if($successEmailResp)
            <h4><span class="text-success"><strong>Success!</strong> thanks for connecting with we work business networking hub , we will contact you soon..!</span></h4>
            @endif

            <div class="form-field">
                {{$serviceValue}}
                <input type="text" name="serviceValue" wire:model="serviceValue" id="serviceValue" >
                @error('serviceValue') <span class="text-danger">{{ $message }}</span> @enderror
            </div><!--form-field end-->

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
                <textarea name="address" placeholder="Address"  wire:model="address"></textarea>
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div><!--form-field end-->
            <div class="form-field">
                <input type="email" name="email" placeholder="Email" id="email" wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div><!--form-field end-->
            <div class="form-field">
                <input type="text" name="phone" placeholder="Phone" wire:model="phone">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div><!--form-field end-->
            <div class="form-field">
                <textarea name="message" placeholder="Message"  wire:model="message"></textarea>
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