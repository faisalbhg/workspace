@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}<br>
Subject: {{ $sub }} <br><br>
Message:<br> {{ $mailData['message'] }}
<br><br>
Thanks,<br>
{{ config('app.name') }}
<br>www.we-work.ae
@endcomponent