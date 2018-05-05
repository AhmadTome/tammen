<html>
<head>
    <title>ادخال هبوط</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />

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
            <div class="panel-heading text-center PanelHeadingCss">ادخال هبوط قيمة</div>
            <div class="panel-body PanelBodyCss">

                    <form class="form-horizontal" method="post" action="storDropValue" >
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
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="bodynumber" id="bodynumber" placeholder="رقم الشاصي" disabled required>
                            </div>

                        </div>
                        <div  style="max-width: 1000px ;margin-bottom: -15px">

                        <div class="form-group row" dir="rtl">


                            <label class="control-label  pull-right text-left" style="width: 100px">بيان هبوط القيمة: </label>
                            <div class="col-sm-9 pull-right">
                                <select class="form-control" type="text" id="dropstatment" >
                                    <option selected disabled="">اختار بيان هبوط القيمة</option>
                                    @foreach($dropStatment as $item)
                                        <option value="{{$item->text}}">{{$item->id." | ".$item->text}}</option>

                                    @endforeach




                                </select>
                            </div>
                        </div>
                        <div class="form-group row" dir="rtl">
                            <label class="control-label pull-right text-left" style="width: 80px">القطعة: </label>
                            <div class="col-sm-3 pull-right">
                                <select class="form-control" type="text" id="part" >

                                    <option selected disabled="">اختار القطعة</option>
                                    @foreach($bodypart as $item)
                                        <option value="{{$item->body_name}}">{{$item->body_num." | ".$item->body_name}}</option>

                                    @endforeach





                                </select>
                            </div>
                            <label class="control-label pull-right text-left" style="width: 80px">طبيعة الصيانة : </label>
                            <div class="col-sm-3 pull-right">
                                <select class="form-control" type="text" id="maintinancework" >
                                    <option selected disabled="">اختار طبيعة العمل / الصيانة</option>
                                    @foreach($maintinance as $item)
                                        <option value="{{$item->mai_name}}">{{$item->mai_num." | ".$item->mai_name}}</option>

                                    @endforeach



                                </select>
                            </div>
                            <label class="control-label pull-right text-left" style="width: 80px">تاريخ التسجيل: </label>
                            <div class="col-sm-3 pull-right">
                                <input class="form-control" type="date" id="dropdate" />
                            </div>

                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label pull-right text-left" style="width:110px">عدد القطع: </label>
                            <div class="col-sm-2 pull-right">
                                <input class="form-control" type="number" id="partcount" required/>
                            </div>
                            <label class="control-label  pull-right text-left" style="width:80px" >نسبة: </label>
                            <div class="col-sm-2 pull-right">
                                <input class="form-control" type="number" id="dropPercantige" placeholder="النسبة %" required />
                            </div>
                            <label class="control-label  pull-right text-left" style="width:100px">ثمن المركبة: </label>
                            <div class="col-sm-2 pull-right">
                                <input class="form-control" type="text" id="carPrice" name="carPrice" readonly />
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label  pull-right text-left" style="width:110px">قيمة مبلغ الصيانة: </label>
                            <div class="col-sm-5 pull-right">
                                <input class="form-control" type="text" id="cost" name="cost" readonly />
                            </div>

                        </div>



                        <div class="form-group row" dir="rtl">
                            <label class="control-label  pull-right text-left" style="width: 110px">ملاحظات: </label>
                            <div class="col-sm-8 pull-right">
                                <textArea class="form-control PanelBodyCssInput" type="note" rows="5"  id="note" required></textArea>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label  pull-right text-left" style="width: 110px">المركبة الاولى: </label>
                            <div class="col-sm-4 pull-right">
                                <textArea class="form-control PanelBodyCssInput" type="note" rows="5"  id="firstcar_note" name="firstcar_note" required></textArea>
                            </div>
                            <label class="control-label  pull-right text-left" style="width: 80px">لمركبة الثانية: </label>

                            <div class="col-sm-4 pull-right">
                                <textArea class="form-control PanelBodyCssInput" type="note" rows="5"  id="secondcar_note" name="secondcar_note" required></textArea>
                            </div>
                        </div>





                        <button type="button" onclick="addrow()" name="addMaintinance" id="addMaintinance" class="btn btn-success pull-left" style="margin-bottom: 10px"> اضافة المزيد على الجدول</button>

                        <div class="table-responsive col-sm-12 row" dir="rtl">
                            <table class="table dropcartable" name="dropcartable[]" id="dropcartable"  border="1">
                                <thead>
                                <tr>


                                    <th>رقم الملف  </th>
                                    <th>بيان هبوط القيمة</th>
                                    <th>القطعة</th>
                                    <th>طبيعة الصيانة</th>
                                    <th>التاريخ</th>
                                    <th>عدد القطع</th>
                                    <th> النسبة</th>
                                    <th> ملاحظات</th>



                                </tr>
                                </thead>

                                <tr>


                                </tr>
                                <tbody>


                                </tbody>
                            </table>

                        </div>


                        <div class="row ">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center pull-left" >
                                <input type="submit" name="submit" id="submit" class="btn btn-success " value="اضافة" />
                            </div>
                        </div>

                        </div>
                    </form>



            </div>
        </div>



    <!-- end Body -->
    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('footer')

    </div>
    <!--/footer-->



