@extends('layouts.app')

@section('title','تقارير المركبة')

@section('content')

<form method="get" action="/report/insCompanyAcc">
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">
                معلومات شركة التامين
            </div>
            <div class="panel-body PanelBodyCss">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <select name="ins_num" id="ins_num" class="form-control">
                                    @foreach($companies as $c)
                                        <option value="{{$c['ins_name']}}">
                                            {{$c['ins_name']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="control-label col-md-2">
                                شركة التأمين
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <select name="benName" id="benName" class="form-control">
                                    <option value="0">
                                        شركة التأمين
                                    </option>
                                    <option value="1">
                                        مالك المركبة
                                    </option>
                                    <option value="2">
                                        المحكمة
                                    </option>
                                    <option value="3">
                                        البنك
                                    </option>
                                </select>
                            </div>
                            <label class="control-label col-sm-2">إسم المستفيد</label>
                        </div>
                    </div>
                    <!--<div class="col-sm-4">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <select name="toName" id="toName" class="form-control">
                                    @foreach($toNames as $name)
                                        <option>
                                            {{$name->to}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="control-label col-sm-2">
                                لحضرة
                            </label>
                        </div>
                    </div>-->
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-5">
                                <label class="control-label text-center">
                                    لحضرة
                                </label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            @foreach($toNames as $name)
                                <div class="col-sm-2">
                                    <input type="checkbox" name="toName[]" value="{{$name->to}}"> {{$name->to}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="To" id="To" >
                        </div>
                        <label class="control-label col-md-2">إلى</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="From" id="From" >
                        </div>
                        <label class="control-label col-md-2">من</label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="lang" id="lang" class='form-control'>
                            <option value="AR">اللغة العربية</option>
                            <option value="HR">اللغة العبرية</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        اللغة
                    </label>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary btn-block">
                            معاينة التقرير
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </form>

<script>
        function goTo(route,withDate){
            var type = $("#filenumber").val();
            var lang = $("#lang").val();
            if(withDate){
                var To = $("#To").val();
                var From = $("#From").val();
                window.location.href = "/report/" + route + "/" + type + "/" + lang + "?From=" + From + "&To=" + To;
            }else{
                window.location.href = "/report/" + route + "/" + type + "/" + lang;
            }
        }
    $(document).ready(function () {
    });
    </script>
@endsection

{{--
<html>
<head>
    <title>تقارير المركبة</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container-fluid">
    <!-- Background pic -->
    <div class="BackImageSuperAd" ></div>
    <!-- End of Background pic -->

    <!--
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-right" >
                <a href="" class="btn btn-danger exit" title="Exit"><b>Exit</b></a>
            </div>
        </div>
    -->
    <div class="row headrDiv">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
            @include('logodiv');

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('mainpar');

    </div>

    
    <!-- Body -->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
    <form method="get" action="/report/insCompanyAcc">
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">
                معلومات شركة التامين
            </div>
            <div class="panel-body PanelBodyCss">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <select name="ins_num" id="ins_num" class="form-control">
                                    @foreach($companies as $c)
                                        <option value="{{$c['ins_name']}}">
                                            {{$c['ins_name']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="control-label col-md-2">
                                شركة التأمين
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <select name="benName" id="benName" class="form-control">
                                    <option value="0">
                                        شركة التأمين
                                    </option>
                                    <option value="1">
                                        مالك المركبة
                                    </option>
                                    <option value="2">
                                        المحكمة
                                    </option>
                                    <option value="3">
                                        البنك
                                    </option>
                                </select>
                            </div>
                            <label class="control-label col-sm-2">إسم المستفيد</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="To" id="To" >
                        </div>
                        <label class="control-label col-md-2">إلى</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="From" id="From" >
                        </div>
                        <label class="control-label col-md-2">من</label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="lang" id="lang" class='form-control'>
                            <option value="AR">اللغة العربية</option>
                            <option value="HR">اللغة العبرية</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        اللغة
                    </label>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary btn-block">
                            معاينة التقرير
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>

</div>
</form>
<!-- end car info -->
    </div>
    <!-- end Body -->
    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('footer');

    </div>
    <!--/footer-->

    <script>
        function goTo(route,withDate){
            var type = $("#filenumber").val();
            var lang = $("#lang").val();
            if(withDate){
                var To = $("#To").val();
                var From = $("#From").val();
                window.open("/report/" + route + "/" + type + "/" + lang + "?From=" + From + "&To=" + To);
            }else{
                window.open("/report/" + route + "/" + type + "/" + lang);
            }
        }
    $(document).ready(function () {
    });
    </script>   

</div>

</body>
</html>

--}}