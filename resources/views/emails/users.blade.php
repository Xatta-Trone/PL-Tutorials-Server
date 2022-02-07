@component('mail::message')
### Hello, {{ $user->name }}
Your login details are given below.

@component('mail::panel')
E-mail: {{ $user->email}} <br>
Password: {{ $user->password }}
@endcomponent

@component('mail::button', ['color'=> 'green','url' => env('CLIENT_DOMAIN','https://pl-tutorials.com').'/login'])
Login
@endcomponent

## Please do not share the account with anyone, otherwise the system may ban your account.

If you have any problem or query, then send an email to [pltutorialsbuet@gmail.com](mailto::pltutorialsbuet@gmail.com)
or [contact our page](https://www.facebook.com/thepltutorials).
We are always happy to help you out.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
