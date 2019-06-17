@component('mail::message')
# Introduction

Hello All New user {{ $user->name }}has been registered.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
