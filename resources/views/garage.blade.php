@extends('layouts.app')

@section('title','إدخال كراج')


@section('content')

<div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال كراج</div>
            <div class="panel-body PanelBodyCss">




                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="store">
                        {{ csrf_field() }}

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garNum">الرقم :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="name" class="form-control PanelBodyCssInput" name="garNum" id="garNum" placeholder="ادخل رقم الكراج" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garName">الاسم :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="garName" id="garName" placeholder="ادخل الاسم" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garName_hebrow">الاسم عبري :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="text" class="form-control PanelBodyCssInput" name="garName_hebrow" id="garName_hebrow" placeholder="ادخل الاسم عبري" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right">رقم الجوال :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="garphoneNumber" id="garphoneNumber" placeholder="ادخل رقم الجوال" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" > هاتف ارضي :</label>
                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="gartelNumber" id="gartelNumber" placeholder="ادخل رقم الهاتف الارضي" required>
                            </div>

                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" >الايميل :</label>
                            <div class="col-sm-8 pull-right">
                                <input type="text" class="form-control" name="garemail" id="garemail" placeholder="ادخل الايميل" required>
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

                            <td><label>الرقم</label></td>
                            <td><label>اسم الكراج</label></td>
                            <td><label>اسم الكراج عبري</label></td>
                            <td><label>رقم الهاتف</label></td>
                            <td><label>رقم الجوال</label></td>
                            <td><label>الايميل</label></td>
                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($garage as $item)
                                <tr>
                                    <td ><label>{{$item->gar_num}}</label></td>
                                    <td><label>{{$item->gar_name}}</label></td>
                                    <td><label>{{$item->gar_hebrow_name}}</label></td>
                                    <td><label>{{$item->tel}}</label></td>
                                    <td><label>{{$item->phone}}</label></td>
                                    <td><label>{{$item->email}}</label></td>
                                    <td><input class="edit-modal btn btn-info" data-email="{{$item->email}}" data-id="{{$item->gar_num}}" data-name="{{$item->gar_name}}" data-phone="{{$item->tel}}" data-jawwal="{{$item->phone}}"
                                          data-hebrow="{{$item->gar_hebrow_name}}"     value="تعديل"></td>

                                    <td><input class="delete-modal btn btn-danger"
                                               data-id="{{$item->gar_num}}" data-name="{{$item->gar_name}}"
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
                                                    <label class="control-label col-sm-2 pull-right" >الرقم :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insNumber" >
                                                    </div>
                                                </div>
                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم الكراج :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insName">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم الكراج عبري :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insName_hebrow">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >رقم الهاتف :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insphone">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >رقم الجوال :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="modelJawwal">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >الايميل :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="modelEmail">
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

            <script>
    var lastid_delete;
    var lastname_delete;

    var lastcompanynumnum;
    var lastcompanyname;
    var num_update;
    var companyname_update;
    var telnum_update;
    var phonenum_update;
    var email_update;

    var deleterow;
    var updaterow;
    $(document).ready(function() {
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
            $('#insNumber').val($(this).data('id'));
            $('#insName').val($(this).data('name'));
            $('#insphone').val($(this).data('phone'));
            $('#modelJawwal').val($(this).data('jawwal'));
            $('#modelEmail').val($(this).data('email'));
            $('#insName_hebrow').val($(this).data('hebrow'));
            lastcompanynumnum=$(this).data('id');
            lastcompanyname=$(this).data('name');

            updaterow=$(this).parent().parent();


            $('#myModal').modal('show');
        });


        $(document).on('click', '.delete-modal', function() {
            lastid_delete =$(this).data('id');
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
            $('.did').text($(this).data('id'));
            $('.deleteContent').show();
            $('.dname').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletegarage')!!}',
                data: {
                    'num':lastid_delete,
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
                url: '{!!URL::to('updategarage')!!}',
                data: {
                    'num':num_update,
                    'name':companyname_update,
                    'tel':telnum_update,
                    'phone':phonenum_update,
                    'email':email_update,
                    'lastnum':lastcompanynumnum,
                    'lastname':lastcompanyname,
                    'hebrow': $('#insName_hebrow').val()
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
@endsection

{{--
<html>
<head>
<title>ادخال كراج</title>
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
            <div class="panel-heading text-center PanelHeadingCss">ادخال كراج</div>
            <div class="panel-body PanelBodyCss">




                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="store">
                        {{ csrf_field() }}

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garNum">الرقم :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="name" class="form-control PanelBodyCssInput" name="garNum" id="garNum" placeholder="ادخل رقم الكراج" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" for="garName">الاسم :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="garName" id="garName" placeholder="ادخل الاسم" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right">رقم الجوال :</label>

                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="garphoneNumber" id="garphoneNumber" placeholder="ادخل رقم الجوال" required>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" > هاتف ارضي :</label>
                            <div class="col-sm-8 pull-right">
                                <input type="address" class="form-control PanelBodyCssInput" name="gartelNumber" id="gartelNumber" placeholder="ادخل رقم الهاتف الارضي" required>
                            </div>

                        </div>

                        <div class="form-group row col-sm-12" dir="rtl">
                            <label class="control-label col-sm-2 pull-right" >الايميل :</label>
                            <div class="col-sm-8 pull-right">
                                <input type="text" class="form-control" name="garemail" id="garemail" placeholder="ادخل الايميل" required>
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

                            <td><label>الرقم</label></td>
                            <td><label>اسم الكراج</label></td>
                            <td><label>رقم الهاتف</label></td>
                            <td><label>رقم الجوال</label></td>
                            <td><label>الايميل</label></td>
                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($garage as $item)
                                <tr>
                                    <td ><label>{{$item->gar_num}}</label></td>
                                    <td><label>{{$item->gar_name}}</label></td>
                                    <td><label>{{$item->tel}}</label></td>
                                    <td><label>{{$item->phone}}</label></td>
                                    <td><label>{{$item->email}}</label></td>
                                    <td><input class="edit-modal btn btn-info" data-email="{{$item->email}}" data-id="{{$item->gar_num}}" data-name="{{$item->gar_name}}" data-phone="{{$item->tel}}" data-jawwal="{{$item->phone}}"
                                               value="تعديل"></td>

                                    <td><input class="delete-modal btn btn-danger"
                                               data-id="{{$item->gar_num}}" data-name="{{$item->gar_name}}"
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
                                                    <label class="control-label col-sm-2 pull-right" >الرقم :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insNumber" >
                                                    </div>
                                                </div>
                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم الكراج :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insName">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >رقم الهاتف :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insphone">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >رقم الجوال :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="modelJawwal">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >الايميل :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="modelEmail">
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



    </div>

    <!--footer-->
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
       @include('footer')

    </div>
    <!--/footer-->



</div>

</body>
</html>

<script>
    var lastid_delete;
    var lastname_delete;

    var lastcompanynumnum;
    var lastcompanyname;
    var num_update;
    var companyname_update;
    var telnum_update;
    var phonenum_update;
    var email_update;

    var deleterow;
    var updaterow;
    $(document).ready(function() {
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
            $('#insNumber').val($(this).data('id'));
            $('#insName').val($(this).data('name'));
            $('#insphone').val($(this).data('phone'));
            $('#modelJawwal').val($(this).data('jawwal'));
            $('#modelEmail').val($(this).data('email'));
            lastcompanynumnum=$(this).data('id');
            lastcompanyname=$(this).data('name');

            updaterow=$(this).parent().parent();


            $('#myModal').modal('show');
        });


        $(document).on('click', '.delete-modal', function() {
            lastid_delete =$(this).data('id');
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
            $('.did').text($(this).data('id'));
            $('.deleteContent').show();
            $('.dname').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletegarage')!!}',
                data: {
                    'num':lastid_delete,
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
                url: '{!!URL::to('updategarage')!!}',
                data: {
                    'num':num_update,
                    'name':companyname_update,
                    'tel':telnum_update,
                    'phone':phonenum_update,
                    'email':email_update,
                    'lastnum':lastcompanynumnum,
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

--}}