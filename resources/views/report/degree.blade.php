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
    <div class="text-right">
        <p>
            أنا الموقع أدناه (محمد أحمد أسعد بدارنة) حامل التراخيص التالية
        </p>
        @foreach($certificates as $cer)
            {{$cer}}
        @endforeach
        <p>
            أعطي وبناءا على طلبكم تقرير خبير والذي يعتبر شهادة في المحكمة أصرح انه معروف لدى فحوى وتعليمات القانون الجنائي المتعلقة بإعطاء شهادة كاذبة
            أمام المحكمة وهذا التقرير المصدق والمختوم بيدي هو شهادة في المحكمة.
        </p>
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