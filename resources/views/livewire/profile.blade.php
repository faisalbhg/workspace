@push('custom_css')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
    body {
    
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #FFF;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
    
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
    display: inherit;
    width: 100%;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
    width: 100%;
    padding: 7px 5px;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #000000;
    color: #89817f !important;

}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #000000;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}
.panel {
    margin-bottom: 20px;
    background-color: #FFF;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0px 2px 6px 0 rgb(217 213 213);
    box-shadow: 0px 2px 6px 0 rgb(217 213 213);
    width: 100%;
    float: left;
}









.contanbody {
    text-transform: uppercase;
    background-color: #f0f1f5;
    color: #37383a;
    float: left;
}

h1 {
    font-size: 40px;
    
    margin-bottom: 20px;
    margin-left: 10px
}


/* start of conatiner*/
.containerbl {
position: relative;
width: 570px;
background-color: #FFF;
border-radius: 8px;
display: inline-block;
float: left;
margin-bottom: 20px
}

.containerbl:first-of-type,
.containerbl:nth-of-type(3) {
margin-right: 29px; 
}

section {
display: inline-block;
vertical-align: middle;
}

p {
color: #a7a7a7  
}
/* end of conatiner*/

/*start of left side*/

.containerbl .left:before {
content: "";
background-color: #f0f1f5;
width: 30px;
height: 30px;
border-radius: 50%;
position: absolute;
top:-15px;
left: 131px
}

.containerbl .left:after {
content: "";
background-color: #f0f1f5;
width: 30px;
height: 30px;
border-radius: 50%;
position: absolute;
bottom:-15px;
left: 131px
}

.containerbl .left {
border-right: 2px dashed #f0f1f5;
padding: 70px 30px;
font-weight: 700;
text-align: center;
letter-spacing: -2px;
width: auto;
position: unset;
}

.containerbl .left p:first-child {
color: #37383a;
font-size: 80px;
padding: 0;
line-height: inherit;
}
.containerbl .left p:last-child {
font-size: 25px;
padding: 0
}

/*end of left side*/

/*start of right side*/
.containerbl .right {
padding: 10px 5px 10px 45px  ;
width: 72%;
}

.containerbl .right h2 {
font-size: 25px;
margin-bottom: 20px;
}
.containerbl:nth-of-type(4) .right h2 {
text-decoration: line-through   
}

.containerbl .right p:nth-of-type(2) {
margin-bottom: 35px;    
}

.containerbl .right p {
letter-spacing: 0px;
font-size: 14px;
font-weight: 600;
width: 70%
}

.containerbl .right p:first-child {
margin: 0px;
font-size: 17px
}

.containerbl .right .calendar:before {
content: "\f073";
font-family: FontAwesome;
position: absolute;
top:100px;
left:50px;
font-size: 40px;
}

.containerbl .right .map-pin:before {
content: "\f041";
font-family: FontAwesome;
position: absolute;
top:180px;
left:50px;
font-size: 35px;
}

.calendar,.map-pin {
margin-left: 55px;  
}

/*end of right side*/
.containerbl .right a {
vertical-align: bottom;
text-decoration: none;
color: #fff;
background-color: #f0f1f5;
padding: 5px 20px;
font-weight: bold;
float: right;
text-align: center;
margin-bottom: -25px;
letter-spacing: -0.5px
}

/*.containerbl:nth-of-type(3) .right a {
background-color: #f00;
}

.containerbl:nth-of-type(4) .right a {
background-color: #00f;
}
*/

</style>
@endpush

    

