@component('mail::message')
# New Article was published

Title : {{$data->title}}


Thank you for using our App ,<br>
{{ config('app.name') }}
@endcomponent
