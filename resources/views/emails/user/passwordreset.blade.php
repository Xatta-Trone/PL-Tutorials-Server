@component('mail::message')
# Hello, {{$user->name}}#{{$user->student_id}}

You're receiving this e-mail because you or someone else has requested a password reset for your account.

Click the button below to reset your password [expires in {{config('auth.passwords.users.expire')}} minutes]:


@component('mail::button', ['color'=> 'green', 'url'
=>env('CLIENT_DOMAIN')."/reset-password?token={$token}&email={$user->email}"])
Reset password
@endcomponent

@component('mail::panel')
   Reset code for android app: {{$resetCode}}
@endcomponent


If the button doesn't work, click on the link below.


[{{env('CLIENT_DOMAIN')."/reset-password?token={$token}&email={$user->email}"}}]({{env('CLIENT_DOMAIN')."/reset-password?token={$token}&email={$user->email}"}})


If you didn't initiate this request, then you can safely ignor this email.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
