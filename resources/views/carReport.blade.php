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
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div >

    @include('report.parts.carFileChooser')
    <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="lang" id="lang" class='form-control'>
                            <option value="AR">اللغة العربية</option>
                            <option value="HR">اللغة العبرية</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        رقم الملف
                    </label>
                </div>
                <div class="clearfix"></div>
                <br>

                </div>
            </div>
        </div>

</div>
<!-- end car info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">
                التقارير
                </h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carInfo')">
                            معاينة تقرير بيانات المركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('fileAccount')">
                            معاينة تقرير حساب فايل / ملف
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('personalFileAccount')">
                            معاينة تقرير حساب ملف / فايل شخصي
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carDestroy')">
                            معاينة تقرير شطب مركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carPrice')">
                            معاينة حساب ثمن المركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carPriceWithRek')">
                            معاينة حساب ثمن المركبة مع حطام
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('licence')">
                            معاينة لدائرة الترخيص
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('initialDamageReport')">
                            معاينة الكشف الأولي
                        </button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- end Body -->
    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('footer');

    </div>
    <!--/footer-->

    <script>
        function goTo(route){
            var type = $("#filenumber").val();
            var lang = $("#lang").val();
            window.open("/report/" + route + "/" + type + "/" + lang);
        }
    $(document).ready(function () {
    });
    </script>   

</div>

</body>
</html>