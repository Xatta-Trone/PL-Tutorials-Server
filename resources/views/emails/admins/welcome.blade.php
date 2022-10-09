@component('mail::message')
## Hello, {{ $user->name }}
Congratulations on becoming a new admin. Your login details are given below.

@component('mail::panel')
E-mail: {{ $user->email}} <br>
Password: {{ $user->password }}
@endcomponent

@component('mail::button', ['url' => config('app.admin_url').'/login'])
Login
@endcomponent

@endcomponent
