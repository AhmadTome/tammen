@extends('report.reportLayout')

@section('title','مراسلة')

@section('content')

<h3 class="text-center">
    الموضوع: {{$letter->subject}}
</h3>

<div class="text-right">
    <h4>
        إلى:  {{$letter->destination}}
    </h4>
</div>
<div>
    {!! $letter->msg !!}
</div>

<div class="text-left">
    <h4>
        {{$letter->sender}}
    </h4>
    <h5>
        {{$letter->sign}}
    </h5>
</div>

@endsection