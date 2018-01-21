<html>
<head>
    <title>ادخال ضرر</title>
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
            @include('logodiv');

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('mainpar');

    </div>

    <!-- start car info-->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12  " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">معلومات المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div >

                    <div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">

                        <div class="col-sm-2 pull-right text-left">
                            <select class="form-control carInfo_select" id="carInfo_select">
                                <option selected disabled="">اختار رقم المركبة</option>
                                @foreach($carInfo as $car)
                                    <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="carnumber" id="carnumber" placeholder="رقم المركبة" disabled required>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" disabled>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="carused" id="carused" placeholder="استعمال المركبة" disabled>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="carversion" id="carversion" placeholder="طراز المركبة" disabled>
                        </div>
                        <div class="col-sm-2 pull-right text-left">
                            <input type="text" class="form-control PanelBodyCssInput " name="producedyear" id="producedyear" placeholder="سنة الانتاج" disabled>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- end car info-->

    <!--Body-->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">احتساب سعر المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="calculateCarCost" >
                        {{ csrf_field() }}
                        <input class="form-control" type="hidden" name="filrnumberhidden" id="filrnumberhidden" value=""  />

                        <div class="form-group">

                            <div class="form-group col-sm-12">
                            <label class="control-label col-sm-2 pull-right">: ادخل سعر المركبة الأصلي </label>
                            <div class="col-sm-4 pull-right">
                                <input type="number" class="form-control" id="orginalPrice" name="orginalPrice">
                            </div>
                            </div>

                            <div class="form-group row col-sm-12" dir="rtl">
                                <label class="control-label col-sm-3 pull-right text-left" for="Attachments">أضرار وفوائد تؤثر على سعر المركبة</label>
                                <div class="col-sm-9 pull-right">
                                    <div class="form-group">

                                        <div class="table-responsive">
                                            <table class="table table-bordered"  id="dynamic_field">
                                                <tr>
                                                    <td><input type="text" name="name[]" placeholder="المسبب" class="form-control name_list" /></td>
                                                    <td><input type="number"  id="percantige[]" name="percantige[]" placeholder="النسبة %" class="form-control name_list"/></td>

                                                    <td>  <select class="form-control " id="limit_select" name="sign[]">
                                                            <option selected disabled="">اختار الاشارة</option>
                                                            <option>+</option>
                                                            <option>-</option>
                                                        </select>
                                                    </td>

                                                    <td><button type="button" name="add" id="add" class="btn btn-success">اضافة المزيد</button></td>

                                                </tr>
                                            </table>

                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="form-group col-sm-12">
                                <div class="col-sm-2 pull-right">
                                </div>

                                <div class="col-sm-3 pull-right">
                                    <input type="button"   class="form-control btn-info" id="calculate" name="" value="احتساب السعر النهائي للمركبة" style="background-color: #57e4ff">
                                </div>
                                <div class="col-sm-2 pull-right">
                                    <input type="text" class="form-control" id="finalcost" name="finalcost" value=" ">
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <input type="submit" class="form-control btn-success" id="" name="" value="تثبيت" >
                                </div>

                                <div class="col-sm-2 pull-right">
                                </div>
                            </div>




                        </div>

                    </form>
                </div>


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

<script>


    $(document).ready(function () {

        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();


            $.ajax({

                type:'get',
                url:'{!!URL::to('findCarInfo')!!}',
                data:{'id':file_nom},
                success:function(data) {
                    console.log('success');

                    console.log(data[0].ve_used);

                    console.log(data.length);
                    $('#filenumber').val(data[0].file_num);
                    $('#carused').val(data[0].ve_used);
                    $('#carversion').val(data[0].ve_version);
                    $('#producedyear').val(data[0].ve_produce_year);
                    $('#carnumber').val(data[0].ve_num);
                    $('#carnumberhidden').val(data[0].ve_num);
                    $('#filrnumberhidden').val(data[0].file_num);

                }
            });

        });

        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ادخل المسبب" class="form-control name_list" /></td><td><input type="number"  id="percantige[]" name="percantige[]" placeholder="النسبة %" class="form-control name_list"/><td> <select class="form-control " id="limit_select" name="sign[]"><option selected disabled="">اختار الاشارة</option> <option>+</option> <option>-</option> </select></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });



    });

</script>