

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
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">التقارير <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">First Item</a></li>
                        <li><a href="#">Second Item</a></li>
                        <li><a href="#">Third Item</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">التعديلات <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">First Item</a></li>
                        <li><a href="#">Second Item</a></li>
                        <li><a href="#">Third Item</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">الاستعلامات <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">First Item</a></li>
                        <li><a href="#">Second Item</a></li>
                        <li><a href="#">Third Item</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">مدخلات ثابتة <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addEstimater') }}">ادخال مخمن</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ asset('addDamage') }}">ادخال ضرر</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/finalProject/classes/addCertificate.php">ادخال شهادة</a></li>
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
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/SmartCity/SAdmin/AccountInfo.php">ادخال مراسلة</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href={{asset('carCost')}}>احتساب سعر المركبة</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>