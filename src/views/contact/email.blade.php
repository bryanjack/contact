@component('mail::message')
# Introduction

There's new query from: {{$name}}
</br>
Message:
</br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
