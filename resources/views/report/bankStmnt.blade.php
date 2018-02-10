@extends('report.reportLayout')

@section('title','شهادة تثمين')

@section('content')

    <h3 class="text-center">
        <b>
            <u>
                {{_t('bank_stmnt_title',$l)}}
            </u>
        </b>
    </h3>
    <div class="row">
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">
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

                    </td>
                    <td width="40%">
                    
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('name',$l)}}
                    </th>
                    <td>
                        {{$person->name}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('address',$l)}}
                    </th>
                    <td>
                        {{$person->address}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class='row border-2'>
        <h3 class='text-center margin-0'>
            {{_t('file_num',$l)}}: {{$carInfo->file_num}}
        </h3>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('car_num',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_num}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('body_num',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_body_num}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_model',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_version}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('production_year',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_produce_year}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_use',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_used}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('weight',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_weight}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('engine_size',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_engin_size}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('car_owner_name',$l)}}
                    </th>
                    <td>

                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_owner_id',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('walk_power',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_power_push}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_color',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_color}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('gas_type',$l)}}
                    </th>
                    <td>
                        {{$carInfo->ve_gas_type}}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('pass_num',$l)}}
                    </th>
                    <td>
                        {{$carInfo->seat_num}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="border-1">
        <h3 class="text-center margin-0">
            {{_t('car_exam_result',$l)}}
        </h3>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('front_face',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('suspen_device',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('engine',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('gear_box',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        2
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        4
                    </th>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <th>
                        6
                    </th>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-6">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('front',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('right_side',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('left_side',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('back',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        3
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>
                        5
                    </th>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="border-1">
        <h3 class='text-center margin-0'>
            {{_t('car_attachments',$l)}}
        </h3>
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <td width="20%" style="padding-top: 10px !important;padding-bottom: 10px !important;">
                {{_t('guess_val',$l)}}
            </td>
            <td>
            
            </td>
        </tr>
        <tr>
            <td style="padding-top: 20px !important;padding-bottom: 20px !important;">
                {{_t('notes',$l)}}
            </td>
            <td>
            
            </td>
        </tr>
    </table>

@endsection