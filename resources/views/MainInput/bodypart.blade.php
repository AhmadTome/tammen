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
        <div class="panel-heading text-center PanelHeadingCss">ادخال قطع غيار هيكل</div>
        <div class="panel-body PanelBodyCss">

            <div >

                <form class="form-group" method="post" action="storeBodywork" id="bodyform">

                    {{ csrf_field() }}

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
                                <option value="{{$item->id}}">{{$item->body_name}}</option>
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
                            <option selected disabled="">اختار التحديد</option>
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
                        <textArea type="Bodynote" class="form-control PanelBodyCssInput _details" rows="5" id="note" placeholder="ادخل ملاحظات"></textArea>
                    </div>
                </div>

                <button type="button" onclick="addBodyRow()" name="add" id="add" class="btn btn-success pull-left" style="margin-bottom: 10px"> اضافة المزيد على الجدول</button>

                <div class="table-responsive col-sm-12 row" dir="rtl">
                    <table class="table " border="1" align="right" name="Bodytable[]" id="BodyPartTable">
                        <thead>
                        <tr>

                            <th>رقم المركبة</th>
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



<script>
    var Maintinanceindex=0;

    function addBodyRow() {
        //declare variable and get data filled
        if ((document.getElementById('filenumber').value) != "") {
            var x = document.getElementById("limitBody_select").selectedIndex;
            var y = document.getElementById("limitBody_select").options;
            var limitno = y[x].text;
            var limit = document.getElementById("limitBody").value;

            var x2 = document.getElementById("carPart_select").selectedIndex;
            var y2 = document.getElementById("carPart_select").options;
            var carpartno = document.getElementById("carPart_select").value; //y2[x2].text;
            var carpart = document.getElementById("carPart").value;

            var partcode = document.getElementById("IDPARTCAR").value;

            var x3 = document.getElementById("carType_select").selectedIndex;
            var y3 = document.getElementById("carType_select").options;
            var parttypeno = y3[x3].text;
            var parttype = document.getElementById("carType").value;

            var price = document.getElementById("BodyPartPrice").value;
            var count = document.getElementById("countBody").value;
            var percentage = document.getElementById("BodyPercantige").value;
            var percentageused = document.getElementById("BodyPercantigeUse").value;
            var date = document.getElementById("BodyDate").value;
            var note = document.getElementById("note").value;
            var carnumber = document.getElementById("carnumber").value;
            var fileNumber = document.getElementById("filenumber").value;


            var table = document.getElementsByTagName("table")[2];

            var tablerow = table.insertRow(1);


            var cell1 = tablerow.insertCell(0);
            var cellfile = tablerow.insertCell(1);
            var cell2 = tablerow.insertCell(2);
            var cell3 = tablerow.insertCell(3);
            var cell4 = tablerow.insertCell(4);
            var cell5 = tablerow.insertCell(5);
            var cell6 = tablerow.insertCell(6);
            var cell7 = tablerow.insertCell(7);
            var cell8 = tablerow.insertCell(8);
            var cell9 = tablerow.insertCell(9);
            var cell10 = tablerow.insertCell(10);
            var cell11 = tablerow.insertCell(11);
            var cell12 = tablerow.insertCell(12);
            var cell13 = tablerow.insertCell(13);
            var cell14 = tablerow.insertCell(14);
            var cell15 = tablerow.insertCell(15);


            cell1.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][carnumber]" value="' + carnumber + '" />' + carnumber + '</td>';
            cellfile.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][fileNumber]" value="' + fileNumber + '" />' + fileNumber + '</td>';
            cell2.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][limitno]" value="' + limitno + '" />' + limitno + '</td>';
            cell3.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][limit]" value="' + limit + '" />' + limit + '</td>';
            cell4.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][carpartno]" value="' + carpartno + '" />' + carpartno + '</td>';
            cell5.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][carpart]" value="' + carpart + '" />' + carpart + '</td>';
            cell6.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][partcode]" value="' + partcode + '" />' + partcode + '</td>';
            cell7.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][parttypeno]" value="' + parttypeno + '" />' + parttypeno + '</td>';
            cell8.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][parttype]" value="' + parttype + '" />' + parttype + '</td>';
            cell9.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][price]" value="' + price + '" />' + price + '</td>';

            cell10.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][count]" value="' + count + '" />' + count + '</td>';
            cell11.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][percentage]" value="' + percentage + '" />' + percentage + '</td>';
            cell12.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][percentageused]" value="' + percentageused + '" />' + percentageused + '</td>';
            cell13.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][date]" value="' + date + '" />' + date + '</td>';
            cell14.innerHTML = '<td><input type="hidden" name="Bodytable[' + Maintinanceindex + '][note]" value="' + note + '" />' + note + '</td>';
            cell15.innerHTML = '<input type="button" class="btn-danger" value="X" id="remCF" />';
            Maintinanceindex++;
        }
    }
    $(document).ready(function () {

        $(this).on("change","#limitBody_select",function () {
            var limit=$("#limitBody_select").val();
            $('#limitBody').val(limit);

        });

        $(this).on("change","#carPart_select",function () {
            var MechPart=$("#carPart_select option:selected").text();
            $('#carPart').val(MechPart);

        });
        $(this).on("change","#carType_select",function () {
            var partType=$("#carType_select").val();
            $('#carType').val(partType);

        });

        $("#BodyPartTable").on('click','#remCF',function(){
            $(this).parent().parent().remove();
        });

        $("#bodyform").on("submit",function () {
            if($("#filenumber").val() == ""){
                alert("يجب اختيار رقم الملف من أعلى ")
                return false;
            }

        })

        $("#add").on("click",function () {
            if($("#filenumber").val() == ""){
                alert("يجب اختيار رقم الملف من أعلى ")
                return false;
            }

        })


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
