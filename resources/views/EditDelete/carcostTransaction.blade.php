<html>
<head>
    <title>استعلام وتعديل سعر مركبة</title>
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
            <div class="panel-heading text-center PanelHeadingCss">استعلام وتعديل على سعر المركبة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="Editcarcost" >
                        {{ csrf_field() }}
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
                        <input class="form-control" type="hidden" name="filrnumberhidden" id="filrnumberhidden" value=""  />

                        <div class="form-group">

                            <div class="form-group col-sm-12">
                                <label class="control-label col-sm-2 pull-right">: ادخل سعر المركبة الأصلي </label>
                                <div class="col-sm-4 pull-right">
                                    <input type="text"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||
   event.charCode == 46 || event.charCode == 0 " class="form-control" id="orginalPrice" name="orginalPrice">
                                </div>
                            </div>

                            <div class="form-group row col-sm-12" dir="rtl">
                                <label class="control-label col-sm-3 pull-right text-left" for="Attachments">أضرار وفوائد تؤثر على سعر المركبة</label>
                                <div class="col-sm-9 pull-right">
                                    <div class="form-group">

                                        <div class="table-responsive">
                                            <table class="table table-bordered"  id="dynamic_field">
                                                <tr>


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
                                    <label class="form-control pull-right text-center">السعر النهائي للمركبة</label>
                                </div>
                                <div class="col-sm-2 pull-right">
                                    <input type="text" class="form-control" id="finalcost" name="finalcost" readonly>
                                </div>
                                <div class="col-sm-2 pull-right">
                                </div>
                            </div>

                            <div class="form-group row col-sm-12 ">

                                <div class="col-sm-4 pull-right">
                                    <button type="submit" class="btn btn-primary"  id="Edit">تعديل</button>
                                </div>

                                <div class="col-sm-3 pull-right">
                                    <button type="button" class="btn btn-danger delete-modal"  id="Delete">حذف</button>

                                </div>

                            </div>

                            <!-- Start Model -->

                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body" >


                                            <div class="deleteContent" dir="rtl">
هل أنت متأكد من أنك تريد حذف احتساب سعر المركبة الخاصة بملف  <span class="dname"></span> ؟
                                                <span class="hidden did"></span>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn actionBtn" data-dismiss="modal">
                                                    <span id="footer_action_button" > </span>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                    <span></span> Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Model -->


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

<script>


    $(document).ready(function () {
        var i = 1;
        var ID;
        $(document).on('click', '.delete-modal', function() {

            $('#footer_action_button').text(" Delete");
            // $('#footer_action_button').removeClass('glyphicon-check');
            //$('#footer_action_button').addClass('glyphicon-trash');
            // $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Delete');
            $('.EditContent').hide();
            $('.did').text($('#name'));
            $('.deleteContent').show();
            $('.dname').html(ID);
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletcarprice')!!}',
                data: {
                    'id':ID
                },
                success: function(data) {
                    location.reload();
                },
                error:function (data) {
                    console.log('error')
                }

            });
        });
        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();
            ID=$(this).val();

            $.ajax({

                type:'get',
                url:'{!!URL::to('getcarcostinfo')!!}',
                data:{'id':file_nom},
                success:function(data) {

                if(data != ""){

                    $('#filenumber').val(data.data[0].file_num);
                    $('#carused').val(data.data[0].ve_used);
                    $('#carversion').val(data.data[0].ve_version);
                    $('#producedyear').val(data.data[0].ve_produce_year);
                    $('#carnumber').val(data.data[0].ve_num);
                    $('#carnumberhidden').val(data.data[0].ve_num);
                    $('#filrnumberhidden').val(data.data[0].file_num);
                    $('#orginalPrice').val(data.data2[0].orginalcost);
                    $('#finalcost').val(data.data2[0].finalcost);


                    var table=document.getElementById("dynamic_field");

                    var count = $('#dynamic_field tr').length;


                    for(var k=0;k<count-1;k++)
                        document.getElementById("dynamic_field").deleteRow(1);



                    var s = data.data2[0].causes;
                    var arr=s.split('/');
                    var count=0;
                    for (var j=0 ; j<arr.length ;j++){

                        var str=arr[j].split('@');
                        i++;
                        if(str[2] == '+')
                        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ادخل المسبب" class="form-control name_list"  value="'+str[0] +'" /></td><td><input type="number"  id="percantige[]" name="percantige[]" placeholder="النسبة %" class="form-control name_list"  value="'+str[1] +'"/><td> <select class="form-control " id="limit_select" name="sign[]"> <option selected>+</option> <option>-</option> </select></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');

                        else
                            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ادخل المسبب" class="form-control name_list"  value="'+str[0] +'" /></td><td><input type="number"  id="percantige[]" name="percantige[]" placeholder="النسبة %" class="form-control name_list"  value="'+str[1] +'"/><td> <select class="form-control " id="limit_select" name="sign[]"> <option >+</option> <option selected>-</option> </select></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');

                    }



                      }
                      else{
                    $('#filenumber').val("");
                    $('#carused').val("");
                    $('#carversion').val("");
                    $('#producedyear').val("");
                    $('#carnumber').val("");
                    $('#carnumberhidden').val("");
                    $('#filrnumberhidden').val("");
                    $('#orginalPrice').val("");
                    $('#finalcost').val("");
                    var table=document.getElementById("dynamic_field");

                    var count = $('#dynamic_field tr').length;


                    for(var k=0;k<count-1;k++)
                        document.getElementById("dynamic_field").deleteRow(1);

                    alert("لم يتم احتساب السعر النهائي لهذه المركبة");
                }
                }
            });

        });


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