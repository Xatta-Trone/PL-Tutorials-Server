@component('mail::message')
# Hello

You're receiving this e-mail because you or someone else has requested a password reset for your user account at .

Click the button below to reset your password:


@component('mail::button', ['color'=> 'green', 'url'
=>env('ADMIN_DOMAIN')."/auth/reset-password?token={$token}&email={$user->email}"])
Reset password
@endcomponent



If the button doesn't work, click on the link below.


[{{env('ADMIN_DOMAIN')."/auth/reset-password?token={$token}&email={$user->email}"}}]({{env('ADMIN_DOMAIN')."/auth/reset-password?token={$token}&email={$user->email}"}})


If you didn't initiate this request, then you can safely ignor this email.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
