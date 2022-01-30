@component('mail::message')
# Hello, {{ $user->name }}

Your password {{ $user->password }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
