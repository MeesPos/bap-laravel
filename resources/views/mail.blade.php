@component('mail::message')
Hallo **{{$name}}**,
Dit is een test email!

Klik hier om te beginnen!
@component('mail::button', ['url' => $link])
Naar je inbox
@endcomponent
Met vriendelijke groet,

Mees Postma
@endcomponent
