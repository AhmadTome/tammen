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
    <Br>
    <div>
        {{$cer->cert}}
    </div>
    <br>
    <br>
    <div>
        <div class="pull-left">
            <i>
                <u>
                    {{_t("sig_stamp",$l)}}
                </u>
            </i>
        </div>
    </div>
    <div class='clearfix'>

    </div>
    <br>
@endsection