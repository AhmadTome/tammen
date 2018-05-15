@extends('report.reportLayout')

@section('titile','تقرير أضرار أولي')

@section('content')

    <div class="row">
        <h4 class="gray-back text-center padding">
            <b>
                {{_t('init_damage_report',$l)}}
            </b>
        </h4>
    </div>
    <br>

    <div class="row">
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">
                        ت
                    </td>
                    <td>
                        {{ $car['file_num'] }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_num',$l)}}
                    </th>
                    <td colspan="2">
                        {{$car['ve_num']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_use',$l)}}
                    </th>
                    <td colspan="2">
                        {{$car['ve_used']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('production_year',$l)}}
                    </th>
                    <td colspan="2">
                        {{$car['ve_produce_year']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('meter',$l)}}
                    </th>
                    <td colspan="2">
                        {{$car['ve_speedometer']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('body_num',$l)}}
                    </th>
                    <td colspan="2">
                        {{$car['ve_body_num']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('visit_pay',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['visitCost']}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('acc_date',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['accidantDate']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('exam_date',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['checkDate']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('garage_name',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['Garage']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('name',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['persone_name']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_name',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['person_insurances']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('phone',$l)}}
                    </th>
                    <td width="35%">
                    
                    </td>
                    <td width="35%">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_company',$l)}}
                    </th>
                    <td colspan="2">
                        {{$est['insurance_company']}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-4">
            <table class="table table-bordered table-0">
                <tr>
                    <th class="gray-back" colspan="2">
                        {{_t('additions',$l)}}
                    </th>
                </tr>
                @for($i = 1; $i <= 12; $i++)
                    <tr>
                        <th width="20%"> 
                            {{$i}}
                        </th>
                        <td>
                        </td>
                    </tr>
                @endfor
            </table>
        </div>
        <div class="col-xs-8">
            <table class="table table-bordered" >
                <tr height="250px">
                    <td colspan="2" width="40%"></td>
                    <td rowspan="5" width="30%"></td>
                    <td rowspan="5" width="30%"></td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('repair_calc',$l)}}
                    </th>
                    <td>
                        {{$car->total_maintenance_work}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('body_part_calc',$l)}}
                    </th>
                    <td>
                        {{$car->total_body_work}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('mech_part_calc',$l)}}
                    </th>
                    <td>
                        {{$car->total_mechanic}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('car_price',$l)}}
                    </th>
                    <td>
                        {{$car->cost->finalcost}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class='row'>
        <div class="col-xs-10 col-xs-offset-1">
            <table class="table table-bordered">
                <tr>
                    <th width="50%" class="gray-back">
                        {{_t('damage_desc',$l)}}
                    </th>
                    <th class="gray-back">
                        {{_t('recomendations',$l)}}
                    </th>
                </tr>
                <tr height="80px">
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class='row'>
        <div class="col-xs-4">
            <p>
                {{_t('garage_sig',$l)}}: ..................................
            </p>
            <p>
                {{_t('garage_phone',$l)}}: ................................
            </p>
        </div>
        <div class="col-xs-8">
            1- {{_t('init_damage_msg_1',$l)}}
            <br>
            2- {{_t('init_damage_msg_2',$l)}}
            <br>
            3- {{_t('init_damage_msg_3',$l)}}
        </div>
    </div>
@endsection