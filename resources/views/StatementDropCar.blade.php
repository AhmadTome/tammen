<html>
<head>
    <title>ادخال ضرر</title>
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

    <!--Body-->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال بيان هبوط قيمة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeDropStatment" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="IdStatmentNum" id="IdStatmentNum" placeholder="ادخل رقم الضرر" required>
                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: الرقم</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="text" id="text" placeholder="ادخل النص" required>
                            </div>
                            <label class="control-label col-sm-1" for="damName">: النص</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn-success" id="submit" value="إدخال">
                            </div>
                            <label class="control-label col-sm-7"></label>
                        </div>

                    </form>
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



</div>

</body>
</html>