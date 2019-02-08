@extends('report.reportLayout')

@section('title','صور الحادث')

@section('content')
    <style>
        .margin-bottom{
            margin-bottom: 20px;
        }
        @page {
            size : landscape;
        }
    </style>
    @foreach($groupedImages as $date => $images)
        <div class="text-right padding">
            <h3>
                الاسم التجاري : {{$info[0]->model_name}}
            </h3>
            <h3>
                رقم الطراز : {{$info[0]->modelNumber}}

            </h3>
        </div>
        <div class="clearfix"></div>
        @foreach($images as $img)
            <div class="col-xs-4 margin-bottom">
                <img src="{{$img->img_path}}" width="100%" height="100%">
            </div>
        @endforeach
        <div class="clearfix"></div>
        <hr>
        <br>
    @endforeach
    <div class="clearfix"></div>
@endsection