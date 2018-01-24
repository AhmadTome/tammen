@extends('report.reportLayout')

@section('title','تقرير قطع غيار هيكل')

@section('content')

    <div class="text-center border-2 gray-back">
        <h3>
            <b>
                {{_t('mech_part_change',$l)}}
            </b>
        </h3>
    </div>
    <br>
    <div>
        @include('report.parts.carInfoHeader')
    </div>
    <Br>
    <div class="col-xs-8 col-xs-offset-4">
        <table class="table table-bordered">
            <tr>
                <th>
                    {{_t('car_parts',$l)}}
                </th>
                <th>
                    {{_t('part_type',$l)}}
                </th>
                <th>
                    {{_t('part_price',$l)}}
                </th>
                <th>
                    {{_t('count',$l)}}
                </th>
                <th>
                    {{_t('price',$l)}}
                </th>
                <th>
                    {{_t('part_code',$l)}}
                </th>
            </tr>
            <tr>
                {{_td(6)}}
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back">
                    {{_t('total',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back">
                    {{_t('tax_value',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back">
                    {{_t('tax_price',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back">
                    {{_t('consume_ammount',$l)}}
                </th>
                <td>
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back">
                    {{_t('money_to_pay',$l)}}
                </th>
                <td>
                </td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    <br>
@endsection