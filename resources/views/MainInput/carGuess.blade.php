<html>
<head>
    <title>تخمين المركبة</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container-fluid">
    <!-- Background pic -->
    <div class="BackImageSuperAd" ></div>
    <!-- End of Background pic -->

    <!--
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-right" >
                <a href="" class="btn btn-danger exit" title="Exit"><b>Exit</b></a>
            </div>
        </div>
    -->
    <div class="row headrDiv">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
            @include('logodiv')

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('mainpar')

    </div>

    <!--Body-->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

    <div class="panel panel-default">
        <div class="panel-heading text-center PanelHeadingCss">ادخال تخمين مركبة</div>
        <div class="panel-body PanelBodyCss">
            <form class="form-horizontal" method="post" action="#">
            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">   لحضرة : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="ToPerson" type="text"  placeholder="ادخل الاسم"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">   رقم الادعاء : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="ClaimNumber" type="text"  placeholder="ادخل رقم الادعاء"/>
                </div>
            </div>


            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" >شركة التأمين :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="insuranceCompany_select">
                        <option>Ahmad</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="insuranceCompany" class="form-control PanelBodyCssInput " id="insuranceCompany" placeholder="">
                </div>


            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" > المحافظة :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="City_select">
                        <option>Tulkarm</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="text" class="form-control PanelBodyCssInput " id="City" placeholder="">
                </div>


            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" > رقم الكود :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="codeNumber_select">
                        <option>0</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="text" class="form-control PanelBodyCssInput " id="codeNumber" placeholder="">
                </div>


            </div>


            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" >  تحديد :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="limit_select">
                        <option>0</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="text" class="form-control PanelBodyCssInput " id="limit" placeholder="">
                </div>


            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">    كشف اضرار : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="coverDamage" type="text"  placeholder="ادخل  كشف الاضرار"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  تاريخ التسجيل  : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="dateRegister" type="date" style="text-align: right" />
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  تاريخ الحادث  : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="accidentDate" type="date" style="text-align: right" />
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  تاريخ الفحص  : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="checkDate" type="date" style="text-align: right" />
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">   رقم بوليصة التأمين : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="InsuranceNumber2" type="text"  placeholder="ادخل رقم بوليصة التأمين"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" >  نوع الضرر :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="damaeType_select">
                        <option>0</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="text" class="form-control PanelBodyCssInput " id="damageType" placeholder="">
                </div>


            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" >  رقم المخمن :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="GuessNumber_select">
                        <option>0</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="text" class="form-control PanelBodyCssInput " id="GuessNumber" placeholder="">
                </div>


            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left" >  رقم الكراج :</label>
                <div class="col-sm-4 pull-right text-left">
                    <select class="form-control " id="garageNumber_select">
                        <option>0</option>
                    </select>
                </div>
                <div class="col-sm-4 pull-right text-left">
                    <input type="text" class="form-control PanelBodyCssInput " id="garageNumber" placeholder="">
                </div>


            </div>


            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">سعر المركبة   : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="carPrice" type="text"  placeholder="ادخل سعر المركبة"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">     سفريات : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="visit" type="text"  placeholder="ادخل سفريات"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">تصوير  : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="photograper" type="text"  placeholder="ادخل تصوير  "/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">مصاريف مكتب : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="officeCost" type="text"  placeholder="ادخل مصاريف المكتب"/>
                </div>
            </div>


            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">     مبلغ الاعمال - صيانة : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="maintenancePrice" type="text"  placeholder="ادخل  مبلغ الاعمال - الصيانة "/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">     ثمن قطع هيكل : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="bodyPrice" type="text"  placeholder="ادخل ثمن قطع الهيكل"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">   ثمن غيار ميكانيك : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="mecanicPrice" type="text"  placeholder="ادخل ثمن غيار ميكانيك"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">   مبلغ نسبة الهبوط : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="dropPercantigePrice" type="text"  placeholder="ادخل مبلغ نسبة الهبوط"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">    نسبة الهبوط : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="dropPercantige" type="text"  placeholder="ادخل نسبة الهبوط"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left"> النسبة المئوية للمخمن : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="Guesspersantige" type="text"  placeholder="ادخل  النسبة المئوية للمخمن"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left"> نسبة الضررالفني : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="TechnicalDamage" type="text"  placeholder="ادخل نسبة الضرر الفني"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left"> ثمن الحطام : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="DebrisPrice" type="text"  placeholder="ادخل ثمن الحطام"/>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left"> اجور زائدة : </label>
                <div class="col-sm-8 pull-right">
                    <input class="form-control" id="dropPercantige" type="text"  placeholder="ادخل مبلغ الاجور الزائدة"/>
                </div>
            </div>


            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  وصف الضرر : </label>

                <div class="col-sm-8 pull-right">
                    <textArea  class="form-control PanelBodyCssInput" rows="5" id="DamegeDescription" placeholder="ادخل وصف الضرر"></textArea>
                </div>
            </div>


            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  ملاحظات : </label>

                <div class="col-sm-8 pull-right">
                    <textArea  class="form-control PanelBodyCssInput" rows="5" id="noteGuess" placeholder="ادخل ملاحظات"></textArea>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  ملاحظات تخمين المركبة: </label>

                <div class="col-sm-8 pull-right">
                    <textArea class="form-control PanelBodyCssInput" rows="5" id="noteGuessCar" placeholder=" ادخل ملاحظات تخمين المركبة"></textArea>
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <label class="control-label col-sm-2 pull-right text-left">  المرفقات : </label>

                <div class="col-sm-8 pull-right">
                    <textArea class="form-control PanelBodyCssInput" rows="5" id="AttachmentsGuess" placeholder="ادخل المرفقات"></textArea>
                </div>
            </div>


            <div class="form-group row" dir="rtl" >
                <label class="control-label col-sm-2 pull-right text-left">:  شطب المركبة لحضرة</label>
                <div class="col-sm-4 pull-right text-left">
                    <input type="crossOffNamer" class="form-control PanelBodyCssInput" value="مدير سلطة الترخيص المحترم" id="crossOffNamer">

                </div>
                <div class="col-sm-4 pull-right text-left">
                    <textArea type="crossOffNote" class="form-control PanelBodyCssInput" rows="5" id="crossOffNote" ></textArea>
                </div>

            </div>
            </form>
            </div>


    </div>

    </div>




    <!-- end Body -->
    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('footer');

    </div>
    <!--/footer-->



</div>

</body>
</html>