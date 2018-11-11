<html>
<head>
    <title>استعلام عن مركبة</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />
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
            <div class="panel-heading text-center PanelHeadingCss"> بيانات مركبة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="EditCarInformation" >
                        {{ csrf_field() }}

                        <div class="form-group row  " dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> اختار رقم المركبة  : </label>
                        <div class="col-sm-8 pull-right text-left">
                            <select class="form-control carInfo_select" id="carInfo_select" name="carInfo_select">
                                <option selected disabled="">اختار رقم المركبة</option>
                                @foreach($carInfo as $car)
                                    <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                                @endforeach
                            </select>
                        </div>


                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم الملف  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="fileNumber" id="fileNumber" type="text"  placeholder="ادخل رقم الملف" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carNumber" id="carNumber" type="text"  placeholder="ادخل رقم المركبة" required/>
                            </div>
                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> استعمال المركبة: </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carused" id="carused" type="text"  placeholder="ادخل استعمال المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  رقم الشصي : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="bodyNumber" id="bodyNumber" type="text"  placeholder="ادخل رقم الشصي" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم المحرك : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="EnginNumber" id="EnginNumber" type="text"  placeholder="ادخل رقم المحرك" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> حجم المحرك : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="Enginsize" id="Enginsize" type="text"  placeholder="ادخل حجم المحرك" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  طراز المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carVersion" id="carVersion" type="text"  placeholder="ادخل طراز المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  رقم طراز المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="NumberCarVersion" id="NumberCarVersion" type="text"  placeholder="ادخل رقم طراز المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  سنة الانتاج : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="producedYear" id="producedYear" type="text"  placeholder="ادخل  سنة الانتاج" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  لون المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carColor" id="carColor" type="text"  placeholder="ادخل لون المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   العداد : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="speedMeter" id="speedMeter" type="text"  placeholder="ادخل  العداد"/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   عدد الركاب : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="passengerNumber" id="passengerNumber" type="text"  placeholder="ادخل عدد الركاب" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  مقاعد بجانب السائق : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="seatsCloseofDriver" id="seatsCloseofDriver" type="text"  placeholder="ادخل  عدد المقاعد بجانب السائق" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  نوع الوقود : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="gasType" id="gasType" type="text"  placeholder="ادخل نوع الوقود" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   قوة التسيير : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="power" id="power" type="text"  placeholder="ادخل قوة التسيير" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   نوع الغيار : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="gearType" id="gearType" type="text"  placeholder="ادخل نوع الغيار" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  وزن المركبة : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="weight" id="weight" type="text"  placeholder="ادخل وزن المركبة" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">   رقم التأمين : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="insuranceNumber" id="insuranceNumber" type="text"  placeholder="ادخل رقم التأمين" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  ابتداء التأمين  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="startInsurance" id="startInsurance" type="date" style="text-align: right" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  انتهاء التأمين  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="endInsurance" id="endInsurance" type="date" style="text-align: right" required />
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  انتهاء ترخيص المركبة  : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="endlicense" id="endlicense" type="date" style="text-align: right" required />
                            </div>
                        </div>





                        <div class="form-group  row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" for="Attachments">المرفقات :</label>
                            <div class="col-sm-8 pull-right">
                                <div class="form-group">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field">
                                            <tr>
                                                <td><button type="button" name="add" id="add" class="btn btn-success">اضافة المزيد</button></td>

                                            </tr>
                                        </table>

                                    </div>

                                </div>
                            </div>


                        </div>





                        <div class="form-group row" dir="">
                            <label class="control-label col-sm-2 pull-right text-left">  ملاحظات : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="CarNote" class="form-control PanelBodyCssInput" rows="5" name="note" id="note" placeholder="ادخل ملاحظات" required></textArea>
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
                                            هل أنت متأكد من أنك تريد حذف  <span class="dname"></span> ؟
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
    $("#carInfo_select").select2({
        dropdownAutoWidth : true,
        theme: "classic"
    });

    $(document).ready(function () {

        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });


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
          //  $('.did').text($(''));
            $('.deleteContent').show();
            $('.dname').html($('#fileNumber').val());
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletcar')!!}',
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

