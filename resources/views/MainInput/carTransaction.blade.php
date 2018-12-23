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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />

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
                        <select class="form-group-lg carInfo_select" id="carInfo_select" >
                            <option selected disabled="">اختار رقم المركبة</option>
                            @foreach($carInfo as $car)
                                <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                            @endforeach
                        </select>
                    </div>
                    </div>
    <div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">


        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carnumber" id="carnumber" placeholder="رقم المركبة" readonly required>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" readonly>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carused" id="carused" placeholder="استعمال المركبة" readonly>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carversion" id="carversion" placeholder="طراز المركبة" readonly>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="producedyear" id="producedyear" placeholder="سنة الانتاج" readonly>
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
<script>


    $(document).ready(function () {

        $("#carInfo_select,#carMaintinance_select,#carPartMech_select,#carPart_select").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });


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

        $(document).keydown(function (e) {
            if(event.keyCode == "13"){
                if ($("._details").is(":focus")) {
                }
                else {
                    event.preventDefault();
                    return false;
                }
            }
        });

    });






</script>