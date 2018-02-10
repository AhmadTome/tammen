@extends('report.reportLayout')

@section('title','دائرة الترخيص')

@section('content')

    @include('report.parts.carInfoHeader')

    <div class="row">
        <div class="col-xs-4 col-xs-offset-1">
            @include('report.parts.fileInfo')
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-xs-offset-8">
            <table class="table table-bordered">
                <tr>
                    <th width='50%' class="gray-back">
                        {{_t('car_price',$l)}}
                    </th>
                    <td>
                        {{$car->cost->finalcost}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th class="gray-back" colspan="3">
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
            </tr>
        </table>
    </div>
    <br>

    <div class="row">
        <div class="col-xs-8">
            @include('report.parts.carGuessNotes')
        </div>
        <div class="col-xs-4">
            @include('report.parts.attachments')
        </div>
    </div>
@endsection