
@component('mail::message')
# Hello {{ $user->name }}!

<br>We are happy that you using <span style="font-style: italic;"> N-PM</span> system.

<br>You was registred to N-PM system.

<br>If you want to set password to your account please press this button: <a href="{{ env('APP_URL') }}forgot-password"><button style="margin:25px;color:black;background-color:dark-grey;">SET PASSWORD</button></a>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
