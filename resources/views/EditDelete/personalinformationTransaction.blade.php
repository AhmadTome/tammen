<html>
<head>
    <title>ادخال معلومات شخصية</title>
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
            <div class="panel-heading text-center PanelHeadingCss"> بيانات الزبون</div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">

                    <form class="form-horizontal" method="post" action="Editpersoninfo">
                        {{ csrf_field() }}

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > رقم الهوية :</label>
                            <div class="col-sm-8 pull-right text-left">
                                <select class="form-control " id="person_select" name="person_select">
                                    <option selected disabled>اختار رقم الهوية</option>
                                    @foreach($Id as $item)
                                        <option value="{{$item->id}}">{{$item->id." | ".$item->name." | ".$item->address." | ".$item->phone_num." | ".$item->email}}</option>

                                    @endforeach
                                </select>
                            </div>



                        </div>




                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> الاسم : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="name" id="name" type="text"  placeholder="ادخل الاسم" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> رقم الهوية : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="ID" id="ID" type="text"  placeholder="ادخل رقم الهوية" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> العنوان : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="address" id="address" type="text"  placeholder="ادخل العنوان" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> هاتف محمول : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="phoneNumber" id="phoneNumber" type="text"  placeholder="ادخل رقم الهاتف المحمول" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> هاتف ارضي : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="homeNumber" id="homeNumber" type="text"  placeholder="ادخل رقم الهاتف الارضي" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">الايميل : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="email" id="email" type="text"  placeholder="ادخل الايميل" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  ملاحظات : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="note" class="form-control PanelBodyCssInput" rows="5" name="note" id="note" placeholder="ادخل ملاحظات" required></textArea>
                            </div>
                        </div>


                        <div class="form-group row col-sm-12 ">

                            <div class="col-sm-4 pull-right">
                        <input type="submit" class="btn btn-primary"  id="Edit" value="تعديل"/>
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
    $(document).ready(function () {
        $("#person_select").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });


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
           $('.dname').html($('#name').val());
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletpersoninfo')!!}',
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


        $(document).on("change","#person_select",function () {
             ID=$(this).val();


            $.ajax({

                type:'get',
                url:'{!!URL::to('findpersoninfo')!!}',
                data:{'id':ID},
                success:function(data) {
                    $('#name').val(data[0].name);
                    $('#ID').val(data[0].id);
                    $('#address').val(data[0].address);
                    $('#phoneNumber').val(data[0].phone_num);
                    $('#homeNumber').val(data[0].tel_num);
                    $('#email').val(data[0].email);
                    $('#note').val(data[0].note);

                }

            });




        });

/*
        $(document).on('click','#Edit',function () {
            alert(ID)
            alert($('#ID').val())
            $.ajax({

                type:'get',
                url:'{!!URL::to('editpersoninfo')!!}',
                data:{'lastid':ID,
                    'id':$('#ID').val(),
                    'name':$('#name').val(),
                    'address':$('#address').val(),
                    'phonenumber':$('#phoneNumber').val(),
                    'telnumber':$('#homeNumber').val(),
                    'email':$('#email').val(),
                    'note':$('#note').val()

                },
                success:function(data) {
                    location.reload();


                    alert('تم التعديل بنجاح');

                }

            });


        });
        */
    });


</script>