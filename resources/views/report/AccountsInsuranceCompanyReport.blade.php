@extends('report.reportLayout')

@section('title','تقرير حساب شركة تأمين')

@section('content')

    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    {{_t('file_num',$l)}}
                </th>
                <th>
                    {{_t('car_num',$l)}}
                </th>
                <th>
                    {{_t('claim_num',$l)}}
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

                <th>
                    {{_t('bill_number',$l)}}
                </th>
                <th>
                    {{_t('Invoice_value',$l)}}
                </th>
                <th>
                    {{_t('check_number',$l)}}
                </th>
                <th>
                    {{_t('check_value',$l)}}
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
                        {{$est->ve_num}}
                    </td>

                    <td>
                        {{$est->climeNumber}}
                    </td>
                    <td>
                        {{$est->DamagePercantige }} %
                    </td>
                    <td>
                        @if($est->DamageCost > 0  )
                            {{$est->carPrice - $est->DamageCost}}
                        @else
                            {{($est->finalPriceForMaintinance) +(($est->summation / 100) * $est->carPrice)}}
                        @endif
                    </td>
                    <td>
                        {{$est->netTotal}}
                    </td>
                    <td>
                        {{$est->registerDate}}
                    </td>


                    <td>
                        {{$est->receiptNo}}
                    </td>
                    <td>
                        {{$est->receiptVal}}
                    </td>
                    <td>
                        {{$est->CheckNo}}
                    </td>
                    <td>
                        {{$est->CheckVal}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection