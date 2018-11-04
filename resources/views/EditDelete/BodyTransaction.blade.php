<html xmlns="">
<head>
    <title>استعلام على غيار هيكل</title>
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


    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 pull-left" >

        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">تعديل واستعلام غيار هيكل</div>
            <div class="panel-body PanelBodyCss">

                <div >



                    <form class="form-group" method="post" action="EditBodywork">
                        {{ csrf_field() }}
                        <div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">

                            <div class="col-sm-2 pull-right text-left">
                                <select class="form-group-lg carInfo_select" id="carInfo_select">
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
                                <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" readonly required>
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

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" >  تحديد :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <select class="form-control " id="limitBody_select">
                                    <option selected disabled="">اختار التحديد</option>
                                    <option>تخمين</option>
                                    <option>فني</option>
                                    <option>تثمين</option>
                                </select>
                            </div>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="limitBody" placeholder="">
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" >  القطعة/ أجزاء المركبة :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <select class="form-control " id="carPart_select">
                                    <option selected disabled="">اختار القطعة</option>

                                    @foreach($Bodyinfo as $item)
                                        <option value="{{$item->body_name}}">{{$item->body_num." |  ".$item->body_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="carPart" placeholder="">
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  رقم القطعة الصناعي : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="IDPARTCAR" type="text"  placeholder="ادخل  رقم القطعة الصناعي"/>
                            </div>
                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" >  نوع القطعة :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <select class="form-control " id="carType_select">
                                    <option selected disabled="">اختار نوع القطعة</option>
                                    <option>مستعمل</option>
                                    <option>جديد اصلي</option>
                                    <option>بديل</option>
                                </select>
                            </div>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="carType" placeholder="">
                            </div>


                        </div>



                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">    سعر القطعة للهيكل : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="BodyPartPrice" type="number"  placeholder="ادخل  سعر القطعة للهيكل"/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">    العدد الهيكل : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="countBody" type="number"  placeholder="ادخل  عدد الهيكل"/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> الضريبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="BodyPercantige" type="text"  placeholder="ادخل  الضريبة"/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> نسبة الاستهلاك الهيكل  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="BodyPercantigeUse" type="text"  placeholder="ادخل  نسبة الاستهلاك الهيكل"/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> تاريخ التسجيل : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="BodyDate" type="date" style="text-align: right;" />
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  ملاحظات : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="Bodynote" class="form-control PanelBodyCssInput" rows="5" id="note" placeholder="ادخل ملاحظات"></textArea>
                            </div>
                        </div>

                        <button type="button" onclick="addBodyRow()" name="add" id="add" class="btn btn-success pull-left" style="margin-bottom: 10px"> اضافة المزيد على الجدول</button>

                        <div class="table-responsive col-sm-12 row" dir="rtl">
                            <table class="table " border="1" align="right" name="Bodytable[]" id="BodyPartTable">
                                <thead>
                                <tr>

                                    <th>رقم المركبة  </th>
                                    <th>رقم الملف</th>
                                    <th>تحديد</th>
                                    <th>تحديد</th>
                                    <th>القطعة/اجزاء المركبة</th>
                                    <th>القطعة/اجزاء المركبة</th>
                                    <th>رقم القطعة الصناعي</th>
                                    <th> رقم القطعة</th>
                                    <th> نوع القطعة</th>
                                    <th>سعر القطعة الهيكل</th>
                                    <th>العدد الهيكل</th>
                                    <th>النسبة</th>
                                    <th>نسبة الاستهلاك الهيكل</th>
                                    <th>تاريخ التسجيل</th>
                                    <th>ملاحظات</th>


                                </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>

                        </div>

                        <div class="form-group row col-sm-12 ">

                            <div class="col-sm-4 pull-right">
                                <button type="submit" class="btn btn-primary"  id="Edit">تعديل</button>
                            </div>

                            <div class="col-sm-3 pull-right">
                                <button type="button" class="btn btn-danger delete-modal"  id="Delete">حذف</button>

                            </div>

                        </div>

                        <!-- Start Model -->

                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body" >


                                        <div class="deleteContent" dir="rtl">
                                            هل أنت متأكد من أنك تريد حذف قطع غيار هيكل للمركبة الخاصة بملف  <span class="dname"></span> ؟
                                            <span class="hidden did"></span>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn actionBtn" data-dismiss="modal">
                                                <span id="footer_action_button" > </span>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                <span></span> Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model -->

                    </form>
                </div>
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
    var Maintinanceindex=0;

    function addBodyRow() {
        //declare variable and get data filled

        var x = document.getElementById("limitBody_select").selectedIndex;
        var y = document.getElementById("limitBody_select").options;
        var limitno=y[x].text;
        var limit = document.getElementById("limitBody").value;

        var x2 = document.getElementById("carPart_select").selectedIndex;
        var y2 = document.getElementById("carPart_select").options;
        var carpartno=y2[x2].text;
        var carpart = document.getElementById("carPart").value;

        var partcode = document.getElementById("IDPARTCAR").value;

        var x3 = document.getElementById("carType_select").selectedIndex;
        var y3 = document.getElementById("carType_select").options;
        var parttypeno=y3[x3].text;
        var parttype = document.getElementById("carType").value;

        var price = document.getElementById("BodyPartPrice").value;
        var count = document.getElementById("countBody").value;
        var percentage = document.getElementById("BodyPercantige").value;
        var percentageused = document.getElementById("BodyPercantigeUse").value;
        var date = document.getElementById("BodyDate").value;
        var note = document.getElementById("note").value;
        var carnumber=document.getElementById("carnumber").value;
        var fileNumber=document.getElementById("filenumber").value;


        var table=document.getElementsByTagName("table")[0];

        var tablerow=table.insertRow(1);



        var cell1=tablerow.insertCell(0);
        var cellfile=tablerow.insertCell(1);
        var cell2=tablerow.insertCell(2);
        var cell3=tablerow.insertCell(3);
        var cell4=tablerow.insertCell(4);
        var cell5=tablerow.insertCell(5);
        var cell6=tablerow.insertCell(6);
        var cell7=tablerow.insertCell(7);
        var cell8=tablerow.insertCell(8);
        var cell9=tablerow.insertCell(9);
        var cell10=tablerow.insertCell(10);
        var cell11=tablerow.insertCell(11);
        var cell12=tablerow.insertCell(12);
        var cell13=tablerow.insertCell(13);
        var cell14=tablerow.insertCell(14);
        var cell15=tablerow.insertCell(15);


        cell1.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][carnumber]" value="' + carnumber + '" />'+carnumber+'</td>' ;
        cellfile.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][fileNumber]" value="' + fileNumber + '" />'+fileNumber+'</td>';
        cell2.innerHTML= '<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][limitno]" value="' + limitno + '" />'+limitno+'</td>';
        cell3.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][limit]" value="' + limit + '" />'+limit+'</td>' ;
        cell4.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][carpartno]" value="' + carpartno + '" />'+carpartno+'</td>' ;
        cell5.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][carpart]" value="' + carpart + '" />'+carpart+'</td>' ;
        cell6.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][partcode]" value="' + partcode + '" />'+partcode+'</td>' ;
        cell7.innerHTML= '<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][parttypeno]" value="' + parttypeno + '" />'+parttypeno+'</td>';
        cell8.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][parttype]" value="' + parttype + '" />'+parttype+'</td>' ;
        cell9.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][price]" value="' + price + '" />'+price+'</td>';

        cell10.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][count]" value="' + count + '" />'+count+'</td>' ;
        cell11.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][percentage]" value="' + percentage + '" />'+percentage+'</td>' ;
        cell12.innerHTML= '<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][percentageused]" value="' + percentageused + '" />'+percentageused+'</td>';
        cell13.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][date]" value="' + date + '" />'+date+'</td>' ;
        cell14.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][note]" value="' + note + '" />'+note+'</td>';
        cell15.innerHTML='<input type="button" class="btn-danger" value="X" id="remCF" />';
        Maintinanceindex++;
    }

    $(document).ready(function () {

        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });

        $("#carInfo_select,#carPart_select").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });

        var ID;
        $(document).on('click', '.delete-modal', function() {

            $('#footer_action_button').text(" Delete");
            // $('#footer_action_button').removeClass('glyphicon-check');
            //$('#footer_action_button').addClass('glyphicon-trash');
            // $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Delete');
            $('.EditContent').hide();
            $('.did').text($('#name'));
            $('.deleteContent').show();
            $('.dname').html(ID);
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deleteBodywork')!!}',
                data: {
                    'id':ID
                },
                success: function(data) {
                    location.reload();
                },
                error:function (data) {
                    console.log('error')
                }

            });
        });
        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();

            ID=$(this).val();

            $.ajax({

                type:'get',
                url:'{!!URL::to('getallbodyworkdata')!!}',
                data:{'id':file_nom},
                success:function(data) {

                    $('#filenumber').val(data.data[0].file_num);
                    $('#carused').val(data.data[0].ve_used);
                    $('#carversion').val(data.data[0].ve_version);
                    $('#producedyear').val(data.data[0].ve_produce_year);
                    $('#carnumber').val(data.data[0].ve_num);
                    $('#carnumberhidden').val(data.data[0].ve_num);
                    $('#filrnumberhidden').val(data.data[0].file_num);
                  //  console.log(data.data2)
                    if(data.data2.length > 0){
                        var table=document.getElementsByTagName("table")[0];
                        var count = $('#BodyPartTable tr').length;
                        for(var k=0;k<count-1;k++)
                            document.getElementById("BodyPartTable").deleteRow(1);
                        for(var g=0;g<data.data2.length;g++){

                            var tablerow=table.insertRow(1);



                            var cell1=tablerow.insertCell(0);
                            var cellfile=tablerow.insertCell(1);
                            var cell2=tablerow.insertCell(2);
                            var cell3=tablerow.insertCell(3);
                            var cell4=tablerow.insertCell(4);
                            var cell5=tablerow.insertCell(5);
                            var cell6=tablerow.insertCell(6);
                            var cell7=tablerow.insertCell(7);
                            var cell8=tablerow.insertCell(8);
                            var cell9=tablerow.insertCell(9);
                            var cell10=tablerow.insertCell(10);
                            var cell11=tablerow.insertCell(11);
                            var cell12=tablerow.insertCell(12);
                            var cell13=tablerow.insertCell(13);
                            var cell14=tablerow.insertCell(14);
                            var cell15=tablerow.insertCell(15);


                            cell1.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][carnumber]" value="' + data.data2[g].bo_vehicle_num + '" />'+ data.data2[g].bo_vehicle_num +'</td>' ;
                            cellfile.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][fileNumber]" value="' + data.data2[g].file_number + '" />'+data.data2[g].file_number+'</td>';
                            cell2.innerHTML= '<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][limitno]" value="' + data.data2[g].bo_limit_num + '" />'+data.data2[g].bo_limit_num+'</td>';
                            cell3.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][limit]" value="' + data.data2[g].bo_limit_name + '" />'+data.data2[g].bo_limit_name+'</td>' ;
                            cell4.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][carpartno]" value="' + data.data2[g].bo_part_num + '" />'+data.data2[g].bo_part_num+'</td>' ;
                            cell5.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][carpart]" value="' + data.data2[g].bo_part_name + '" />'+data.data2[g].bo_part_name+'</td>' ;
                            cell6.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][partcode]" value="' + data.data2[g].bo_part_produce_num + '" />'+data.data2[g].bo_part_produce_num+'</td>' ;
                            cell7.innerHTML= '<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][parttypeno]" value="' + data.data2[g].bo_part_type + '" />'+data.data2[g].bo_part_type+'</td>';
                            cell8.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][parttype]" value="' + data.data2[g].bo_part_typename + '" />'+data.data2[g].bo_part_typename+'</td>' ;
                            cell9.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][price]" value="' + data.data2[g].partPrice + '" />'+data.data2[g].partPrice+'</td>';

                            cell10.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][count]" value="' + data.data2[g].bo_bod_count + '" />'+data.data2[g].bo_bod_count+'</td>' ;
                            cell11.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][percentage]" value="' + data.data2[g].bo_rate + '" />'+data.data2[g].bo_rate+'</td>' ;
                            cell12.innerHTML= '<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][percentageused]" value="' + data.data2[g].bo_consump_mech_rate + '" />'+data.data2[g].bo_consump_mech_rate+'</td>';
                            cell13.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][date]" value="' + data.data2[g].bo_date + '" />'+data.data2[g].bo_date+'</td>' ;
                            cell14.innerHTML='<td><input type="hidden" name="Bodytable['+ Maintinanceindex +'][note]" value="' + data.data2[g].bo_note + '" />'+data.data2[g].bo_note+'</td>';
                            cell15.innerHTML='<input type="button" class="btn-danger" value="X" id="remCF" />';
                            Maintinanceindex++;





                        }




                    }else{
                        var table=document.getElementsByTagName("table")[0];
                        var count = $('#BodyPartTable tr').length;
                        for(var k=0;k<count-1;k++)
                            document.getElementById("BodyPartTable").deleteRow(1);

                    }

                }




            });

        });


        $(this).on("change","#limitBody_select",function () {
            var limit=$("#limitBody_select").val();
            $('#limitBody').val(limit);

        });

        $(this).on("change","#carPart_select",function () {
            var MechPart=$("#carPart_select").val();
            $('#carPart').val(MechPart);

        });
        $(this).on("change","#carType_select",function () {
            var partType=$("#carType_select").val();
            $('#carType').val(partType);

        });

        $("#BodyPartTable").on('click','#remCF',function(){
            $(this).parent().parent().remove();
        });




    });



    $('input[id="BodyPercantige" ]').keyup(function(e) {
        var num = $(this).val();
        if (e.which!=8) {
            num = sortNumber(num);
            if(isNaN(num)||num<0 ||num>100) {
                alert("ادخل رقم فقط من 0 - 100");
                $(this).val(sortNumber(num.substr(0,num.length-1)) + "%");
            }
            else
                $(this).val(sortNumber(num)+"%");
        }
        else {
            if(num < 2)
                $(this).val("");
            else
                $(this).val(sortNumber(num.substr(0,num.length-1)) + "%");
        }
    });

    $('input[id="BodyPercantigeUse" ]').keyup(function(e) {
        var num = $(this).val();
        if (e.which!=8) {
            num = sortNumber(num);
            if(isNaN(num)||num<0 ||num>100) {
                alert("ادخل رقم فقط من 0 - 100");
                $(this).val(sortNumber(num.substr(0,num.length-1)) + "%");
            }
            else
                $(this).val(sortNumber(num)+"%");
        }
        else {
            if(num < 2)
                $(this).val("");
            else
                $(this).val(sortNumber(num.substr(0,num.length-1)) + "%");
        }
    });
    function sortNumber(n){
        var newNumber="";
        for(var i = 0; i<n.length; i++)
            if(n[i] != "%")
                newNumber += n[i];
        return newNumber;
    }


</script>
