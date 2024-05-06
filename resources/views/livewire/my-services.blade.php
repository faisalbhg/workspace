@push('custom_css')
<style type="text/css">
    .qty .count {
        color: #000;
        display: inline-block;
        vertical-align: top;
        font-size: 25px;
        font-weight: 700;
        line-height:10px;
        padding: 0 2px;
        min-width: 35px;
        text-align: center;
    }
    .qty .plus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px;
        font: 30px/1 Arial,sans-serif;
        text-align: center;
        border-radius: 50%;
        }
    .qty .minus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px;
        font: 30px/1 Arial,sans-serif;
        text-align: center;
        line-height: 0.8;
        border-radius: 50%;
        background-clip: padding-box;
    }
    .minus:hover{
        background-color: #717fe0 !important;
    }
    .plus:hover{
        background-color: #717fe0 !important;
    }
    .agent-info {
        border-left: 1px solid #dfe0e5;
    }
</style>
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endpush


<section class="page-main-content section-padding">
    <div class="container">
        <div class="pager-sec-details mb-4">
            <h3 class="text-dark">Services</h3>
            

        </div><!--pager-sec-details end-->
        <div class="agent-profile-sec">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-12 pl-0 pr-0">
                    <div class="row">
                        <div class="col-md-4">
                            @forelse($serviceRequests as $serviceRequest)
                            <div class="card">
                                <div class="card-body">
                                    <h3>{{Config('global.services.types')[$serviceRequest->service_type]}}</h3>
                                    <hr class="mt-0">
                                    <h4>#{{$serviceRequest->service_request_number}}</h4>
                                    <span>{{$serviceRequest->customerDetails['name']}}</span>

                                    <h4 class="mt-4 mb-2 text-danger text-sm">{{Config('global.CURRENCY')}}{{$serviceRequest->grand_total}}</h4>
                                    <ul class="cont-links">
                                        <li><span>
                                            <a href="{{ url('storage/'.$serviceRequest->file)}}" target="_blank"><button class="btn btn-xxs btn-primary"><i class="la la-file"></i>Document</button>
                                            </a>
                                        </span></li>
                                    </ul>

                                </div><!--agent-info end-->
                            </div><!--agent-profile end-->
                            @empty
                            <div class="col-md-12">
                                <h3 class="h5 text-danger text-center">No Subscriptions..!</h3>
                            </div>
                            @endforelse
                            
                        </div>
                    </div>
                    <div class="float-end">{{$serviceRequests->onEachSide(1)->links()}}</div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-12 pr-0">
                    <div class="contact-agent">
                        <h3>Request</h3>
                        <form>
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
                            <div class="form-field">
                                <select wire:model="service_type">
                                    <option>-Select Service-</option>
                                    @foreach(Config('global.services.types') as $STKey => $services_types)
                                        <option value="{{$STKey}}">{{$services_types}}</option>
                                    @endforeach
                                </select>
                                @error('service_type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div><!--form-field end-->
                            <div class="form-field">
                                
                                <div class="qty mt-1">
                                    <span class="minus bg-dark">-</span>
                                    <input type="number" style="width:2%" class="count" name="qty" value="1" wire:model="count">
                                    <span class="plus bg-dark">+</span>
                                </div>
                            </div><!--form-field end-->
                            <div class="form-field">
                                <input type="file" name="document" wire:model="file">
                                @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                            </div><!--form-field end-->
                            <div class="form-field">
                                <textarea name="message" wire:model="message" placeholder="Your Message"></textarea>
                            </div><!--form-field end-->
                            <div class="form-field">
                                <button type="button" wire:click="submitServiceequest" class="btn2">Submit</button>
                            </div><!--form-field end-->
                        </form>
                    </div><!--contact-agent end-->
                </div>
            </div>
        </div><!--agent-profile-sec end-->
    </div>
</section><!--page-main-content end-->


@push('custom_script')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.count').prop('disabled', true);
        $(document).on('click','.plus',function(){
            $('.count').val(parseInt($('.count').val()) + 1 );
                if ($('.count').val() >= 100) {
                    $('.count').val(100); 
        }
        });
        $(document).on('click','.minus',function(){
            $('.count').val(parseInt($('.count').val()) - 1 );
                if ($('.count').val() <= 0) {
                    $('.count').val(1);
                }
            });
    });
</script>
@endpush
