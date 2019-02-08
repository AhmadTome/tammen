@extends('report.reportLayout')

@section('title','مراسلة')

@section('content')

    <div dir="ltr">
    <table class="table pull-left" >
        <tr>

            <label>{{$letter->sendNum}}&nbsp;&nbsp;</label>
            <label> :  رقم الصادر</label>
        </tr>
        <br>
        <tr>

            <label>{{$letter->msgDate}}&nbsp;&nbsp;</label>
            <label> :  التاريخ</label>
        </tr>
    </table>
    </div>
<h2 class="text-center">
    الموضوع: {{$letter->subject}}
</h2>

<div class="text-right">
    <h2>
        إلى:   {{$letter->destination}}
    </h2>
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