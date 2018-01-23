<html>
<head>
<title>ادخال كراج</title>
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
        <div class="container">
            @if(session()->has('notif'))

                <div class="row">
                    <div class="alert alert-success" dir="rtl">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ session('notif') }}</strong>

                    </div>
                </div>
            @endif
            @yield('content')
        </div>
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال كراج</div>
            <div class="panel-body PanelBodyCss">




                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="store">
                        {{ csrf_field() }}

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garNum">الرقم :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="name" class="form-control PanelBodyCssInput" name="garNum" id="garNum" placeholder="ادخل رقم الكراج" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garName">الاسم :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="garName" id="garName" placeholder="ادخل الاسم" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right">رقم الجوال :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="garphoneNumber" id="garphoneNumber" placeholder="ادخل رقم الجوال" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" > هاتف ارضي :</label>
                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="gartelNumber" id="gartelNumber" placeholder="ادخل رقم الهاتف الارضي" required>
                            </div>

                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" >الايميل :</label>
                            <div class="col-sm-8 pull-right">
                                <input type="text" class="form-control" name="garemail" id="garemail" placeholder="ادخل الايميل" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-success" id="submit" value="إدخال">
                            </div>
                            <label class="control-label col-sm-7"></label>
                        </div>


                    </form>

                </div>


            </div>
        </div>



    </div>

    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
       @include('footer');

    </div>
    <!--/footer-->



</div>

</body>
</html>