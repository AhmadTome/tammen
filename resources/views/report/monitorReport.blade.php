@extends('report.reportLayout')

@section('title','تقرير الرقابة')

@section('content')

    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        {{_t('car_num',$l)}}
                    </th>
                    <th>
                        {{_t('ins_name',$l)}}
                    </th>
                    <th>
                        {{_t('address',$l)}}
                    </th>
                    <th>
                        {{_t('ins_company',$l)}}
                    </th>
                    <th>
                        {{_t('ins_policy',$l)}}
                    </th>
                    <th>
                        {{_t('damage_rate',$l)}}
                    </th>
                    <th>
                        {{_t('claim_money',$l)}}
                    </th>
                    <th>
                        {{_t('report_fees',$l)}}
                    </th>
                    <th>
                        {{_t('reg_date',$l)}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($ests as $est)
                    <tr>
                        <td>
                            {{$est->fileNumber}}
                        </td>
                        <td>
                            {{$est->person_insurances}}
                        </td>
                        <td>
                            {!! $est->cityObject != null ? $est->cityObject->getName($l) : '' !!}
                        </td>
                        <td>
                            {!! $est->insCompany != null ? $est->insCompany->getName($l) : '' !!}
                        </td>
                        <td>
                            {{$est->Insurance_policy}}
                        </td>
                        <td>
                            {{$est->DamagePercantige }} %
                        </td>
                        <td>
                            {{$est->netTotal}}
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            {{$est->registerDate}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection