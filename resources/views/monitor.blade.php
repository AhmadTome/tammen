@extends('layouts.app')

@section('title','تقرير الرقابة')

@section('content')
<div class="panel panel-default">
            <div class="panel-heading">
                تقرير الرقابة
            </div>
            <div>
            <form action="/report/monitorReport" method="GET">
                <div class="col-sm-6">
                    <label class="contrl-label">من تاريخ: </label>
                    <input type="date" class="form-control" name='From'>
                </div>
                <div class="col-sm-6">
                    <label class="contrl-label">إلى تاريخ: </label>
                    <input type="date" class="form-control" name='To'>
                </div>
                <div class="clearfix"></div>
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
                <Br>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary btn-block">
                            معاينة التقرير
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                </form>
            </div>
        </div>
@endsection

{{--
<html>
<head>
    <title>
        تقرير الرقابة
    </title>
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
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
        <div class="panel panel-default">
            <div class="panel-heading">
                تقرير الرقابة
            </div>
            <div>
            <form action="/report/monitorReport" method="GET">
                <div class="col-sm-6">
                    <label class="contrl-label">من تاريخ: </label>
                    <input type="date" class="form-control" name='From'>
                </div>
                <div class="col-sm-6">
                    <label class="contrl-label">إلى تاريخ: </label>
                    <input type="date" class="form-control" name='To'>
                </div>
                <div class="clearfix"></div>
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
                <Br>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary btn-block">
                            معاينة التقرير
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                </form>
            </div>
        </div>
    </div>
    <!-- end Body -->
    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('footer');

    </div>
    <!--/footer-->
 

</div>

</body>
</html>

--}}