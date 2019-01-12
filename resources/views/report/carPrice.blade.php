@extends('report.reportLayout')

@section('title','حساب ثمن المركبة')

@section('content')

    @include('report.parts.carInfoHeader')
    <div class="row">
        <div class='col-xs-4 col-xs-offset-1'>
            <table class="table table-bordered">
                <tr>
                    <th width="30%">
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
                        ت
                    </td>
                    <td>
                        {{ $car['file_num'] }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <th class="gray-back" colspan="5">
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
            <th class="gray-back">
                {{_t('down_calc',$l)}}
            </th>
            <th class="gray-back">
                {{_t('car_price',$l)}}
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
        <td>
            {{ (($car->total_drop / 100) * $car->cost->finalcost) }}
        </td>
        <td>
            {{$car->cost->finalcost}}
        </td>
        </tr>
    </table>
    <br>






    <div class="row">
        <div class="col-xs-4 col-xs-offset-8">
            <table class="table table-bordered" >
                <tr>
                    <th class="gray-back" >
                        {{_t('direct_damage_total',$l)}}
                    </th>
                    <td>
                        <div id="directDamage">{{ $car->total_maintenance + $car->total_body_work + $car->total_mechanic }}</div>
                    </td>
                </tr>
                <tr>
                    <th class="gray-back">
                        {{_t('down_calc',$l)}}
                    </th>
                    <td>
                        <div id="down_calc"> {{ (($car->total_drop / 100) * $car->cost->finalcost) }}</div>
                    </td>
                </tr>
                <tr>
                    <th class="gray-back" width="100px;">
                        {{_t('Breakdown',$l)}}
                    </th>
                    <td id="discount">
                        <input id="breakdown" type="number" value="0">
                    </td>
                </tr>
                <tr>
                    <th class="gray-back">
                        {{_t('damage_rate',$l)}}
                    </th>
                    <td>
                        <span style="width: 140px;" id="damage_rate">{{$est->DamagePercantige}}</span> %
                    </td>
                </tr>

                <tr>
                    <th class="gray-back">
                        {{_t('total_sum',$l)}}
                    </th>
                    <td>
                        <div id="totalsum">{{ $car->total_maintenance + $car->total_body_work + $car->total_mechanic + (($car->total_drop / 100) * $car->cost->finalcost)}} </div>
                    </td>
                </tr>

            </table>
        </div>
    </div>









<!--
    <div class="row">
        <div class="col-xs-8 col-xs-offset-4">
            <table class="table table-bordered">
                <tr class="gray-back">
                    <th width="50%" colspan="2">
                        {{_t('total_inc_down',$l)}}
                    </th>
                    <th width="50%">
                        {{_t('direct_damage_total',$l)}}
                    </th>
                </tr>
                <tr>
                    <td width="50%" colspan="2">
                        @if($car->total_drop == 0)
                            {{$car->cost->finalcost}}
                        @else
                            {{ $car->total_maintenance + $car->total_body_work + $car->total_mechanic + (($car->total_drop / 100) * $car->cost->finalcost) }}
                        @endif
                    </td>
                    <td>
                        {{ $car->total_maintenance + $car->total_body_work + $car->total_mechanic }}
                    </td>
                </tr>
                <tr>
                    <th class="gray-back">
                        {{_t('damage_rate',$l)}}
                    </th>
                    <td>
                        {{$est->DamagePercantige}} %
                    </td>
                </tr>
            </table>
        </div>
    </div>

    -->


    <br>
    <div class="row">
        <div class="col-xs-9">
            <h4 class="gray-back border-1 padding pull-right margin-0">
                {{_t('car_guess_notes',$l)}}
            </h4>
            <div class="clearfix">
            </div>
            <div class="box padding">
                {!! nl2br(e($est->carEstimateNote )) !!}

            </div>
        </div>
        <div class="col-xs-3">
            <h4 class="gray-back border-1 padding pull-right margin-0">
                {{_t('attachments',$l)}}
            </h4>
            <div class="clearfix">
            </div>
            <div class="box padding">
                {!! nl2br(e($est->Attachment )) !!}

            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        var damage_rate = parseFloat($("#damage_rate").html());
        $("#damage_rate").html(damage_rate.toFixed(2))

        $("#breakdown").on("change keyup", function () {
            var breakdown = $(this).val();
            if(isNaN(breakdown) || breakdown == ""){
                breakdown = 0;
            }

            var directDamage = parseInt($("#directDamage").html());
            var down_calc = parseInt($("#down_calc").html());
            $("#totalsum").html( parseInt(breakdown) + directDamage +  down_calc );

        })
    })
</script>