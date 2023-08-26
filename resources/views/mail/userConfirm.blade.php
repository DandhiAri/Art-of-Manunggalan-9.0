@component('mail::message')
# Halo, {{ $data['name'] }}

{{ $data['message'] }}

@component('mail::button', ['url' => $data['url']])
{{ $data['button'] }}
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent