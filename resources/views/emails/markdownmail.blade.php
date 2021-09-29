@component('mail::message')
# Interview Call

Your Interview is placed on April 22,2021.

@component('mail::button', ['url' => ''])
Please Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
