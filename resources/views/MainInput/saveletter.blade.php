<html>
<head>
    <title>حفظ رسائل للطباعة</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=pr258dvhk93ysoi90l1gq5dtc887f9djj8i9rozctarmfaql"></script>
    <script>tinymce.init({ selector:'.tinymce' });</script>
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

    <!--Body-->
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

    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss"> مراسلة </div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">
                    <form action="saveletter" method="post">
                        {{ csrf_field() }}

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> موضوع الرسالة : </label>
                            <div class="col-sm-5 pull-right text-left">
                                <input class="form-control" type="text" name="subject" placeholder="ادخل الموضوع" required>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> المستقبل :</label>
                            <div class="col-sm-5 pull-right text-left">
                                <input class="form-control" type="text" name="destination" placeholder="ادخل اسم المستقبل" required>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">نص الرسالة :</label>
                            <div class="col-sm-8 pull-right text-left">
           <textarea class="tinymce" name="msg" placeholder="ادخل النص" rows="10" cols="15" required>

           </textarea>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> المرسل :</label>
                            <div class="col-sm-5 pull-right text-left">
                                <input class="form-control" type="text" name="sender" placeholder="ادخل اسم المرسل" required>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> التوقيع :</label>
                            <div class="col-sm-5 pull-right text-left">
                                <input class="form-control" type="text" name="sign" placeholder="ادخل التوقيع" required>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <div class="col-sm-8 pull-right text-left">
                                <button type="submit" class="btn btn-success"> حفظ الرسالة</button>
                            </div>
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