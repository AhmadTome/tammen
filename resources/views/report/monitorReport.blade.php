@extends('report.reportLayout')

@section('title','Personal File Account')

@section('content')

    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
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
                        {{_t('claim_type',$l)}}
                    </th>
                    <th>
                        {{_t('ins_policy',$l)}}
                    </th>
                    <th>
                        {{_t('damage',$l)}}
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
                            {{$est->person_insurances}}
                        </td>
                        <td>
                            {{$est->city}}
                        </td>
                        <td>
                            {{$est->insurance_company}}
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            {{$est->Insurance_policy}}
                        </td>
                        <td>
                            {{$est->DamageType}}
                        </td>
                        <td>
                            
                        </td>
                        <td></td>
                        <td>
                            {{$est->registerDate}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection