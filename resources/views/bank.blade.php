<html>
<head>
    <title>
        كشف بنك
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
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">
                @include('report.parts.carFileChooser')
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="id" id="id" class='form-control'>
                            @foreach($people as $p)
                                <option value="{{$p['id']}}">
                                    {{$p['name']}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        الشخص
                    </label>
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
                <br>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <input type="date" id="Date" name="Date" class="form-control">
                    </div>
                    <label class="control-label col-md-2">
                        التاريخ
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
                        <button class="btn btn-block btn-primary" onclick="goTo('bodyPartChange')">
                            تقرير قطع غيار هيكل
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('mechPartChange')">
                            تقرير قطع غيار ميكانيك
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carWork')">
                            تقرير أعمال مركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carDestroy')">
                            معاينة تقرير شطب مركبة
                        </button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('bodyPartChange')">
                            أضرار فنية لدائرة الترخيص
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('mechPartChange')">
                            تقرير هبوط قيمة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('degree')">
                            شهادة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carDestroy')">
                            معاينة تقرير شطب مركبة
                        </button>
                    </div>
                </div>
            </div>
        </div> 
        <Br>
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
            if(!type){
                $("#fileError").show();
                $("#fileError").html("قم باختيار مركبة");
                return;
            }

            $("#fileError").hide();
            $("#fileError").html("");
            
            var lang = $("#lang").val();
            var car_num = $("#carnumber").val();
            var date = $("#Date").val();
            var id = $("#id").val();
            window.open("/report/" + route + "/" + lang + "?car_num=" + car_num + "&date=" + date + "&id=" + id);
        }
    $(document).ready(function () {
    });
    </script>   

</div>

</body>
</html>