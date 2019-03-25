@extends('report.reportLayout')

@section('title','كشف بنك')

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
                    <td id="discount" colspan="2">
                        <input id="breakdown" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">
                        ت
                    </td>
                    <td>
                        {{$carInfo['file_num']}}
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
                        {{$bankInfo->personowner}}

                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_owner_id',$l)}}
                    </th>
                    <td>
                        {{$bankInfo->idpersonowner}}

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
        <?php
            $allChecking = preg_split('@/@',$bankInfo->checking, NULL, PREG_SPLIT_NO_EMPTY);
            $totalCount = count($allChecking);
            $firstTable = ceil($totalCount / 2);
        ?>
        <div class="col-xs-6 pull-right">
            <table class="table table-bordered">
                @for($i = 0; $i < $firstTable; $i++)
                    <?php $col = explode("-",$allChecking[$i]); ?>
                <tr>
                    <th width="30%">

                        {{$col[0]}}
                    </th>
                    <td>
                        {{$col[1]}}
                    </td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-xs-6 pull-right">
            <table class="table table-bordered">
            @for($i = $firstTable; $i < $totalCount; $i++)
                <?php $col = explode("-",$allChecking[$i]); ?>
                <tr>
                    <th width="30%">

                        {{$col[0]}}
                    </th>
                    <td>
                        {{$col[1]}}
                    </td>
                </tr>
            @endfor
            </table>
        </div>
    </div>
    <div class="border-1">
        <h3 class='text-center margin-0'>
            {{_t('car_attachments',$l)}}
        </h3>
    </div>
    <br>
    <div class="row">
        <?php 
            $attachments = preg_split('@,@',$carInfo->attachments, NULL, PREG_SPLIT_NO_EMPTY); 
            $totalCount = count($attachments);
            $firstTable = ceil($totalCount / 2);
        ?>
        <div class="col-xs-6 pull-right">
            <table class="table table-bordered">
                @for($i = 0; $i < $firstTable; $i++)
                    <tr>
                        <td>
                            {{$attachments[$i]}}
                        </td>
                    </tr>
                @endfor
            </table>
        </div>
        <div class="col-xs-6 pull-right">
            <table class="table table-bordered">
                @for($i = $firstTable; $i < $totalCount; $i++)
                    <tr>
                        <td>
                            {{$attachments[$i]}}
                        </td>
                    </tr>
                @endfor
            </table>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <td width="20%" style="padding-top: 10px !important;padding-bottom: 10px !important;">
                {{_t('guess_val',$l)}}
            </td>
            <td>
                {{$bankInfo->estimatorvalue}}
            </td>
        </tr>
        <tr>
            <td style="padding-top: 20px !important;padding-bottom: 20px !important;">
                {{_t('notes',$l)}}
            </td>
            <td>
                {{$est->EstimateNote}}
            </td>
        </tr>
    </table>

@endsection