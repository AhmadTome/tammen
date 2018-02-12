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
    });
    </script>   

</div>

</body>
</html>