/*
        $(document).on('click','#Edit',function () {


            $.ajax({

                type:'get',
                url:'{!!URL::to('editcar')!!}',
                data:{'lastfilenum':ID,
            'filenumber':$('#fileNumber').val(),
            'carnumber':$('#carNumber').val(),
            'bodynumber':$('#bodyNumber').val(),
            'enginNumber':$('#EnginNumber').val(),
            'enginsize':$('#Enginsize').val(),
            'carversion':$('#carVersion').val(),
            'producdyoar':$('#producedYear').val(),
            'carused':$('#carused').val(),
            'carcolor':$('#carColor').val(),
            'weight':$('#weight').val(),
            'speedmotor':$('#speedMeter').val(),
            'gastype':$('#gasType').val(),
            'power':$('#power').val(),
            'geartype':$('#gearType').val(),
            'insurancenumber':$('#insuranceNumber').val(),
            'insurancestart':$('#startInsurance').val(),
            'insuranceend':$('#endInsurance').val(),
            'licenseend':$('#endlicense').val(),
            'note':$('#note').val(),
            'numbercarversion':$('#NumberCarVersion').val(),
            'passengernumber':$('#passengerNumber').val(),
            'attachment':$('#name').val(),
            'seatsCloseofDriver':$('#seatsCloseofDriver').val()

                },
                success:function(data) {
                  //  location.reload();

                 console.log(data)

                }

            });


        });
*/

        $(document).on("change","#carInfo_select",function () {
            filenumber=$(this).val();
            ID=$(this).val();

            $.ajax({

                type:'get',
                url:'{!!URL::to('getalldataaboutcar')!!}',
                data:{'id':filenumber},
                success:function(data) {
                    $('#fileNumber').val(data[0].file_num);
                    $('#carNumber').val(data[0].ve_num);
                    $('#bodyNumber').val(data[0].ve_body_num);
                    $('#EnginNumber').val(data[0].ve_engin_num);
                    $('#Enginsize').val(data[0].ve_engin_size);
                    $('#carVersion').val(data[0].ve_version);
                    $('#producedYear').val(data[0].ve_produce_year);
                    $('#carused').val(data[0].ve_used);
                    $('#carColor').val(data[0].ve_color);
                    $('#weight').val(data[0].ve_weight);
                    $('#speedMeter').val(data[0].ve_speedometer);
                    $('#gasType').val(data[0].ve_gas_type);
                    $('#power').val(data[0].ve_power_push);
                    $('#gearType').val(data[0].ve_gear_type);
                    $('#insuranceNumber').val(data[0].ve_insurence_num);
                    $('#startInsurance').val(data[0].ve_insurence_statr_date);
                    $('#endInsurance').val(data[0].ve_insurence_end_date);
                    $('#endlicense').val(data[0].ve_license_end_date);
                    $('#note').val(data[0].ve_note);
                    $('#NumberCarVersion').val(data[0].ve_version_num);
                    $('#passengerNumber').val(data[0].seat_num);
                    //$('#').val(data[0].);
                    $('#seatsCloseofDriver').val(data[0].seat_close_Driver);

                    var table=document.getElementById("dynamic_field");

                    var count = $('#dynamic_field tr').length;

                    for(var i=0;i<count-1;i++)
                        document.getElementById("dynamic_field").deleteRow(1);



                    var s = data[0].attachments;
                    var arr=s.split(',');
                    var count=0;
                    for (var j=0 ; j<arr.length ;j++){
                        i++;
                        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ادخل المرفق" class="form-control name_list" value="'+ arr[j]+'"/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');

                        //      var row = table.insertRow(j);
                  //      var cell1 = row.insertCell(0);
                  //      var cell2 = row.insertCell(1);
                  //      cell1.innerHTML = ++count;
                  //      cell2.innerHTML = arr[j];
                    }




                }

            });




        });


        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ادخل المرفق" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

    });
</script>