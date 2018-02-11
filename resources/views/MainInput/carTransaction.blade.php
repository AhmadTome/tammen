<html xmlns="">
<head>
    <title>ادخال العمليات على المركبة</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
        @include('mainpar')

    </div>

    <!--Body-->

    <!-- start car info-->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div >

    <div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">

        <div class="col-sm-2 pull-right text-left">
            <select class="form-control carInfo_select" id="carInfo_select">
                <option selected disabled="">اختار رقم المركبة</option>
                @foreach($carInfo as $car)
                    <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                @endforeach
            </select>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carnumber" id="carnumber" placeholder="رقم المركبة" disabled required>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" disabled>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carused" id="carused" placeholder="استعمال المركبة" disabled>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carversion" id="carversion" placeholder="طراز المركبة" disabled>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="producedyear" id="producedyear" placeholder="سنة الانتاج" disabled>
        </div>


    </div>

                </div>
            </div>
        </div>

</div>
    <!-- end car info-->







    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('MainInput.maintinance')

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('MainInput.mechanicpart')

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('MainInput.bodypart')

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('MainInput.accedantImage')

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

      $(document).on("change",".carInfo_select",function () {
        var file_nom=$(this).val();


        $.ajax({

            type:'get',
            url:'{!!URL::to('findCarInfo')!!}',
            data:{'id':file_nom},
            success:function(data) {
                console.log('success');

               console.log(data[0].ve_used);

                console.log(data.length);
                $('#filenumber').val(data[0].file_num);
                $('#carused').val(data[0].ve_used);
                $('#carversion').val(data[0].ve_version);
                $('#producedyear').val(data[0].ve_produce_year);
                $('#carnumber').val(data[0].ve_num);
                $('#carnumberhidden').val(data[0].ve_num);
                $('#filrnumberhidden').val(data[0].file_num);

            }




            });

      });



    });






</script>