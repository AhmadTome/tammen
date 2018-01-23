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
                {{_td(7)}}
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
            <tr>
                {{_td(4)}}
            </tr>
        </table>
    </div>
@endsection