@extends('layouts.app')

@section('title','كشف بنك')

@section('content')

<div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">
                @include('report.parts.carFileChooser')
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <select name="id" id="id" class='form-control'>
                            @foreach($people as $p)
                                <option value="{{$p['id']}}">
                                    {{$p['name']}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label class="control-label col-md-2">
                        الشخص
                    </label>
                </div>
                <div class="clearfix"></div>
                <br>
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
                        <input type="date" id="Date" name="Date" class="form-control">
                    </div>
                    <label class="control-label col-md-2">
                        التاريخ
                    </label>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <button class="btn btn-block btn-primary" onclick="goTo('bankStmnt')">
                            معاينة تقرير كشف البنك
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>

</div>
<!-- end car info -->
        <Br>
    </div>


    <script>
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
            var id = $("#id").val();
            window.open("/report/" + route + "/" + lang + "?file_num=" + car_num + "&date=" + date + "&id=" + id);
        }
    $(document).ready(function () {
    });
    </script>   

@endsection