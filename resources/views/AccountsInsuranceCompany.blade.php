@extends('layouts.app')

@section('title','تقرير حساب شركة تأمين')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>
             تقرير حساب شركة تأمين
            </h4>
        </div>
        <div dir="rtl">
            <form action="/report/AccountsInsuranceCompanyReport" method="GET">
<br>
<br>
                <div class="form-group row" dir="rtl">
                    <label class="control-label col-sm-2 pull-right text-left">اختار لحضرة : </label>
                    <div class="col-sm-8 pull-right">
                        <select class="form-control text-right" id="To_selectBranch" name="To_selectBranch">

                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label class="contrl-label">إلى تاريخ: </label>
                    <input type="date" class="form-control" name='To'>
                </div>
                <div class="col-sm-6">
                    <label class="contrl-label">من تاريخ: </label>
                    <input type="date" class="form-control" name='From'>
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
                <Br>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary btn-block">
                            معاينة التقرير
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
            </form>
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
            dropdownAutoWidth: true,
            theme: "classic"
        });

        $.ajax({

            type:'get',
            url:'{!!URL::to('getallCompany')!!}',
            success:function(data) {

                $('#To_selectBranch').empty();
                $('#To_selectBranch').append('<option selected disabled=""> اختار الشركة الرئيسية </option>')

                for(var i = 0 ; i< data.length ; i++){
                    if(data[i].accountNoBranch == 'x' && data[i].branchName == 'x')
                        $('#To_selectBranch').append('<option value=" '+ data[i].accountNo +'"> '+ data[i].ToCompany +' </option>')
                    else
                        $('#To_selectBranch').append('<option value=" '+ data[i].accountNo+'-'+data[i].accountNoBranch +'"> '+ data[i].ToCompany+'-'+data[i].branchName +' </option>')
                }
            }
        });
    });

</script>

