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
            <?php $total = 0; $totalConsum = 0;$taxValue = 0; ?>
            @foreach($parts as $p)
                <tr>
                    <td>
                        {{$p->me_part_name}}
                    </td>
                    <td>
                        {{$p->me_part_type}}
                    </td>
                    <td>
                        {{$p->mech_price}}
                    </td>
                    <td>
                        {{$p->me_mech_count}}
                    </td>
                    <td>
                        <?php 
                            $totalConsum += $p->total_consum; 
                            $total += $p->mech_price * $p->me_mech_count;
                            $taxValue += $p->tax;
                         ?>
                        {{$p->mech_price * $p->me_mech_count}}
                    </td>
                    <td>
                        {{$p->me_part_produce_num}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back" colspan="2">
                    {{_t('total',$l)}}
                </th>
                <td>
                    {{$total}}
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back" colspan="2">
                    {{_t('tax_value',$l)}}
                </th>
                <td>
                    {{$taxValue}}
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back" colspan="2">
                    {{_t('tax_price',$l)}}
                </th>
                <td>
                    {{ $total + $taxValue}}
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back" colspan="2">
                    {{_t('consume_ammount',$l)}}
                </th>
                <td>
                    {{$totalConsum}}
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden;">
                </td>
                <td style="visibility:hidden;">
                </td>
                <th class="gray-back" colspan="2">
                    {{ _t('discount',$l) }}
                </th>
                <td id="discount">
                <input type="number" value="0">
                </td>
            </tr>
            <tr>
                <td style="visibility:hidden">
                </td>
                <td style="visibility:hidden">
                </td>
                <th class="gray-back" colspan="2">
                    {{_t('money_to_pay',$l)}}
                </th>
                <td id="oldValue">{{$total + $taxValue + $totalConsum}}</td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    <br>
@endsection