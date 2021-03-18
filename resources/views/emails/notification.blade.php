@component('mail::message')
# New Article was published

Title : <a href="{{url('article')}}/{{$data->slug}}">{{$data->title}}</a> 


Thank you for using our App ,<br>
{{ config('app.name') }}
@endcomponent
