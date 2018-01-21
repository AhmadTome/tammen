@extends('report.reportLayout')

@section('title','File Account')

@section('content')

    <div class="border-2 padding">
    
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('production_year',$l)}}
                    </th>
                    <th>
                        {{_t('body_num',$l)}}
                    </th>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-3 col-xs-push-3">
            <table class="table table-bordered">
                <tr>
                    <th>
                        {{_t('car_num',$l)}}
                    </th>
                    <th>
                        {{_t('file_num',$l)}}
                    </th>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
    <Br>
    <div class="row">
        <div class="col-xs-4 col-xs-push-2">
            <table class="table table-bordered">
                <tr>
                    <th class="gray-back" width="30%">
                        {{_t('production_date',$l)}}
                    </th>
                    <td colspan="2" width="70%">

                    </td>
                </tr>
                <tr>
                    <th class="gray-back" width="30%">
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">
                    </td>
                    <td width="50%">
                    </td>
                </tr>
                <tr>
                    <th class="gray-back" width="30%">
                        {{_t('account_num',$l)}}
                    </th>
                    <td width="70%" colspan="2">

                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-2"></div>
        <div class="col-xs-4 col-xs-push-2">
            <table class="table table-bordered">
                <tr>
                    <th class="gray-back">

                    </th>
                    <td>

                    </td>
                </tr>
                <tr>
                    <th class="gray-back">
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th class="gray-back">
                        {{_t('jawwal',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
            </table>    
        </div>
    </div>
    <p class="text-center">
        {{_t('car_check_msg',$l)}}
    </p>
    <br>
    <div class="border-1 padding">
        <div class="col-xs-2"></div>
        <div class="col-xs-3">
            <table class="table table-bordered">
                <tr>
                    <th width="30%"> {{_t('claim_num',$l)}} </th>
                    <td width="70%"> </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-3">
            <table class="table table-bordered">
                <tr>
                    <th width="30%"> {{_t('file_num',$l)}} </th>
                    <td width="20%"> </td>
                    <td width="50%"> </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-4">
            {{_t('benif_name_HR',$l)}}
        </div>
        <div class="clearfix"></div>
    </div>
    <br>
    <div class="Row">
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('acc_date',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_num',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
            </table>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('production_year',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
            </table>
            <br>
        </div>
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('ins_policy',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
            </table>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('surv_pay',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th width='30%'>
                        {{_t('travel',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('picture',$l)}}
                    </th>
                    <td></td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('disk_money',$l)}}
                    </th>
                    <td></td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('total',$l)}}
                    </th>
                    <td></td>
                </tr>
            </table>
            <br>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection