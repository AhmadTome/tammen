@extends('report.reportLayout')

@section('title','صور الحادث')

@section('content')
    <style>
        .margin-bottom{
            margin-bottom: 10px;
        }
        @page {
            size : landscape;
        }
    </style>
    @foreach($groupedImages as $date => $images)
        <div class="text-center padding">
            <h3>
                {{$date}}
            </h3>
        </div>
        <div class="clearfix"></div>
        @foreach($images as $img)
            <div class="col-xs-4 margin-bottom">
                <img src="{{$img->path}}" width="100%" height="100%">
            </div>
        @endforeach
        <div class="clearfix"></div>
        <hr>
        <br>
    @endforeach
    <div class="clearfix"></div>
@endsection