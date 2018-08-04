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
                    {{$car['ve_num']}}
                </td>
                <td>
                    {{$car['file_num']}}
                </td>
                <td>
                    {{$car['ve_used']}}
                </td>
                <td>
                    {{$car->ve_version}}
                </td>
                <td>
                    {{$car['ve_produce_year']}}
                </td>
                <td>
                    {{$car['ve_body_num']}}
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
                    {{date('Y-m-d',strtotime($est->created_at))}}
                </td>
            </tr>
            <tr>
                <th>
                    {{_t('file_num',$l)}}
                </th>
                <td>
                    {{$car['file_num']}}
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
                    {{$est['to']}}
                </td>
            </tr>
            <tr>
                <th>
                    {{_t('city',$l)}}
                </th>
                <td>
                    {!! $est->cityObject != null ? $est->cityObject->getName($l) : '' !!}
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

    <h4 class='text-center'>
        {{_t('car_check_msg',$l)}}
    </h4>
    <div class="border-2 padding">
        <div class="col-xs-4">
            {{_t('claim_num',$l)}}: {{$est['climeNumber']}}
        </div>
        <div class='col-xs-4'>
            {{_t('file_num',$l)}}: {{$est['fileNumber']}}
        </div>
        <div class='col-xs-4'>
            {{_t('benif_name',$l)}}: {{$est['person_insurances']}}
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
                        {{$est['accidantDate']}}
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
                        {{$car->ve_version}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('production_year',$l)}}
                    </th>
                    <td>
                        {{$car['ve_produce_year']}}
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
                    <th width="30%">
                        {{_t('ins_policy',$l)}}
                    </th>
                    <td>
                        {{$est['Insurance_policy']}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_company',$l)}}
                    </th>
                    <td>
                        {!! $est->insCompany != null ? $est->insCompany->getName($l) : '' !!}
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
            </table>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('surv_pay',$l)}}
                    </th>
                    <td>
                        {{$est->estimater_cost}}
                    </td>
                </tr>
                <tr>
                    <th width='30%'>
                        {{_t('travel',$l)}}
                    </th>
                    <td>
                        {{$est['transport']}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('picture',$l)}}
                    </th>
                    <td>
                        {{$est->gelary}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('disk_money',$l)}}
                    </th>
                    <td>
                        {{$est['officeCost']}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('total',$l)}}
                    </th>
                    <td>
                        {{$est->total + $est->estimater_cost}}
                    </td>
                </tr>
            </table>
            <br>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection