@extends('report.reportLayout')

@section('title','صور الحادث')

@section('content')
    <style>
        .margin-bottom{
            margin-bottom: 10px;
        }
    </style>
    @foreach($images as $img)
        <div class="col-xs-4 margin-bottom">
            <img src="{{$img->path}}" width="100%" height="100%">
        </div>
    @endforeach
    <div class="clearfix"></div>
@endsection