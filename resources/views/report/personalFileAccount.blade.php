@extends('report.reportLayout')

@section('title','Personal File Account')

@section('content')

    <div class="border-2 padding">
        <table class="table table-bordered">
            <tr>
                <th>
                    {{_t('car_num',$l)}}
                </th>
                <th>
                    {{_t('file_num',$l)}}
                </th>
                <th>
                    {{_t('car_use',$l)}}
                </th>
                <th>
                    {{_t('car_model',$l)}}
                </th>
                <th>
                    {{_t('production_year')}}
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
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
            </tr>
        </table>
    </div>
    <br>
    <div class="col-xs-6">
        <table class="table table-bordered cols-2">
            <tr>
                <th>
                    {{_t('production_date',$l)}}
                </th>
                <td>

                </td>
            </tr>
            <tr>
                <th>
                    {{_t('file_num',$l)}}
                </th>
                <td>

                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-6">
        <table class="table table-bordered cols-2">
            <tr>
                <th>
                    {{_t('for',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <th>
                    {{_t('city',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <th>
                    {{_t('jawwal',$l)}}
                </th>
                <td>
                </td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>

    <p>
        {{_t('car_check_msg',$l)}}
    </p>
    <div class="border-2 padding">
        <div class="col-xs-4">
            {{_t('claim_num',$l)}}
        </div>
        <div class='col-xs-4'>
            {{_t('file_num',$l)}}
        </div>
        <div class='col-xs-4'>
            {{_t('benif_name',$l)}}
        </div>
        <div class="clearfix"></div>
    </div>
    <Br>


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
                <tr>
                    <th>
                        {{_t('car_model',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
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
                        {{_t('name',$l)}}
                    </th>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_name',$l)}}
                    </th>
                    <td></td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('ins_policy',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_company',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('damage',$l)}}
                    </th>
                    <td></td>
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