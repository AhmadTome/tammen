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
                    
                    </td>
                    <td width="50%">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_num',$l)}}
                    </th>
                    <td colspan="2">

                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('car_use',$l)}}
                    </th>
                    <td colspan="2">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('production_year',$l)}}
                    </th>
                    <td colspan="2">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('meter',$l)}}
                    </th>
                    <td colspan="2">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('body_num',$l)}}
                    </th>
                    <td colspan="2">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('visit_pay',$l)}}
                    </th>
                    <td colspan="2">
                    
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
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('exam_date',$l)}}
                    </th>
                    <td colspan="2">

                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('garage_name',$l)}}
                    </th>
                    <td colspan="2">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('name',$l)}}
                    </th>
                    <td colspan="2">
                    
                    </td>
                </tr>
                <tr>
                    <th>
                        {{_t('ins_name',$l)}}
                    </th>
                    <td colspan="2">
                    
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
                    
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-4">
            <table class="table table-bordered">
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
    </div>
@endsection