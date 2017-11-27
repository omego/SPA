@component('mail::message')
# Introduction

You have an action plan to be approved.

@component('mail::button', ['url' => '/action_plan'])
View
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
