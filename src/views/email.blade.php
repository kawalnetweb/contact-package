@component('mail::message')
# Contact Us Mail

Enquiry send by {{ $name ?? 'Guest' }}
<br>
Message : {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
