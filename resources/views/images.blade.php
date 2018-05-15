<html>
<head>
    <title>تقارير المركبة</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />

    <style>
    .select2-selection {

        background-color: #fff;
        border: 0;
        border-radius: 0;
        color: #555555;
        font-size: 14px;

        min-height: 30px;
        text-align: right;
    }



    .select2-selection__arrow {
        margin: 1px;
    }
</style>
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
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">
                <div>
                    @include('report.parts.carFileChooser')
                <div class="clearfix"></div>
                <br>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class='btn btn-primary btn-block' onclick="goTo('carImages')">
                            معاينة صور الحادث
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>

</div>
<!-- end car info -->
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
                $("#fileError").html("قم باختيار ملف");
                return;
            }

            $("#fileError").hide();
            $("#fileError").html("");
            
            window.open("/report/" + route + "/" + type);
            
        }
    $(document).ready(function () {
        $(".select-2").select2();
    });
    </script>   

</div>

</body>
</html>