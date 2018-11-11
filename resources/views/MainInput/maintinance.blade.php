


<div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 pull-left" >
    <div class="container">
        @if(session()->has('notif_maintin'))

            <div class="row">
                <div class="alert alert-success" dir="rtl">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ session('notif_maintin') }}</strong>

                </div>
            </div>
        @endif
        @yield('content')
    </div>
    <div class="col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
    <div class="panel panel-default">
        <div class="panel-heading text-center PanelHeadingCss">ادخال أعمال مركبة صيانة</div>
        <div class="panel-body PanelBodyCss">

            <div >



                <form class="form-group" method="post" action="storeMaintinancework" id="maintinanceform">
                    {{ csrf_field() }}
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
                                <option value="{{$item->id}}">{{$item->mai_num." |  ".$item->mai_name}}</option>

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
                        <input class="form-control" id="Price" type="number"  placeholder="ادخل المبلغ" required/>
                    </div>
                </div>

                <div class="form-group row" dir="rtl">
                    <label class="control-label col-sm-2 pull-right text-left" > الضريبة : </label>
                    <div class="col-sm-8 pull-right">
                       <!-- <input class="form-control" id="Percantige" type="text"  placeholder="ادخل  النسبة" value="%"/> -->
                        <input class="form-control" id="Percantige" type="text"  placeholder="ادخل  الضريبة"   required/>

                    </div>
                </div>

                <div class="form-group row" dir="rtl">
                    <label class="control-label col-sm-2 pull-right text-left"> تاريخ التسجيل : </label>
                    <div class="col-sm-8 pull-right">
                        <input class="form-control" id="Date" type="date" style="text-align: right;" required/>
                    </div>
                </div>

                <div class="form-group row" dir="rtl">
                    <label class="control-label col-sm-2 pull-right text-left">  تفاصيل : </label>

                    <div class="col-sm-8 pull-right">
                        <textArea type="Bodynote" class="form-control PanelBodyCssInput" rows="5" id="details" placeholder="ادخل ملاحظات" required></textArea>
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
</div>


<script>
var Maintinanceindex=0;
    function addrow() {


        if ((document.getElementById('filenumber').value) != "") {
            //get variable data
            var x = document.getElementById("limit_select").selectedIndex;
            var y = document.getElementById("limit_select").options;
            var limitno = y[x].text;

            var x2 = document.getElementById("carMaintinance_select").selectedIndex;
            var y2 = document.getElementById("carMaintinance_select").options;
            var workno = y2[x2].text;


            var limit = document.getElementById("limit").value;
            var work = document.getElementById("carMaintinance_work").value;
            var price = document.getElementById("Price").value;
            var percantige = document.getElementById("Percantige").value;
            var date = document.getElementById("Date").value;
            var details = document.getElementById("details").value;
            var carnumber = document.getElementById("carnumber").value;

            var fileNumber = document.getElementById("filenumber").value;
            //select table

            var table = document.getElementsByTagName("table")[0];

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


            cell1.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][carnumber]" id="carnumber_table" value="' + carnumber + '" />' + carnumber + '</td>';
            cellfile.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][fileNumber]" id="fileNumber_table" value="' + fileNumber + '" />' + fileNumber + '</td>';
            cell2.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][limitno]" id="limitno_table" value="' + limitno + '"/>' + limitno + '</td>';
            cell3.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][limit]" id="limit_table" value="' + limit + '"/>' + limit + '</td>';
            cell4.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][workno]" id="workno_table" value="' + workno + '"/>' + workno + '</td>';
            cell5.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][work]" id="work_table" value="' + work + '"/>' + work + '</td>';
            cell6.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][price]" id="price_table" value="' + price + '"/>' + price + '</td>';
            cell7.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][percantige]" id="percantige_table" value="' + percantige + '"/>' + percantige + '</td>';
            cell8.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][date]" id="date_table" value="' + date + '"/>' + date + '</td>';
            cell9.innerHTML = '<td><input type="hidden" name="maintinacetable[' + Maintinanceindex + '][details]" id="details_table" value="' + details + '"/>' + details + '</td>';
            cell10.innerHTML = '<td><input type="button" class="btn-danger" value="X" id="remCF" /></td>';
            Maintinanceindex++;

        }
    }


    $(document).ready(function () {

       /* $(document).on('submit','#maintinanceform',function () {
            var table=$('#maintinacetable');

            $.ajax({

                type:'get',
                url:'{!!URL::to('maintinancework')!!}',
                data:{'maintinacetable':table},
                success:function(data) {
                    console.log('success');

                   console.log(data)

                    console.log(data.length);


                },
                error:function (data) {
                    console.log('error')
                }




            });

        });


*/




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

        $("#maintinanceform").on("submit",function () {
            if($("#filenumber").val() == ""){
                alert("يجب اختيار رقم الملف من أعلى ")
                return false;
            }

        })

        $("#addMaintinance").on("click",function () {
            if($("#filenumber").val() == ""){
                alert("يجب اختيار رقم الملف من أعلى ")
                return false;
            }

        })

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
