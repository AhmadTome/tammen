@extends("report.reportLayout")

@section('title','print report')

@section('content')

    @include('report.parts.carInfoHeader')

        <div class="text-center gray-back padding">
            {{_t('car_details',$l)}}
        </div>
        <br>
        <div class="col-sm-3">
            @include('report.parts.fileInfo')
        </div>
        <div class="clearfix"></div>
        <br>


        <div class="col-xs-6">
            <table class="table table-bordered cols-2">
                <tbody>
                    <tr>
                        <th>
                            {{_t('acc_date',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('exam_date',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_num',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_model',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_use',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('meter',$l)}}
                        </th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col-xs-6">
            <table class="table table-bordered cols-2">
                <tbody>
                    <tr>
                        <th>
                            {{_t('name',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('ins_name',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('ins_policy',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('exam_place',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_model_num',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('damage',$l)}}
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('body_num',$l)}}
                        </th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div>
                <table class="table table-bordered">
                    <tr>
                        <th colspan="4" class="gray-back">
                            {{_t('car_desc_add',$l)}}
                        </th>
                    </tr>
                    @for($i = 1; $i <= 7; $i += 2)
                        <tr>
                            <th width="10%" class="gray-back">
                                {{$i}}
                            </th>
                            <td width="40%">
                            </td>
                            @if(($i + 1) <= 7)
                                <th width="10%" class="gray-back">
                                    {{$i + 1}}
                                </th>
                                <td width="40%">
                                </td>
                            @endif
                        </tr>
                    @endfor
                </table>
            </div>

            <br>
            <div>
                <p class="pull-right padding border-1">
                    {{_t('damage_desc',$l)}}
                </p>
                <div class="clearfix"></div>
                <div class="box">

                </div>
            </div>
        </div>
        </div>

@endsection