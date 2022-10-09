@component('mail::message')
## Hello, {{ $contact->name }}
You have an update form your query.


{!! $response->body !!}

----
@endcomponent
