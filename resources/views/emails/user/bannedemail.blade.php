@component('mail::message')
## Hello, {{$banHistory->user->name}}

You're receiving this e-mail because your account is {{ strtolower($banHistory->reason) }}.

Your account has been restricted upto {{ $banHistory->ban_upto->toDayDateTimeString()}}. You will get back your account after this period.

If you think this has done by mistake, then please send a message to our facebook page explaining the situation.
@endcomponent
