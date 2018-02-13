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


    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 pull-left" >

        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">تعديل واستعلام أعمال مركبة صيانة</div>
            <div class="panel-body PanelBodyCss">

                <div >



                    <form class="form-group" method="post" action="EditMaintinancework" id="maintinanceform">
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
                                <select class="form-control " id="limit_select">
                                    <option selected disabled="">اختار التحديد</option>
                                    <option>تخمين</option>
                                    <option>فني</option>
                                    <option>تثمين</option>
                                </select>
                            </div>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="limit" placeholder="" disabled required>
                            </div>


                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" >  العمل :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <select class="form-control " id="carMaintinance_select">
                                    <option selected disabled="">اختار العمل</option>

                                    @foreach($maintinanceinfo as $item)
                                        <option value="{{$item->mai_name}}">{{$item->mai_num." |  ".$item->mai_name}}</option>

                                    @endforeach



                                </select>
                            </div>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="carMaintinance_work" placeholder="" disabled>
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  مبلغ : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="Price" type="number"  placeholder="ادخل المبلغ" />
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > النسبة : </label>
                            <div class="col-sm-8 pull-right">
                                <!-- <input class="form-control" id="Percantige" type="text"  placeholder="ادخل  النسبة" value="%"/> -->
                                <input class="form-control" id="Percantige" type="text"  placeholder="ادخل  النسبة"   />

                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> تاريخ التسجيل : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" id="Date" type="date" style="text-align: right;" />
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  تفاصيل : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="Bodynote" class="form-control PanelBodyCssInput" rows="5" id="details" placeholder="ادخل ملاحظات" ></textArea>
                            </div>
                        </div>




                        <button type="button" onclick="addrow()" name="addMaintinance" id="addMaintinance" class="btn btn-success pull-left" style="margin-bottom: 10px"> اضافة المزيد على الجدول</button>

                        <div class="table-responsive col-sm-12 row" dir="rtl">
                            <table class="table Maintinancetable" name="maintinacetable[]" id="maintinacetable"  border="1">
                                <thead>
                                <tr>

                                    <th>رقم المركبة  </th>
                                    <th>رقم الملف  </th>
                                    <th>تحديد</th>
                                    <th>تحديد</th>
                                    <th>العمل</th>
                                    <th>الصيانة</th>
                                    <th>المبلغ</th>
                                    <th> النسبة</th>
                                    <th> تاريخ التسجيل</th>
                                    <th>التفاصيل</th>


                                </tr>
                                </thead>

                                <tr>


                                </tr>
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
  هل أنت متأكد من أنك تريد حذف أعمال الصيانة للمركبة الخاصة بملف  <span class="dname"></span> ؟
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
    function addrow() {


        //get variable data
        var x = document.getElementById("limit_select").selectedIndex;
        var y = document.getElementById("limit_select").options;
        var limitno=y[x].text;

        var x2 = document.getElementById("carMaintinance_select").selectedIndex;
        var y2 = document.getElementById("carMaintinance_select").options;
        var workno =y2[x2].text;


        var limit = document.getElementById("limit").value;
        var work=document.getElementById("carMaintinance_work").value;
        var price = document.getElementById("Price").value;
        var percantige = document.getElementById("Percantige").value;
        var date = document.getElementById("Date").value;
        var details = document.getElementById("details").value;
        var carnumber=document.getElementById("carnumber").value;

        var fileNumber=document.getElementById("filenumber").value;
        //select table

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


        cell1.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][carnumber]" id="carnumber_table" value="' + carnumber + '" />'+carnumber+'</td>' ;
        cellfile.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][fileNumber]" id="fileNumber_table" value="' + fileNumber + '" />'+fileNumber+'</td>' ;
        cell2.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][limitno]" id="limitno_table" value="' + limitno + '"/>'+ limitno+'</td>' ;
        cell3.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][limit]" id="limit_table" value="' + limit + '"/>'+ limit+'</td>' ;
        cell4.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][workno]" id="workno_table" value="' + workno + '"/>'+ workno+'</td>' ;
        cell5.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][work]" id="work_table" value="' + work + '"/>'+ work+'</td>' ;
        cell6.innerHTML= '<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][price]" id="price_table" value="' + price + '"/>'+ price+'</td>';
        cell7.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][percantige]" id="percantige_table" value="' + percantige + '"/>'+percantige +'</td>' ;
        cell8.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][date]" id="date_table" value="' + date + '"/>'+date +'</td>' ;
        cell9.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][details]" id="details_table" value="' + details + '"/>'+details +'</td>';
        cell10.innerHTML='<td><input type="button" class="btn-danger" value="X" id="remCF" /></td>';
        Maintinanceindex++;
    }


    $(document).ready(function () {

        $("#carInfo_select,#carMaintinance_select").select2({
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
                url: '{!!URL::to('deletemaintinancework')!!}',
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
        $(this).on("change","#limit_select",function () {
            var limit=$("#limit_select").val();
            $('#limit').val(limit);

        });

        $(this).on("change","#carMaintinance_select",function () {
            var work=$("#carMaintinance_select").val();
            $('#carMaintinance_work').val(work);

        });

        $("#maintinacetable").on('click','#remCF',function(){
            $(this).parent().parent().remove();
        });
        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();
            ID=$(this).val();

            $.ajax({

                type:'get',
                url:'{!!URL::to('getallmaintinancedata')!!}',
                data:{'id':file_nom},
                success:function(data) {

                    $('#filenumber').val(data.data[0].file_num);
                    $('#carused').val(data.data[0].ve_used);
                    $('#carversion').val(data.data[0].ve_version);
                    $('#producedyear').val(data.data[0].ve_produce_year);
                    $('#carnumber').val(data.data[0].ve_num);
                    $('#carnumberhidden').val(data.data[0].ve_num);
                    $('#filrnumberhidden').val(data.data[0].file_num);


                    if(data.data2.length > 0){

                        var table=document.getElementsByTagName("table")[0];
                        var count = $('#maintinacetable tr').length;
                        for(var k=0;k<count-1;k++)
                            document.getElementById("maintinacetable").deleteRow(1);

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

                            cell1.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][carnumber]" id="carnumber_table" value="' + data.data2[g].mawo_vehicl_num + '" />'+data.data2[g].mawo_vehicl_num+'</td>' ;
                            cellfile.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][fileNumber]" id="fileNumber_table" value="' + data.data2[g].file_number  + '" />'+data.data2[g].file_number+'</td>' ;
                            cell2.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][limitno]" id="limitno_table" value="' + data.data2[g].mawo_limit_num + '"/>'+  data.data2[g].mawo_limit_num +'</td>' ;
                            cell3.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][limit]" id="limit_table" value="' +  data.data2[g].mawo_limit_name  + '"/>'+ data.data2[g].mawo_limit_name+'</td>' ;
                            cell4.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][workno]" id="workno_table" value="' + data.data2[g].mawo_work_num + '"/>'+ data.data2[g].mawo_work_num+'</td>' ;
                            cell5.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][work]" id="work_table" value="' + data.data2[g].mawo_work_name + '"/>'+ data.data2[g].mawo_work_name+'</td>' ;
                            cell6.innerHTML= '<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][price]" id="price_table" value="' + data.data2[g].mawo_cost + '"/>'+  data.data2[g].mawo_cost+'</td>';
                            cell7.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][percantige]" id="percantige_table" value="' +  data.data2[g].mawo_rate + '"/>'+data.data2[g].mawo_rate  +'</td>' ;
                            cell8.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][date]" id="date_table" value="' + data.data2[g].mawo_register_date  + '"/>'+data.data2[g].mawo_register_date +'</td>' ;
                            cell9.innerHTML='<td><input type="hidden" name="maintinacetable['+ Maintinanceindex +'][details]" id="details_table" value="' + data.data2[g].mawo_details + '"/>'+data.data2[g].mawo_details +'</td>';
                            cell10.innerHTML='<td><input type="button" class="btn-danger" value="X" id="remCF" /></td>';
                            Maintinanceindex++;



                        }

                    }else{
                        var table=document.getElementsByTagName("table")[0];
                        var count = $('#maintinacetable tr').length;
                        for(var k=0;k<count-1;k++)
                            document.getElementById("maintinacetable").deleteRow(1);
                    }
                }





            });

        });



    });
    $('input[id="Percantige"]').keyup(function(e) {
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