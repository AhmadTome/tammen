@extends('layouts.app')

@section('title','تقارير المركبة')

@section('content')

<div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div >

    @include('report.parts.carFileChooser')
    <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="lang" id="lang" class='form-control'>
                            <option value="AR">اللغة العربية</option>
                            <option value="HR">اللغة العبرية</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        اللغة
                    </label>
                </div>
                <div class="clearfix"></div>
                <br>

                </div>
            </div>
        </div>

</div>
<!-- end car info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">
                التقارير
                </h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carInfo')">
                            معاينة تقرير بيانات المركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('fileAccount')">
                            معاينة تقرير حساب فايل / ملف
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('personalFileAccount')">
                            معاينة تقرير حساب ملف / فايل شخصي
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carDestroy')">
                            معاينة تقرير شطب مركبة
                        </button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carPrice')">
                            معاينة حساب ثمن المركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carPriceWithRek')">
                            معاينة حساب ثمن المركبة مع حطام
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('licence')">
                            معاينة لدائرة الترخيص
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('initialDamageReport')">
                            معاينة الكشف الأولي
                        </button>
                    </div>
                </div>
            </div>
        </div> 
        <Br>

        <div class="panel panel-default">
            <div class="panel-heading">
                الزيارات
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-md-11">
                            <input type="date" class="form-control" name="To" id="To" >
                        </div>
                        <label class="control-label col-md-1">إلى</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-11">
                            <input type="date" class="form-control" name="From" id="From" >
                        </div>
                        <label class="control-label col-md-1">من</label>
                    </div>
                </div>
                <br>
                <div class="col-sm-4 col-sm-offset-4">
                    <button class="btn btn-primary btn-block" onclick="goTo('carVisit',true)">
                        معاينة الزيارات
                    </button>
                </div>
            </div>
        </div>

        <script>
        function goTo(route,withDate){
            var type = $("#filenumber").val();
            if(!type){
                $("#fileError").show();
                $("#fileError").html("قم باختيار ملف");
                return;
            }

            $("#fileError").hide();
            $("#fileError").html("");
            
            var lang = $("#lang").val();
            if(withDate){
                var To = $("#To").val();
                var From = $("#From").val();
                window.location.href = "/report/" + route + "/" + lang + "?From=" + From + "&To=" + To+"&type="+ type ;
            }else{
                window.location.href = "/report/" + route + "/" + lang+"?type="+type;
            }
        }
    $(document).ready(function () {

        $("#carInfo_select").on("change",function () {

      var filenumber = $("#carInfo_select").val();
            $("#DamagePercient").hide();
            $("#DamagePercient").html("");
            $.ajax({
                type:'get',
                url:'{!!URL::to('getDamagePercantige')!!}',
                data:{'id':filenumber},
                success:function(data) {
                    $("#DamagePercient").show();
                    $("#DamagePercient").html("نسبة الضرر لهذه المركبة "+"%"+(data[0].DamagePercantige));
                }
            });





        })



        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });
    });
    </script>  

@endsection