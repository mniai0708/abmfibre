@component('mail::message')

Bonjour {{$candidature->nom}} {{$candidature->prenom}}

@component('mail::button', ['url' => $url])
Check it
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
