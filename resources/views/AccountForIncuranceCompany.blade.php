@extends('layouts.app')

@section('title','ادخال حسابات شركة التأمين')

@section('content')

    <div class="panel panel-default" ng-app="myApp" ng-controller="HomeController">
        <div class="panel-heading text-center PanelHeadingCss">ادخال حسابات شركة التأمين</div>
        <div class="panel-body PanelBodyCss">

            <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                <form class="form-horizontal" method="post" action="storeAccountForIncuranceCompany" ng-model="myform">
                    {{ csrf_field() }}

                    <div class="pull-right row">
                        <div class="radio">
                            <label><input type="radio" name="InsCompany" checked ng-click="changeToMain()" value="main">شركة رئيسية</label>
                            <br><br>
                            <label><input type="radio" name="InsCompany" ng-click="changeToBranch()" value="branch" id="branchRadio">شركة فرعية</label>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br><br>
                    <br>

                    <div id="MainInsCompany" ng-model="showMain" ng-show="showMain">
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="ToMain" id="ToMain"
                                       placeholder="ادخل لحضرة" >
                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: لحضرة</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="accountNoMain" id="accountNoMain"
                                       placeholder="ادخل رقم الحساب" >
                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: رقم الحساب</label>
                        </div>
                    </div>


                    <div id="BranchInsCompany" ng-model="showBranch" ng-show="showBranch">
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <select class="form-control text-right" id="To_selectBranch" name="To_selectBranch">

                                </select>
                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: لحضرة</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-2 ">
                                <input type="text" class="form-control PanelBodyCssInput" name="BranchName" id="BranchName" placeholder="اسم الفرع">
                            </div>
                            <div class="col-sm-7">
                                <input type="name" class="form-control PanelBodyCssInput" name="ToBranch" id="ToBranch"
                                       readonly >
                            </div>

                            <label class="control-label col-sm-1" for="idDamNum">: لحضرة</label>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <div class="col-sm-2 pull-right">
                                    <input type="number" class="form-control PanelBodyCssInput" name="accountNoBranchBranch" id="accountNoBranchBranch">
                                </div>
                                <div class="col-sm-7 pull-right">
                                    <input type="name" class="form-control PanelBodyCssInput" name="accountNoBranch" id="accountNoBranch"
                                           readonly >
                                </div>




                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: رقم الحساب</label>
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


@endsection
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#To_selectBranch").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });

        $('#branchRadio').on('click',function () {

            $.ajax({

                type:'get',
                url:'{!!URL::to('getMainCompany')!!}',
                success:function(data) {
                    $('#To_selectBranch').empty();
                    $('#To_selectBranch').append('<option selected disabled=""> اختار الشركة الرئيسية </option>')

                    for(var i = 0 ; i< data.length ; i++){
                        $('#To_selectBranch').append('<option value=" '+ data[i].accountNo +'"> '+ data[i].ToCompany +' </option>')
                    }
                }
            });

        });

        $('#To_selectBranch').on("change",function () {
            var countNO = $(this).val();

            var x2 = document.getElementById("To_selectBranch").selectedIndex;
            var y2 = document.getElementById("To_selectBranch").options;
            var ToMain = y2[x2].text;

            $('#accountNoBranch').val(countNO);
            $('#ToBranch').val(ToMain);
        })
    })
</script>


