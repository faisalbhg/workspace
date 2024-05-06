@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}<br>
# Phone: {{ $phone }}<br>
Subject: {{ $sub }} <br><br>
Message:<br> {{ $mess }}
<br><br>
Thanks,<br>
{{ config('app.name') }}
<br>www.we-work.ae
@endcomponent