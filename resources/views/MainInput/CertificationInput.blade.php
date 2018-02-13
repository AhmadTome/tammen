<html>
<head>
    <title>ادخال كشف شهادة</title>
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

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('mainpar')

    </div>

    <!--Body-->


    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال شهادة للتقرير</div>
            <div class="panel-body PanelBodyCss">

                <div  style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeCertification">
                        {{ csrf_field() }}

                        <div class="form-group row col-sm-12 " dir="rtl">

                            <div class="col-sm-2 pull-right text-left">
                                <select class="form-group-lg carInfo_select" id="carInfo_select">
                                    <option selected disabled="">اختار رقم المركبة</option>
                                    @foreach($carInfo as $car)
                                        <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-sm-12 " dir="rtl">


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
                        <div class="form-group row col-sm-12 " dir="rtl">
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="insuranceEnd" id="insuranceEnd" placeholder="انتهاء التأمين" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="licenseEnd" id="licenseEnd" placeholder="انتهاء الترخيص" readonly>
                            </div>
                        </div>





                        <div class="form-group col-sm-12 row" dir="rtl">


                              <label class="control-label col-sm-2 pull-right text-right" style="width: 50px">التحديد: </label>
                            <div class="col-sm-3 pull-right">
                                <select class="form-control" type="date" id="limit" name="limit" >
                                    <option>تخمين</option>
                                    <option>فني</option>
                                    <option>تثمين</option>

                                </select>
                            </div>
                            <label class="control-label col-sm-2 pull-right " >تاريخ التسجيل: </label>
                            <div class=" pull-right col-sm-3">
                                <input class="form-control" type="date" id="date" name="date" required/>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <div class="col-sm-2 pull-right text-left">
                                <select class="form-group-lg carInfo_select" id="estimater_select" name="estimater_select">
                                    <option selected disabled="">اختار المخمن</option>
                                    @foreach($estimater as $car)
                                        <option value="{{$car->nes_authorization_num}}">{{$car->nes_num." | ".$car->nes_name." | ".$car->nes_authorization_num." | ".$car->nes_signature}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-sm-12 row" dir="rtl">

                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="estimatername" id="estimatername" placeholder="الاسم" readonly required>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="estimaternumber" id="estimaternumber" placeholder="رقم التفويض" readonly>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="signiture" id="signiture" placeholder="التوقيع" readonly>
                        </div>

                </div>



                        <div class="form-group" dir="rtl">
                            <label class="control-label col-sm-1 pull-right text-right">الشهادة: </label>
                            <div class="col-sm-9 pull-right">
                                <select class="form-control" type="date" id="cert_select" >
                                    <option selected disabled="">اختار الشهادة</option>
                                    @foreach($certificate as $car)
                                        <option value="{{$car->cer_text}}">{{$car->cer_text}}</option>

                                    @endforeach

                                </select>
                            </div>

                        </div>




                        <div class="form-group col-sm-12 row" dir="rtl">
                            <div class="col-sm-12 pull-right">
                                <textArea class="form-control PanelBodyCssInput"  rows="5"  id="cert" name="cert" placeholder="الشهادة"></textArea>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-1 pull-right text-right">ملاحظات: </label>
                            <div class="col-sm-9 pull-right">
                                <textArea class="form-control PanelBodyCssInput" type="note" rows="5"  id="note" name="note"></textArea>
                            </div>
                        </div>
                        <div class="row " >
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center" >
                                <input type="submit" name="submit" id="submit" class="btn btn-success " value="اضافة" />
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
        @include('footer');

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
        $("#carInfo_select,#estimater_select,#cert_select").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });

        $(document).on("change","#person_select",function () {
            var data = $(this).val();
            $('#personName').val(data);
        });
        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();


            $.ajax({

                type:'get',
                url:'{!!URL::to('findCarInfo')!!}',
                data:{'id':file_nom},
                success:function(data) {
                    console.log(data);

                    console.log(data[0].ve_used);

                    console.log(data.length);
                    $('#filenumber').val(data[0].file_num);
                    $('#carused').val(data[0].ve_used);
                    $('#carversion').val(data[0].ve_version);
                    $('#producedyear').val(data[0].ve_produce_year);
                    $('#carnumber').val(data[0].ve_num);
                    $('#carnumberhidden').val(data[0].ve_num);
                    $('#filrnumberhidden').val(data[0].file_num);
                    $('#insuranceEnd').val(data[0].ve_insurence_end_date);
                    $('#licenseEnd').val(data[0].ve_license_end_date);



                }
            });


        });


        $(document).on("change","#estimater_select",function () {
   var estimatername =$(this).val();


            $.ajax({

                type:'get',
                url:'{!!URL::to('findEstimaterinfo')!!}',
                data:{'id':estimatername},
                success:function(data) {

                    $('#estimatername').val(data[0].nes_name);
                    $('#estimaternumber').val(data[0].nes_authorization_num);
                    $('#signiture').val(data[0].nes_signature);




                }
            });


        });

        $(document).on("change","#cert_select",function () {
            $('#cert').val($(this).val());


        });

    });


</script>