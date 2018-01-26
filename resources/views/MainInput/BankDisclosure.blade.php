<html>
<head>
    <title>ادخال كشف بنك</title>
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
            <div class="panel-heading text-center PanelHeadingCss">ادخال كشف بنك</div>
            <div class="panel-body PanelBodyCss">

                <div  style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" action="storBankinfo" method="post" >
                        {{ csrf_field() }}
                        <div class="form-group row" dir="rtl">
                            <div class="form-group row col-sm-12 " dir="rtl">

                                <div class="col-sm-2 pull-right text-left">
                                    <select class="form-control carInfo_select" id="carInfo_select">
                                        <option selected disabled="">اختار رقم المركبة</option>
                                        @foreach($carInfo as $car)
                                            <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                                        @endforeach
                                    </select>
                                </div>
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


                            <div class="form-group row col-sm-12 " dir="rtl">

                                <table class="table" dir="rtl" border="1" id="attachtable">
                                    <thead>

                                        <td><label>الرقم</label></td>
                                        <td><label>مرفقات المركبة</label></td>

                                    </thead>
                                    <tbody id="bodytable">

                                    </tbody>

                                </table>

                            </div>
                            <div class="form-group row col-sm-12 " dir="rtl">


                                <label class="control-label col-sm-2 pull-right text-left">ملاحظات :</label>
                                <div class="col-sm-3 pull-right">
                                    <textarea rows="5" class="form-control" type="text" id="carnote" readonly ></textarea>


                                </div>

                            </div>


                            <div class="form-group row col-sm-12 " dir="rtl">


                                <label class="control-label col-sm-2 pull-right text-left">رقم ملف البنك: </label>
                                <div class="col-sm-3 pull-right">
                                    <input class="form-control" type="text" id="bankfilenumber" name="bankfilenumber" required />


                                </div>

                            </div>

                            <div class="form-group col-sm-12 row" dir="rtl">
                                <label class="control-label col-sm-2 pull-right text-left" > رقم الهوية :</label>
                                <div class="col-sm-4 pull-right text-left">
                                    <select class="form-control " id="person_select">
                                        <option selected disabled="">اختار رقم الهوية</option>
                                        @foreach($Id as $item)
                                            <option value="{{$item->name}}">{{$item->id." | ".$item->name." | ".$item->address}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 pull-right text-left">
                                    <input type="text" class="form-control PanelBodyCssInput " id="personName" name="personName" placeholder="الاسم" readonly required>
                                </div>


                            </div>

                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">اسم مالك المركبة: </label>
                            <div class="col-sm-3 pull-right">
                                <input class="form-control" type="text" name="personownercar" id="personownercar"  required/>
                            </div>
                            <label class="control-label col-sm-2 pull-right text-left">رقم هوية المالك: </label>
                            <div class="col-sm-3 pull-right">
                                <input class="form-control" type="text" id="idpersonownercar" name="idpersonownercar" required />
                            </div>
                        </div>


                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">التحديد: </label>
                            <div class="col-sm-2 pull-right">
                                <select class="form-control" type="text" id="limit" name="limit" >
                                    <option>تخمين</option>
                                    <option>فني</option>
                                    <option>تثمين</option>

                                </select>
                            </div>
                            <label class="control-label col-sm-2 pull-right text-left">تاريخ التسجيل: </label>
                            <div class="col-sm-3 pull-right">
                                <input class="form-control" type="date" id="dateregister" name="dateregister" required />
                            </div>
                        </div>
                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">قيمة التخمين: </label>
                            <div class="col-sm-6 pull-right">
                                <select class="form-control " type="text"  id="estimatevalue" name="estimatevalue">
                                    <option selected disabled>اختار قيمة التخمين</option>
                                    @foreach($estimatevalue as $car)
                                        <option value="{{$car->estim_name}}">{{$car->estim_num." | ".$car->estim_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group col-sm-12 row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">ملاحظات البنك: </label>
                            <div class="col-sm-8 pull-right">
                                <textArea class="form-control PanelBodyCssInput" rows="5"  id="banknote" name="banknote" required></textArea>
                            </div>
                        </div>



                            <div class="form-group row col-sm-12" dir="rtl">
                                <label class="control-label col-sm-2 pull-right text-left" for="Attachments">فحص :</label>
                                <div class="col-sm-8 pull-right">
                                    <div class="form-group">

                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dynamic_field">
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="المقدمة" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="سليمة" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="الجانب الايمن" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="سليم" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="الجانب الايسر" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="سليم" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="المؤخرة" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="سليمة" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="الهيئة الامامية" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="جيدة" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="جهاز التعليق" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="جيد" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="المحرك" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="جيد" placeholder="الحالة" class="form-control name_list" /></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text"  name="name[]" value="علبة الغيارات" readonly placeholder="اسم الجزء" class="form-control name_list" /></td>
                                                    <td><input type="text"  name="status[]" value="جيدة" placeholder="الحالة" class="form-control name_list" /></td>
                                                    <td><button type="button" name="add" id="add" class="btn btn-success">اضافة المزيد</button></td>

                                                </tr>


                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        <div class="row ">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center" >
                                <input type="submit" name="submit" id="submit" class="btn btn-success " value="اضافة" />
                            </div>
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

<script>
    $(document).ready(function () {
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
                    $('#carnote').val(data[0].ve_note);



                    var table=document.getElementById("attachtable");

                    var count = $('#attachtable tr').length;

                    for(var i=0;i<count-1;i++)
    document.getElementById("attachtable").deleteRow(1);



                    var s = data[0].attachments;
                    var arr=s.split(',');
                    var count=0;
                    for (var i=1 ; i<arr.length ;i++){
                        var row = table.insertRow(i);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        cell1.innerHTML = ++count;
                        cell2.innerHTML = arr[i];
                    }



                }
            });


        });

        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="اسم الجزء" class="form-control name_list" /></td><td><input type="text" name="status[]" placeholder="الحالة" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });


</script>