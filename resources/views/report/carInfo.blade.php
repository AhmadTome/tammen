@extends("report.reportLayout")

@section('title','print report')

@section('content')

    <div class="row border-2 padding">
        <table class="table table-bordered black-header">
            <thead>
                <tr>
                    <th>
                        رقم المركبة
                    </th>
                    <th>
                        ملف رقم
                    </th>
                    <th>
                        إستعمال المركبة
                    </th>
                    <th>
                        النوع والطراز
                    </th>
                    <th>
                        سنة الانتاج
                    </th>
                    <th>
                        رقم الشاصي
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center gray-back padding">
            بيانات المركبة
        </div>
        <br>
        <div class="col-sm-3">
            <table class="table table-bordered">
                <tr>
                    <th width="30%" class="gray-back">
                        تاريخ الاصدار
                    </th>
                    <td width="70%" colspan="2">
                        
                    </td>
                </tr>
                <tr>
                    <th class="gray-back" width="30%">
                        ملف رقم
                    </th>
                    <td width="20%">

                    </td>
                    <td width="50%">

                    </td>
                </tr>
            </table>
        </div>
        <div class="clearfix"></div>
        <br>


        <div class="col-xs-6">
            <table class="table table-bordered cols-2">
                <tbody>
                    <tr>
                        <th> تاريخ الحادث </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> تاريخ الفحص </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> رقم المركبة </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>طراز المركبة</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>إستعمال المركبة</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>العداد</th>
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
                            الإسم
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            إسم المؤمن
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            رقم بوليصة التأمين
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            مكان الفحص
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            رقم طراز المركبة
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            الضرر
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>
                            رقم الشاصي
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
                            مواصفات المركبة وإضافات
                        </th>
                    </tr>
                    @for($i = 1; $i <= 7; $i += 2)
                        <tr>
                            <th width="10%" class="gray-back">
                                {{$i}}
                            </th>
                            <td width="40%">
                            </td>
                            <th width="10%" class="gray-back">
                                {{$i + 1}}
                            </th>
                            <td width="40%">
                            </td>
                        </tr>
                    @endfor
                </table>
            </div>

            <br>
            <div>
                <p class="pull-right padding border-1">
                    وصف الضرر
                </p>
                <div class="clearfix"></div>
                <div class="box">

                </div>
            </div>
        </div>
        </div>

@endsection