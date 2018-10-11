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
    <div class='row border-1' style="height:100px;">

    </div>
    <hr>
    <div class="col-xs-3 col-xs-offset-9">
        <table class="table table-bordered">
            <tr>
                <th width="30%">
                    {{_t('car_price',$l)}}
                </th>
                <td>
                    
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
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <th colspan="3">
                        {{_t('total_down_ratio',$l)}}
                    </th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">
                        {{_t("direct_damage",$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
                <tr>
                    <th colspan='3'>
                        {{_t('total_drop_value',$l)}}
                    </th>
                    <td>
                    
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
@endsection