<section class="contact-sec section-padding">
    

    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="{{ asset('images/user_318-804790.png') }}" alt="">
                        </a>
                        <h1>{{ Session::get('customer')->name }}</h1>
                        <p class="text-dark">{{ Session::get('customer')->email }}</p>
                        <p class="text-dark">{{ Session::get('customer')->mobile }}</p>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                        <li><a class="cursor-pointer" wire:click="subscriptionsClick"> <i class="fa fa-calendar"></i> Subscriptions <span class="label label-warning pull-right r-activity">{{$subscriptions->total()}}</span></a></li>
                        <!-- <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="panel p-3">
                    <div class="panel-body bio-graph-info">
                        <h1>Profile</h1>
                        <div class="form-fieldss float-none">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 pr-0">
                                    <div class="form-field">
                                        <input type="text" name="name" wire:model="name" placeholder="Your Name" id="name">
                                    </div><!-- form-field end-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="phone" wire:model="mobile" placeholder="Your Phone">
                                    </div><!-- form-field end-->
                                </div>
                                <div class="col-lg-12 col-md-12 pl-0">
                                    <button type="submit" class="btn btn-primary submit">Update</button>
                                </div>
                                <div class="col-lg-6 col-md-6 pr-0  mb-4">
                                    <div class="form-field">
                                        <input type="password" name="password" wire:model="password" placeholder="Password">
                                    </div><!-- form-field end-->
                                    <button type="submit" class="btn btn-primary submit">Update Password</button>
                                </div>
                            </div>
                        </div><!--form-fieldss end-->
                    </div>
                </div>
                <div>
                    <div class="panel-body bio-graph-info" id="subscriptionTop">
                        
                        <div class="contanbody p-3">
                            <h1> Subscriptions</h1>
                            @forelse($subscriptions as $subscription)
                            <div class="containerbl">
                                <section class=left>
                                    <p> {{ $subscription->credits-$subscription->credits_used }}</p>
                                    <p> Credits</p>
                                </section>
                                
                                <section class="right" wire:click="openBookingSubscription({{$subscription->id}})">
                                    <p> {{ $subscription->package_name }}</p>
                                    <h2> {{ $subscription->workspaceUnitsDetails['title'] }}</h2>
                                    <p class="calendar"> {{ \Carbon\Carbon::parse($subscription->booking_starts_date)->format('D dS F Y') }} to {{ \Carbon\Carbon::parse($subscription->booking_ends_date)->format('D dS F Y') }} </p> <!-- can be used date  and br can be removed-->
                                    <p class="map-pin"> {{ $subscription->workspaceUnitsDetails['locationSpace']->address }}</p>
                                    @if($subscription->booking_ends_date >= \Carbon\Carbon::now())
                                    <a href=# class="btn-success"> Valied</a>
                                    @else
                                    <a href=# class="btn-danger"> Expired</a>
                                    @endif
                                </section>
                                
                            </div>
                            @empty
                            <div class="col-md-12">
                                <h3 class="h5 text-danger text-center">No Subscriptions..!</h3>
                            </div>
                            @endforelse
                            
                        </div>
                        
                        <div class="float-end">{{$subscriptions->onEachSide(1)->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="bookingInfoModel" tabindex="-1" role="dialog" aria-labelledby="bookingInfoModelLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if($bookingDetails)
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingInfoModelLabel">Booking Number: #{{$bookingDetails->booking_number}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="col-md-12">
                        <?php
                        $from = [255, 0, 0];
                        $to = [0, 0, 255];
                        ?>
                        {{QrCode::size(250)->style('dot')->eye('circle')->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')->margin(1)->generate(config('global.backend_url').'/bookingstatus/'.$bookingDetails->booking_number)}}
                    </div>
                    
                    <h2 class="h3 text-dark" >{{$bookingDetails->workspaceUnitsDetails['title']}}</h2>
                    <p class="h5"><i class="la la-map-marker"></i>{{ $bookingDetails->workspaceUnitsDetails['locationSpace']->address }}</p>
                    <p><span class="text-success text-left">Starts at: {{ \Carbon\Carbon::parse($bookingDetails->booking_starts_date)->format('dS F Y H:i A') }}</span></p>
                    <p><span class="text-danger text-right">Expire on: {{ \Carbon\Carbon::parse($bookingDetails->booking_ends_date)->format('dS F Y H:i A') }}</span></p>
                    <h2 class="h3 text-dark" >{{ $bookingDetails->credits-$bookingDetails->credits_used }} Credits Available (total: {{$bookingDetails->credits}})</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@push('custom_script')
<script type="text/javascript">
    window.addEventListener('openBookingInfoModel',event=>{
        $('#bookingInfoModel').modal('show');
    });
</script>
@endpush


