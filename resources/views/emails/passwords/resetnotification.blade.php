@component('mail::message')
# Hello

You're receiving this e-mail because you or someone else has requested a password reset for your user account at .

Click the button below to reset your password:

@component('mail::button', ['color'=> 'green', 'url' => route('api.reset.password',['email'=> $user->email,'token'=>
$token])])
Reset password
@endcomponent

@component('mail::button', ['color'=> 'green', 'url' =>config('app.url')])
Reset password
@endcomponent

If the button doesn't work, click on the link below.
[{{route('api.reset.password',['email'=> $user->email,'token'=> $token])}}]({{route('api.reset.password',['email'=> $user->email,'token'=> $token])}})

Thanks,<br>
{{ config('app.name') }}
@endcomponent
