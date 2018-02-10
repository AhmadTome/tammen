@extends('report.reportLayout')

@section('title','حساب ثمن المركبة')

@section('content')

    @include('report.parts.carInfoHeader')
    <div class="row">
        <div class='col-xs-4 col-xs-offset-1'>
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
                    <th>
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
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <th class="gray-back" colspan="5">
                {{_t('car_price_calculate',$l)}}
            </th>
        </tr>
        <tr>
            <th class="gray-back">
                {{_t('repair_calc',$l)}}
            </th>
            <th class="gray-back">
                {{_t('body_part_calc',$l)}}
            </th>
            <th class="gray-back">
                {{_t('mech_part_calc',$l)}}
            </th>
            <th class="gray-back">
                {{_t('down_calc',$l)}}
            </th>
            <th class="gray-back">
                {{_t('car_price',$l)}}
            </th>
        </tr>
        <tr>
        <td>
            {{$car->total_maintenance}}
        </td>
        <td>
            {{$car->total_body_work}}
        </td>
        <td>
            {{$car->total_mechanic}}
        </td>
        <td>
            {{$car->total_drop}}
        </td>
        <td>
            {{$car->cost->finalcost}}
        </td>
        </tr>
    </table>
    <br>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-4">
            <table class="table table-bordered">
                <tr class="gray-back">
                    <th width="50%" colspan="2">
                        {{_t('total_inc_down',$l)}}
                    </th>
                    <th width="50%"> 
                        {{_t('direct_damage_total',$l)}}
                    </th>
                </tr>
                <tr>
                    <td width="50%" colspan="2">

                    </td>
                    <td>
                        {{$car->total_maintenance + $car->total_body_work + $car->total_mechanic + $car->total_drop }}
                    </td>
                </tr>
                <tr>
                    <th class="gray-back">
                        {{_t('damage_rate',$l)}}
                    </th>
                    <td>
                        {{$est->DamagePercantige}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-9">
            <h4 class="gray-back border-1 padding pull-right margin-0">
                {{_t('car_guess_notes',$l)}}
            </h4>
            <div class="clearfix">
            </div>
            <div class="box"></div>
        </div>
        <div class="col-xs-3">
            <h4 class="gray-back border-1 padding pull-right margin-0">
                {{_t('attachments',$l)}}
            </h4>
            <div class="clearfix">
            </div>
            <div class="box"></div>
        </div>
    </div>
@endsection