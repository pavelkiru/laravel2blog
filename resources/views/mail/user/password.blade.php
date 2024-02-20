@component('mail::message')
# Introduction

The body of your message.

You password: {{ $password }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
