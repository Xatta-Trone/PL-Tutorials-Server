@component('mail::layout')
{{-- Header --}}
@slot('header')

@component('mail::header', ['url' => config('app.client_url')])
<img src="{{ config('app.url').'/images/logo.png' }}"
     alt="{{ config('app.name') }}"
     width="90px"
     style="margin-bottom: 5px;"
     /><br>
{{ config('app.name') }}

@endcomponent

@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

If you have any problem or query, then send an email to [pltutorialsbuet@gmail.com](mailto::pltutorialsbuet@gmail.com)
or [contact our page](https://www.facebook.com/thepltutorials).
We are always happy to help you out.

Thanks,<br>
{{ config('app.name') }}

----
## Get the android app

| Click on the link   |      Or scan the QR code     |
|:----------:|:-------------:|
| <a href="https://play.google.com/store/apps/details?id=com.pltutorials.plandroid" rel="Get the android app" target="_blank" title="Get the android app"><img src="{{ config('app.url').'/images/googleplay.png'  }}" alt="https://play.google.com/store/apps/details?id=com.pltutorials.plandroid" width="250px" title="Get the android app" style="margin-bottom: 5px;" /></a> |  ![Bilby Stampede](https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://play.google.com/store/apps/details?id=com.pltutorials.plandroid) |



{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
