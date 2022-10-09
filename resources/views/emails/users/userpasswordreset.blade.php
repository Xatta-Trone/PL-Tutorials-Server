@component('mail::message')
## Hello, {{ $user->name }}

You password has been changed by one of our admins. Your new password is given below.

@component('mail::panel')
E-mail: {{ $user->email}} <br>
Password: {{ $user->password }}
@endcomponent

@component('mail::button', ['color'=> 'green','url' => config('app.client_url').'/login'])
Login
@endcomponent

@endcomponent
