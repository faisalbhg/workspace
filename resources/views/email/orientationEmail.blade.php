@component('mail::message')
@component('vendor.mail.header')
@endcomponent
<br>
<p>Dear {{ $name }},</p>
<p>Congratulations and welcome to WeWork Beyond: Endless Business Solutions! We are thrilled to confirm your registration for our upcoming orientation session.</p>
<h2>Event Details:</h2>
@if($attend_status==1)
<p><b><u>ORIENTATION - DAY 1 (Opportunity to Interact, make professional relationships and exchange ideas)</u></b></p>
<p>Date: Tuesday, 5th March 2024</p>
<p>Time: 11:00AM – 12:00PM</p>
<p>Venue: 9th Floor B1 Block We Work Executive Business Center Lounge, Gulf Towers, Oud Metha</p>
<p>Snacks will be available during the event plus a complimentary voucher (worth 20 credits) for wework services to be given for the attendees (each office).</p>
<br>
@endif
@if($attend_status==2)
<p><b><u>ORIENTATION – DAY 2 (VIRTUAL MEETING)</u></b></p>
<p>Date: Wednesday, 6th March 2024</p>
<p>Time: 11:00AM – 12:00PM</p>
<p>Venue: 9th Floor B1 Block We Work Executive Business Center Lounge, Gulf Towers, Oud Metha</p>
<p>Complimentary voucher (worth 20 credits) for wework services to be given for the virtual attendees (each office).</p>
<br>
@endif
# Name: {{ $name }}<br>
# Email: {{ $email }}<br>
# Mobile: {{ $mobile_number }} <br>
# Company: {{ $company_name }} <br>
# Office No: {{ $office_no }} <br>
<br><br>
Thanks,<br>
{{ config('app.name') }}
<br>www.we-work.ae
@endcomponent