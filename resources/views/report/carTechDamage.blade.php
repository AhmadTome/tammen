@extends('report.reportLayout')

@section('title','جدولة الأضرار الفنية')

@section('content')

    <div class="text-center border-1 gray-back">
        <h3>
            {{_t('tech_damage_table',$l)}}
        </h3>
    </div>
    <Br>
    @include('report.parts.carInfoHeader')
    <br>
    <div class='row border-1' style="height:100px;padding-right: 20px;">
        {{$drops[0]->dropStatment}}
    </div>
    <hr>
    <div class="col-xs-3 col-xs-offset-9">
        <table class="table table-bordered">
            <tr>
                <th width="30%">
                    {{_t('car_price',$l)}}
                </th>
                <td>
                    {{$car->cost->finalcost}}
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
                </tr>
            </thead>
            <tbody>
            <?php
            $totalDrop = 0;
            ?>
            @foreach($drops as $drop)
                <tr>
                    <td>
                        {!! $drop->bodyPart != null ? $drop->bodyPart->getName($l) : '' !!}
                    </td>
                    <td>
                        {!! $drop->mainPart != null ? $drop->maintPart->getName($l) : '' !!}
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
                        {{_t('damagePercentSummation',$l)}}
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
              <!--
                <tr>
                    <th colspan='3'>
                        {{_t('total_drop_value',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                -->
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
@endsection