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
                    <td id="discount" colspan="2">
                        <input id="breakdown" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">
                        ت
                    </td>
                    <td>
                        {{$car->file_num}}
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
                        {{$est['DestroyCarTo']}}
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
                        {!! $est->damage != null ? $est->damage->getName($l) : '' !!}
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
    <div class="box" style="padding: 10px;">
        {{$est->DestroyText}}
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
                    @if($l == 'AR')
                        {{ $estimater->nes_name }}
                    @else
                        {{ $estimater->hebrow_estimater }}
                    @endif
                </td>
                <td>
                    {{ $estimater->nes_authorization_num }}
                </td>
                <td>
                    {{ $estimater->nes_signature }}
                </td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    <br><br>
    <h4 class="text-center">
        {{_t('with_respect_message',$l)}}
    </h4>
@endsection