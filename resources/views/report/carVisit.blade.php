@extends('report.reportLayout')

@section('title','كشف الزيارات')

@section('content')

    <div class="text-center">
        <h3>
            {{_t('visit_log',$l)}}
        </h3>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>
                    {{_t('car_num',$l)}}
                </th>
                <th>
                    {{_t('file_num',$l)}}
                </th>
                <th>
                    {{_t('car_use',$l)}}
                </th>
                <th>
                    {{_t('body_num',$l)}}
                </th>
                <th>
                    {{_t('car_model',$l)}}
                </th>
                <th>
                    {{_t('production_year',$l)}}
                </th>
                <th>
                    {{_t('car_color',$l)}}
                </th>
            </tr>
            <tr>
                <td>
                    {{$car['ve_num']}}
                </td>
                <td>
                    {{$car['file_num']}}
                </td>
                <td>
                    {{$car['ve_used']}}
                </td>
                <td>
                    {{$car['ve_body_num']}}
                </td>
                <td>
                    {{$car['ve_version']}}
                </td>
                <td>
                    {{$car['ve_produce_year']}}
                </td>
                <td>
                    {{$car['ve_color']}}
                </td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th width="10%" class="gray-back">
                    {{_t('day',$l)}}
                </th>
                <th width='15%' class="gray-back">
                    {{_t('visit_date',$l)}}
                </th>
                <th width="" class="gray-back">
                    {{_t('car_work',$l)}}
                </th>
                <th class="gray-back">
                    {{_t('notes',$l)}}
                </th>
            </tr>
            @foreach($visits as $v)
                <tr>
                    <td>
                        {{$v['vis_day']}}
                    </td>
                    <td>
                        {{$v['vis_date']}}
                    </td>
                    <td>
                        {{$v['vis_vehicle_work']}}
                    </td>
                    <td>
                        {{$v['vis_note']}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection