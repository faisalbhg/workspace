@component('mail::message')
@component('vendor.mail.tt-header')
@endcomponent
<br><br>
Dear {{ $name }},<br> Thank you for registering for the WeWork Table Tennis Championship! We are thrilled to have you on board for what promises to be an exciting and competitive event.
<br><br>
# Name: {{ $name }}<br>
# Email: {{ $email }}<br>
# Company: {{ $company }}<br>
# Reg Number: {{ $regNum }}<br>
<br><br>
Thanks,<br>
{{ config('app.name') }}
<br>www.we-work.ae
@endcomponent