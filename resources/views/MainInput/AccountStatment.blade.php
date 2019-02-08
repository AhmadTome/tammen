<html>
<head>
    <title>ادخال كشف حساب</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />
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
    <div class="col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

        @if(session()->has('notif'))
            <div class="row">
                <div class="alert alert-success" dir="rtl">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ session('notif') }}</strong>
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <!--Body-->




    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال كشف حساب</div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">

                    <form class="form-horizontal" method="post" action="storeAccountStatment">
                        {{ csrf_field() }}
                        <div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">
                            <div class="col-sm-2 pull-right text-left">
                                <select class="form-group-lg carInfo_select" id="carInfo_select">
                                    <option selected disabled="">اختار رقم المركبة</option>
                                    @foreach($carInfo as $car)
                                        <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">


                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="carused" id="carused" placeholder="استعمال المركبة" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="carversion" id="carversion" placeholder="طراز المركبة" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="producedyear" id="producedyear" placeholder="سنة الانتاج" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="bodynumber" id="bodynumber" placeholder="رقم الشاصي" readonly >
                            </div>

                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم الفاتورة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="receiptNo" id="receiptNo" type="text"  placeholder="ادخل رقم الفاتورة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> قيمة الفاتورة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="receiptVal" id="receiptVal" type="text"  placeholder="ادخل قيمة الفاتورة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم الشيك : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="CheckNo" id="CheckNo" type="text"  placeholder="ادخل رقم الشيك" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> قيمة الشيك : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="CheckVal" id="CheckVal" type="text"  placeholder="ادخل رقم قيمة الشيك" required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-success" id="submit" value="إدخال">
                            </div>
                            <label class="control-label col-sm-7"></label>
                        </div>
                    </form>

                </div>


            </div>
        </div>

    </div>

    <!-- end Body -->
    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('footer')

    </div>
    <!--/footer-->



</div>

</body>
</html>
<style>
    .select2-selection {

        background-color: #fff;
        border: 0;
        border-radius: 0;
        color: #555555;
        font-size: 14px;

        min-height: 30px;
        text-align: right;
    }



    .select2-selection__arrow {
        margin: 1px;
    }
</style>
<script>
    $(document).ready(function() {
        $("#carInfo_select").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });

        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();
            $.ajax({
                type:'get',
                url:'{!!URL::to('findCarInfoforGuess')!!}',
                data:{'id':file_nom},
                success:function(data) {
                    $('#filenumber').val(data.data[0].file_num);
                    $('#carused').val(data.data[0].ve_used);
                    $('#carversion').val(data.data[0].ve_version);
                    $('#producedyear').val(data.data[0].ve_produce_year);
                    $('#bodynumber').val(data.data[0].ve_body_num);
                    $('#InsuranceNumber2').val(data.data[0].ve_insurence_num);

                    if(data.data2.length !=0) {
                        $('#carPrice').val(data.data2[0].finalcost);
                    }else{
                        $('#carPrice').val(0);
                    }

                }

            });
        });




        $(document).keydown(function (e) {
            if(event.keyCode == "13"){
                if ($("._details").is(":focus")) {
                }
                else {
                    event.preventDefault();
                    return false;
                }
            }
        });
    });
</script>