@extends('report.reportLayout')

@section('title','تقرير قطع غيار هيكل')

@section('content')

    <div class="text-center border-2 gray-back">
        <h3>
            <b>
                {{_t('car_down_table',$l)}}
            </b>
        </h3>
    </div>
    <br>
    <div>
        @include('report.parts.carInfoHeader')
    </div>
    <Br>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="gray-back">
                        {{_t('car_1',$l)}}
                    </th>
                    <th class="gray-back">
                        {{_t('third_party_stmnt',$l)}}
                    </th>
                    <th class="gray-back">
                        {{_t('car_2',$l)}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr style='height:200px;'>
                    <td>
                        {{$drops[0]->firstCar}}
                    </td>
                    <td>
                    
                    </td>
                    <td>
                        {{$drops[0]->secondCar}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="col-xs-3 col-xs-offset-9">
        <table class="table table-bordered">
            <tr>
                <th width="30%">
                    {{_t('car_price',$l)}}
                </th>
                <td>
                    {{$drops[0]->finalprice}}
                </td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    <br>
    <div class='col-xs-6 col-xs-offset-6'>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        {{_t('part',$l)}}
                    </th>
                    <th>
                        {{_t('maintenece',$l)}}
                    </th>
                    <th>
                        {{_t('part_count',$l)}}
                    </th>
                    <th>
                        {{_t('work_ratio',$l)}}
                    </th>
                    <th>
                        {{_t('down_ratio')}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $totalDrop = 0;
                ?>
                @foreach($drops as $drop)
                    <tr>
                        <td>
                            {{$drop->bodyPart->getName($l)}}
                        </td>
                        <td>
                            {{$drop->maintPart->getName($l)}}
                        </td>
                        <td>
                            {{$drop->count}}
                        </td>
                        <td>
                            {{$drop->percantige / 100}}
                        </td>
                        <td>
                            % {{$drop->percantige}}
                            <?php $totalDrop += $drop->percantige; ?>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="3">
                        {{_t('total_down_ratio',$l)}}
                    </th>
                    <td>
                        % {{ $totalDrop }}
                    </td>
                </tr>
                <tr>
                    <th colspan="3">
                        {{_t("direct_damage",$l)}}
                    </th>
                    <td>
                        {{$drop->maintinanceCost}}
                    </td>
                </tr>
                <tr>
                    <th colspan='3'>
                        {{_t('total_drop_value',$l)}}
                    </th>
                    <td>
                        {{ ($totalDrop / 100) * $drop->finalprice}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
@endsection