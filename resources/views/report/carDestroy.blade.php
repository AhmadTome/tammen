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
        <div class='col-xs-4 col-xs-offset-1'>
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('production_date',$l)}}
                    </th>
                    <td colspan="2">

                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">

                    </td>
                    <td>
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
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-xs-4 col-xs-offset-2">
            <table class="table table-bordered cols-2">
                <tr>
                    <th>
                        {{_t('acc_date',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('exam_date',$l)}}
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
                    <th>
                        {{_t('car_use',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('meter',$l)}}
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
                        {{_t('name',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_name',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_policy',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_model_num',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('damage',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('body_num',$l)}}
                    </th>
                    <td>
                    
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
                {{_td(3)}}
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
@endsection