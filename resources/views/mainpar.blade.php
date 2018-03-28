

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-link" href="#"> </a>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    تسجيل الخروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">التقارير <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/report/car">تقارير المركبة</a></li>
                        <li><a href="/report/insurance">حساب شركة التأمين</a></li>
                        <li><a href="/report/insurance/benifiter">حساب شركة التامين للمستفيد</a></li>
                        <li><a href="/report/car/parts">تقارير قطع المركبة</a></li>
                        <li><a href="/report/car/bank">تقرير كشف بنك</a></li>
                        <li><a href="/report/monitor">تقرير الرقابة</a></li>
                        <li><a href="/report/images">صور الحادث</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">الاستعلامات و التعديلات <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('personalinformationTransaction') }}">بيانات شخصية</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('carinfoTransaction') }}">بيانات مركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('CarGuessTransaction') }}">تخمين مركبة</a></li>
                        <li role="presentation" class="divider"></li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('maintinanceTransaction') }}"> أعمال صيانة على المركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('mechanicalTransaction') }}">قطع غيار ميكانيك</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('BodyTransaction') }}">قطع غيار هيكل</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('imageTreansaction') }}">صور الحادث</a></li>
                        <li role="presentation" class="divider"></li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('dropcarTransaction') }}">هبوط مركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('carcostTransaction') }}">احتساب سعر مركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('BankTransaction') }}">كشف بنك</a></li>
                        <li role="presentation" class="divider"></li>
                        <!--
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('certificationTransaction') }}">كشف شهادة</a></li>
                        <li role="presentation" class="divider"></li>
                  -->
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">مدخلات ثابتة <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="width:290px; overflow:scroll; height: 500px;">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addEstimater') }}">ادخال مخمن</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addDamage') }}">ادخال ضرر</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{asset('addCertification')}}">ادخال شهادة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addMechParts') }}">ادخال أجزاء ميكانيكية</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{asset('addBodyParts')}}">ادخال أجزاء هيكل</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addMaintinance') }}">ادخال صيانة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addInsuranceCompany') }}">ادخال شركة تأمين</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('garage') }}">ادخال كراج</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addTextStructure') }}">ادخال نص تركيب</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('crossOff') }}">ادخال شطب</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addEstimatevalue') }}">ادخال قيمة تخمين</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addAccedentSide') }}">ادخال طرف حادث</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('dropStatment') }}">ادخال بيان هبوط قيمة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addCity') }}">ادخال مدينة</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">المدخلات الرئيسية <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addpersonalInformation') }}">ادخال بيانات شخصية</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addCarInformation')}}">ادخال بيانات مركبة</a></li>
                        <li role="presentation" class="divider"></li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{asset('carGuess')}}">ادخال تخمين مركبة</a></li>
                        <li role="presentation" class="divider"></li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addcarTransaction')}}"> ادخال العمليات على المركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('dropvalue')}}"> ادخال هبوط المركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{asset('sendMessage')}}">ادخال مراسلة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{asset('SaveLetter')}}">حفظ رسائل للطباعة </a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href={{asset('carCost')}}>احتساب سعر المركبة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href={{asset('BankDisclosure')}}>ادخال كشف بنك</a></li>

                        <!--
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href={{asset('CertificationInput')}}>ادخال كشف شهادة</a></li>
-->

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
