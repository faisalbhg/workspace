@push('custom_css')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<style type="text/css">
    body{
        background: #ffffff;
        background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .wrapper-1{
      width:100%;
      height:100vh;
      display: flex;
    flex-direction: column;
    }
    .wrapper-2{
      padding :30px;
      text-align:center;
    }
    h1{
        /*font-family: 'Kaushan Script', cursive;*/
      font-size:4em;
      letter-spacing:3px;
      color:#000 ;
      margin:0;
      margin-bottom:20px;
    }
    .wrapper-2 p{
      margin:0;
      font-size:1.3em;
      color:#000;
      /*font-family: 'Source Sans Pro', sans-serif;*/
      letter-spacing:1px;
    }
    .go-home{
      color:#fff;
      background:#000;
      border:none;
      padding:10px 50px;
      margin:30px 0;
      border-radius:30px;
      text-transform:capitalize;
      box-shadow: 0 10px 16px 1px rgb(36 36 36);
      font-size: 20px;
    }
    

    @media (min-width:360px){
      h1{
        font-size:3.5em;
      }
      .go-home{
        margin-bottom:20px;
      }
    }

    @media (min-width:600px){
      .content{
      max-width:1000px;
      margin:0 auto;
    }
      .wrapper-1{
      height: initial;
      max-width:620px;
      margin:0 auto;
      margin-top:50px;
      box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
    }
      
    }
    @media (max-width: 768px){
        svg:not(:root) {
             height:auto; 
        }
    }
</style>
@endpush
<section class="page-main-content section-padding">
    <div class=content>
        <div class="wrapper-1">

            <div class="wrapper-2">
                <h1 class="{{config('global.payment.text_class')[$booking_details->payment_status]}}">{{config('global.payment.status_text')[$booking_details->payment_status]}}</h1>
                
                @if($booking_details->payment_status==1)
                    @if($subscription_details->package_category==2)
                        <h2 class="h3 text-danger" >Date: {{ \Carbon\Carbon::parse($subscription_details->meeting_date)->format('dS F Y') }}</h2>
                        <h2 class="h3 text-danger" >{{ \Carbon\Carbon::parse($subscription_details->start_time)->format('H:i A') }} - {{ \Carbon\Carbon::parse($subscription_details->end_time)->format('H:i A') }}</h2>
                    @else
                    <p class="mb-2">
                    Thanks for subscribing We-Work workspace. You will receive confirmation email and SMS, Please Note your Booking refernece number to open the workspace in wework desk
                    </p>
                    @endif
                    
                    </p>
                    <div>
                        <?php
                        $from = [255, 0, 0];
                        $to = [0, 0, 255];
                        ?>
                        {{QrCode::size(250)
                        ->style('dot')
                        ->eye('circle')
                        ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
                        ->margin(1)
                        ->generate(config('global.backend_url').'bookingstatus/'.$booking_number)}}
                    </div>
                    
                    <button class="go-home">#{{$booking_number}}</button>

                    <h2 class="h3 text-dark" >{{$workspace_details->title}}</h2>
                    <p class="h5"><i class="la la-map-marker"></i>{{$workspace_details->locationSpace['title']}}<br>{{$workspace_details->locationSpace['address']}}</p>
                    @if($subscription_details->package_category==3)
                        
                        <h4>
                            <span class="text-success text-left">Starts at: {{ \Carbon\Carbon::parse($subscription_details->booking_starts_date)->format('dS F Y H:i A') }}</span>
                        </h4>
                        <h4>
                            <span class="text-danger text-right">Expire on: {{ \Carbon\Carbon::parse($subscription_details->booking_ends_date)->format('dS F Y H:i A') }}</span>
                        </h4>
                    @endif
                @else
                <p class="mb-2">
                Your booking is not completed, please complete the payment</p>
                <br>
                <a style="float: none" href="{{$payment_redirect_link}}" target="_blank" class="go-home btn btn-link btn-success">Pay Now</a><!--  -->
                @endif
                
            </div>
            
        </div>
    </div>
</section>




@push('custom_script')
<script type="text/javascript">
    window.addEventListener('openNewTabLink',event=>{
        alert({{$payment_redirect_link}});
        window.open('{{$payment_redirect_link}}', '_blank'); 
    });
</script>
@endpush