@extends('report.reportLayout')

@section('title','شهادة مركبة')

@section('content')

    @include('report.parts.carInfoHeader')
    <br>
    <h3 class='text-center'>
        <b>
            {{_t('degree',$l)}}
        </b>
    </h3>

@endsection