@extends("report.reportLayout")

@section('title','print report')

@section('content')

    @include('report.parts.carInfoHeader')

        <div class="text-center gray-back padding">
            {{_t('car_details',$l)}}
        </div>
        <br>
        <div class="col-xs-5">
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
                        <td>
                            {{$est['accidantDate']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('exam_date',$l)}}
                        </th>
                        <td>
                            {{$est['checkDate']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_num',$l)}}
                        </th>
                        <td>
                            {{$car['ve_num']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_model',$l)}}
                        </th>
                        <td>
                            {{$car['ve_version']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_use',$l)}}
                        </th>
                        <td>
                            {{$car['ve_used']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('meter',$l)}}
                        </th>
                        <td>
                            {{$car['ve_speedometer']}}
                        </td>
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
                        <td>
                            {{$est['persone_name']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('ins_name',$l)}}
                        </th>
                        <td>
                            {{$est['person_insurances']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('ins_policy',$l)}}
                        </th>
                        <td>
                            {{$car['ve_insurence_num']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('exam_place',$l)}}
                        </th>
                        <td>
                            {{$est['Garage']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('car_model_num',$l)}}
                        </th>
                        <td>
                            {{$car['ve_version_num']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('damage',$l)}}
                        </th>
                        <td>
                            {{$est['DamageType']}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{_t('body_num',$l)}}
                        </th>
                        <td>
                            {{$car['ve_body_num']}}
                        </td>
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
                    <?php
                        $atts = preg_split ('/[\s*,\s*]*,+[\s*,\s*]*/',$car['attachments']);
                    ?>
                    @for($i = 0; $i < count($atts);$i++)
                        <tr>
                            <th width="10%" class="gray-back">
                                {{$i + 1}}
                            </th>
                            <td width="40%">
                                {{$atts[$i]}}
                            </td>
                            <?php $i++; ?>
                            @if($i < count($atts))
                                <th width="10%" class="gray-back">
                                    {{$i + 1}}
                                </th>
                                <td width="40%">
                                    {{$atts[$i]}}
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