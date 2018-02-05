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
            @include('logodiv')

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('mainpar')

    </div>

    <!--Body-->
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="container">
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
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال شهادة</div>
            <div class="panel-body PanelBodyCss">

                <form method="post" class="form-horizontal" action="storeCertificat">
                    {{ csrf_field() }}
                    <div class="form-group row col-sm-12" dir="rtl">

                    <div class="col-sm-10 pull-right">
                        <div class="form-group">
                            <label class="control-label" >الشهادات</label>
                            <div class="table-responsive">
                                <table class="table" id="dynamic_field">
                                    <tr>

                                        <td><textarea rows="5"  name="name[]" placeholder="ادخل الشهادة" class="form-control name_list" ></textarea></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success">اضافة المزيد</button></td>

                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>


                </div>


                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                            <input type="submit" class="btn btn-success" id="submit" value="إدخال">
                        </div>
                        <label class="control-label col-sm-7"></label>
                    </div>

                    <table class="table" dir="rtl" border="0" id="mytable">
                        <tbody style="text-align: center">

                        <td><label>الشهادة</label></td>

                        <td><label>تعديل</label></td>
                        <td><label>حذف</label></td>

                        </tbody>
                        @foreach($cert as $item)
                            <tr>
                                <td style="text-align: center"><textarea rows="5">{{$item->cer_text}}</textarea></td>

                                <td style="text-align: center"><input class="edit-modal btn btn-info" data-name="{{$item->cer_text}}"
                                           value="تعديل"></td>

                                <td style="text-align: center"><input class="delete-modal btn btn-danger"
                                           data-name="{{$item->cer_text}}"
                                           value="حذف"
                                    ></td>
                            </tr>
                        @endforeach
                    </table>

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

                                    <form class="form-horizontal" role="form" >
                                        <div class="EditContent">

                                            <div class="form-group" dir="rtl">
                                                <label class="control-label col-sm-2 pull-right"  >الشهادة :</label>
                                                <div class="col-sm-10 pull-right">
                                                    <textarea class="form-control" id="insName" rows="5"
                                                        ></textarea>

                                                </div>
                                            </div>


                                        </div>
                                    </form>



                                    <div class="deleteContent" dir="rtl">
                                        هل أنت متأكد من أنك تريد حذف  <span class="dname"></span> ?
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

    var lastname_delete;


    var lastcompanyname;

    var companyname_update;


    var deleterow;
    var updaterow;
    $(document).ready(function () {
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><textarea rows="5"  name="name[]" placeholder="ادخل الشهادة" class="form-control name_list" ></textarea></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

        $(document).on('click', '.edit-modal', function() {
            $('#footer_action_button').text("Update");
            // $('#footer_action_button').addClass('glyphicon-check');
            //$('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.modal-title').text('Edit');
            $('.deleteContent').hide();
            $('.EditContent').show();

            $('#insName').val($(this).data('name'));

            lastcompanyname=$(this).data('name');

            updaterow=$(this).parent().parent();


            $('#myModal').modal('show');
        });


        $(document).on('click', '.delete-modal', function() {
            lastname_delete=$(this).data('name');
            deleterow=$(this).parent().parent();
            $('#footer_action_button').text(" Delete");
            // $('#footer_action_button').removeClass('glyphicon-check');
            //$('#footer_action_button').addClass('glyphicon-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Delete');
            $('.EditContent').hide();

            $('.deleteContent').show();
            $('.dname').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletecert')!!}',
                data: {

                    'name':lastname_delete
                },
                success: function(data) {
                    //$('.item' + $('.did').text()).remove();
                    console.log(data);
                    deleterow.remove();
                },
                error:function (data) {
                    console.log('error')
                }

            });
        });

        $('.modal-footer').on('click', '.edit', function() {
            num_update=$('#insNumber').val();
            companyname_update=$('#insName').val();
            telnum_update=$('#insphone').val();
            phonenum_update=$('#modelJawwal').val();
            email_update = $('#modelEmail').val();

            $.ajax({
                type: 'get',
                url: '{!!URL::to('updatecert')!!}',
                data: {

                    'name':companyname_update,
                    'lastname':lastcompanyname
                },
                success: function(data) {
                    //$('.item' + $('.did').text()).remove();
                    console.log(data)

                    location.reload();
                },
                error:function (data) {
                    console.log('error')
                }

            });




        });



    });
</script>