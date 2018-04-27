@extends('layouts.app')

@section('title','تقارير قطع المركبة')

@section('content')

<div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">
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
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="Date" id="Date" class="form-control">
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        التاريخ
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
                        <button class="btn btn-block btn-primary" onclick="goTo('bodyPartChange')">
                            تقرير قطع غيار هيكل
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('mechPartChange')">
                            تقرير قطع غيار ميكانيك
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carWork')">
                            تقرير أعمال مركبة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carDown')">
                            تقرير هبوط مركبة
                        </button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                       
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('degree')">
                            شهادة
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-block btn-primary" onclick="goTo('carTechDamage')">
                            أضرار فنية لدائرة الترخيص
                        </button>
                    </div>
                </div>
            </div>
        </div> 
        <Br>

        <script>
            var $fileNumber = $("#filenumber");
            var $fileChooser = $("#carInfo_select");
            var dateChoose = document.getElementById("Date");
            $fileNumber.on("change",function(){
                var fileId = this.value;
                $.get("/car/parts/dates/" + fileId).done(function(data){
                    dateChoose.innerHTML = "";
                    for(var i = 0,l = data.length; i < l; i++){
                        dateChoose.appendChild(new Option(data[i].display,data[i].value));
                    }
                }).fail(function(err){

                });
            });
        function goTo(route){
            var type = $("#filenumber").val();
            if(!type){
                $("#fileError").show();
                $("#fileError").html("قم باختيار مركبة");
                return;
            }

            $("#fileError").hide();
            $("#fileError").html("");
            
            var lang = $("#lang").val();
            var car_num = $("#filenumber").val();
            var date = $("#Date").val();
            window.open("/report/" + route + "/" + lang + "?file_num=" + car_num + "&date=" + date);
        }
    $(document).ready(function () {
    });
    </script> 

@endsection