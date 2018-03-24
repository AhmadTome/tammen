<html>
<head>
    <title>ادخال مركبة جديدة</title>
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

    <!--Body-->

    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال بيانات مركبة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeCarInformation" >
                        {{ csrf_field() }}
                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم الملف  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="fileNumber" id="fileNumber" type="text"  placeholder="ادخل رقم الملف" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carNumber" id="carNumber" type="text"  placeholder="ادخل رقم المركبة" required/>
                            </div>
                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> استعمال المركبة: </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carused" id="carused" type="text"  placeholder="ادخل استعمال المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  رقم الشصي : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="bodyNumber" id="bodyNumber" type="text"  placeholder="ادخل رقم الشصي" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم المحرك : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="EnginNumber" id="EnginNumber" type="text"  placeholder="ادخل رقم المحرك" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> حجم المحرك : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="Enginsize" id="Enginsize" type="text"  placeholder="ادخل حجم المحرك" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  طراز المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carVersion" id="carVersion" type="text"  placeholder="ادخل طراز المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  رقم طراز المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="NumberCarVersion" id="NumberCarVersion" type="text"  placeholder="ادخل رقم طراز المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  سنة الانتاج : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="producedYear" id="producedYear" type="text"  placeholder="ادخل  سنة الانتاج" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  لون المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carColor" id="carColor" type="text"  placeholder="ادخل لون المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   العداد : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="speedMeter" id="speedMeter" type="text"  placeholder="ادخل  العداد"/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   عدد الركاب : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="passengerNumber" id="passengerNumber" type="text"  placeholder="ادخل عدد الركاب" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  مقاعد بجانب السائق : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="seatsCloseofDriver" id="seatsCloseofDriver" type="text"  placeholder="ادخل  عدد المقاعد بجانب السائق" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  نوع الوقود : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="gasType" id="gasType" type="text"  placeholder="ادخل نوع الوقود" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   قوة التسيير : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="power" id="power" type="text"  placeholder="ادخل قوة التسيير" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   نوع الغيار : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="gearType" id="gearType" type="text"  placeholder="ادخل نوع الغيار" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  وزن المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="weight" id="weight" type="text"  placeholder="ادخل وزن المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   رقم التأمين : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="insuranceNumber" id="insuranceNumber" type="text"  placeholder="ادخل رقم التأمين" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  ابتداء التأمين  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="startInsurance" id="startInsurance" type="date" style="text-align: right" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  انتهاء التأمين  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="endInsurance" id="endInsurance" type="date" style="text-align: right" required />
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  انتهاء ترخيص المركبة  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="endlicense" id="endlicense" type="date" style="text-align: right" required />
                            </div>
                        </div>





                        <div class="form-group  row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" for="Attachments">المرفقات :</label>
                            <div class="col-sm-8 pull-right">
                                <div class="form-group">

                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dynamic_field">
                                                <tr>
                                                    <td><input type="text"  name="name[]" placeholder="ادخل المرفق" class="form-control name_list" /></td>
                                                    <td><button type="button" name="add" id="add" class="btn btn-success">اضافة المزيد</button></td>

                                                </tr>
                                            </table>

                                        </div>

                                </div>
                            </div>


                        </div>





                        <div class="form-group row" dir="">
                            <label class="control-label col-sm-2 pull-right text-left">  ملاحظات : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="CarNote" class="form-control PanelBodyCssInput" rows="5" name="note" id="note" placeholder="ادخل ملاحظات" required></textArea>
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
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ادخل المرفق" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

    });
</script>