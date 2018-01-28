@extends('report.reportLayout')

@section('title','Car Destroy')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 border-1 gray-back text-center">
            <h4><b>{{_t('car_destroy_title',$l)}}</b></h4>
        </div>
    </div>
    <br>
    <div class='row'>
        <div class='col-xs-5'>
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('production_date',$l)}}
                    </th>
                    <td colspan="2">
                        {{date('Y-m-d')}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">
                        {{explode('-',$car['file_num'])[1]}}
                    </td>
                    <td>
                        {{explode('-',$car['file_num'])[0]}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-4 col-xs-offset-3">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('for',$l)}}
                    </th>
                    <td>
                        {{$est['to']}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-xs-6">
            <table class="table table-bordered cols-2">
                <tr>
                    <th>
                        {{_t('acc_date',$l)}}
                    </th>
                    <td>
                        {{$est['accidantDate']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('exam_date',$l)}}
                    </th>
                    <td>
                        {{$est['checkDate']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_num',$l)}}
                    </th>
                    <td>
                        {{$car['ve_num']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_model',$l)}}
                    </th>
                    <td>
                        {{$car['ve_version']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_use',$l)}}
                    </th>
                    <td>
                        {{$car['ve_used']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('meter',$l)}}
                    </th>
                    <td>
                        {{$car->ve_speedometer}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6">
            <table class="table table-bordered cols-2">
                <tr>
                    <th>
                        {{_t('name',$l)}}
                    </th>
                    <td>
                        {{$est['persone_name']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_name',$l)}}
                    </th>
                    <td>
                        {{$est['person_insurances']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_policy',$l)}}
                    </th>
                    <td>
                        {{$est['Insurance_policy']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_model_num',$l)}}
                    </th>
                    <td>
                        {{$car['ve_version_num']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('damage',$l)}}
                    </th>
                    <td>
                        {{$est['DamageType']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('body_num',$l)}}
                    </th>
                    <td>
                        {{$car['ve_body_num']}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="box">

    </div>
    <br>
    <div class="col-xs-8 col-xs-offset-2">
        <table class='table table-bordered'>
            <tr>
                <th class="gray-back">
                    {{_t('guesser',$l)}}
                </th>
                <th class="gray-back">
                    {{_t('neg_num',$l)}}
                </th>
                <th class="gray-back">
                    {{_t('sig_stamp',$l)}}
                </th>
            </tr>
            <tr>
                <td>
                    {{$est['estimaterName']}}
                </td>
                <td>
                </td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
@endsection