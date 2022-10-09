@component('mail::message')
## Hello, {{ $user->name }}
Your login details are given below.

@component('mail::panel')
E-mail: {{ $user->email}} <br>
Password: {{ $user->password }}
@endcomponent

@component('mail::button', ['color'=> 'green','url' => config('app.client_url').'/login'])
Login
@endcomponent

Please refrain from sharing your account with others. Such activity may lead to permanent account suspension. The website constantly monitors all activities to prevent account sharing. You can see your activities from the Activity tab.


@endcomponent
