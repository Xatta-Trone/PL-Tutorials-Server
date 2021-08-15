@component('mail::message')
# Hello, {{ $user->name }}

The body of your message. {{ $user->password }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
