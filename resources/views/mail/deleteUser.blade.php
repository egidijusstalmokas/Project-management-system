
@component('mail::message')
# Hello {{ $user->name }}!

<br>Please note that your account was deleted from our sytem.

<br> If you have any questions please contact with system administrator.



Thanks,<br>
{{ config('app.name') }}
@endcomponent
