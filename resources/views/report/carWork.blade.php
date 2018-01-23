@extends('report.reportLayout')

@section('title','أعمال مركبة')

@section('content')

    <div class="text-center border-1 gray-back">
        <h3>
            {{_t('car_work',$l)}}
        </h3>
    </div>
    <Br>
    @include('report.parts.carInfoHeader')
    <br>
    <div class="col-xs-8 col-xs-offset-4">
        <table class="table table-bordered">
            <tr>
                <th>
                    {{_t('maintain',$l)}}
                </th>
                <th>
                    {{_t('value_ammount',$l)}}
                </th>
                <th>
                    {{_t('details',$l)}}
                </th>
            </tr>
            <tr>
                {{_td(3)}}
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    <br>
    <div class="col-xs-6 col-xs-offset-6">        
        <table class="table table-bordered">
            <tr>
                <th width="40%" class="gray-back">
                    {{_t('total',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <th width="40%" class="gray-back">
                    {{_t('tax_value',$l)}}
                </th>
                <td>
                
                </td>
            </tr>
            <tr>
                <th width="40%" class="gray-back">
                    {{_t('money_to_pay',$l)}}
                </th>
                <td>
                </td>
            </tr>
        </table>
    </div>

    <div class="clearfix">
    </div>

@endsection