<html>
<head>
    <title>ادخال طراز المركبة </title>
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
            @include('logodiv')

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('mainpar')

    </div>
    <div class="col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

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

    <!--Body-->
    <div class="container">
        @if(session()->has('notif_body'))

            <div class="row">
                <div class="alert alert-success" dir="rtl">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ session('notif_body') }}</strong>

                </div>
            </div>
        @endif
        @yield('content')
    </div>
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال طراز المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">

                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="storcarmodel">
                        {{ csrf_field() }}

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> اسم الموديل : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="car_model" id="car_model" type="text"  placeholder="ادخل اسم الموديل" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">ادراج موديل المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control image" type="file" name="image" id="image" value="اختار صورة المركبة" required/>



                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-success" id="submit" value="إدخال" required>
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
        @include('footer')

    </div>
    <!--/footer-->



</div>

</body>
</html>
<script>
    $(document).ready(function () {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });
    })
</script>