</div>
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


    $("#carInfo_select,#dropstatment,#part,#maintinancework").select2({
        dropdownAutoWidth : true,
        theme: "classic"
    });

$(document).on("change",".carInfo_select",function () {
var file_nom=$(this).val();


$.ajax({

type:'get',
url:'{!!URL::to('findCarInfoforDropValue')!!}',
data:{'id':file_nom},
success:function(data) {
//console.log('success');

//console.log(data[0].ve_used);

console.log(data);
$('#filenumber').val(data.data[0].file_num);
$('#carused').val(data.data[0].ve_used);
$('#carversion').val(data.data[0].ve_version);
$('#producedyear').val(data.data[0].ve_produce_year);
$('#bodynumber').val(data.data[0].ve_body_num);

if(data.data2.length !=0) {
    $('#carPrice').val(data.data2[0].finalcost);
}else{
    $('#carPrice').val(0);
}

}




});

    $.ajax({

        type:'get',
        url:'{!!URL::to('findCostDropValue')!!}',
        data:{'id':file_nom},
        success:function(data) {
$('#cost').val(data);

        }

    });

});

    $("#dropcartable").on('click','#remCF',function(){
        $(this).parent().parent().remove();
    });

});




var dropcatindex=0;
function addrow() {

    //get variable data
    //var carnumber=document.getElementById("carInfo_select").value;
    var filenumber=document.getElementById("filenumber").value;
    var dropvaluestatment=document.getElementById("dropstatment").value;
    var part=document.getElementById("part").value;
    var maintinace = document.getElementById("maintinancework").value;
    var date=document.getElementById("dropdate").value;
    var countpart=document.getElementById("partcount").value;
    var percantige=document.getElementById("dropPercantige").value;
    var note=document.getElementById("note").value;

    //select table

    var table=document.getElementsByTagName("table")[0];

    var tablerow=table.insertRow(1);


    //var cell1=tablerow.insertCell(0);
    var cellfile=tablerow.insertCell(0);
    var cell2=tablerow.insertCell(1);
    var cell3=tablerow.insertCell(2);
    var cell4=tablerow.insertCell(3);
    var cell5=tablerow.insertCell(4);
    var cell6=tablerow.insertCell(5);
    var cell7=tablerow.insertCell(6);
    var cell8=tablerow.insertCell(7);
    var cell9=tablerow.insertCell(8);



    //cell1.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][carnumber]" id="carnumber_table" value="' + carnumber + '" />'+carnumber+'</td>' ;
    cellfile.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][filenumber]" id="fileNumber_table" value="' + filenumber + '" />'+filenumber+'</td>' ;
    cell2.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][dropvaluestatment]" id="limitno_table" value="' + dropvaluestatment + '"/>'+ dropvaluestatment+'</td>' ;
    cell3.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][part]" id="limit_table" value="' + part + '"/>'+ part+'</td>' ;
    cell4.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][maintinace]" id="percantige_table" value="' + maintinace + '"/>'+maintinace +'</td>' ;

    cell5.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][date]" id="workno_table" value="' + date + '"/>'+ date+'</td>' ;
    cell6.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][countpart]" id="work_table" value="' + countpart + '"/>'+ countpart+'</td>' ;
    cell7.innerHTML= '<td><input type="hidden" name="dropcartable['+ dropcatindex +'][percantige]" id="price_table" value="' + percantige + '"/>'+ percantige+'</td>';
    cell8.innerHTML='<td><input type="hidden" name="dropcartable['+ dropcatindex +'][note]" id="percantige_table" value="' + note + '"/>'+note +'</td>' ;

    cell9.innerHTML='<td><input type="button" class="btn-danger" value="X" id="remCF" /></td>';

    dropcatindex++;
}




</script>