@extends('layouts.app')

@section('title','إدخال مخمن')


@section('content')
<div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال مخمن جديد</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal"  method="post" action="storeEstimater">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="IdNum" id="IdNum" placeholder="ادخل الرقم" required>
                            </div>
                            <label class="control-label col-sm-1" for="idNum">: الرقم</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="name" id="name" placeholder="ادخل الاسم" required>
                            </div>
                            <label class="control-label col-sm-1" for="name">: الاسم</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control PanelBodyCssInput" name="hebrow_name" id="hebrow_name" placeholder="ادخل الاسم عبري" required>
                            </div>
                            <label class="control-label col-sm-1" for="hebrow_name">: الاسم عبري</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="phoneNumber" class="form-control PanelBodyCssInput" name="authNumber" id="authNumber" placeholder="ادخل رقم التفويض " required>
                            </div>
                            <label class="control-label col-sm-1" for="authNumber">: رقم تفويض</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="telephone" class="form-control PanelBodyCssInput" name="signature" id="signature" placeholder="التوقيع والختم" required>
                            </div>
                            <label class="control-label col-sm-1" for="signature">: التوقيع</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-success" id="submit" value="إدخال" required>
                            </div>
                            <label class="control-label col-sm-7"></label>
                        </div>

                        <table class="table" dir="rtl"  id="mytable">
                            <tbody>

                            <td><label>الرقم</label></td>
                            <td><label>اسم </label></td>
                            <td><label>اسم عبري </label></td>
                            <td><label>رقم التفويض</label></td>
                            <td><label>التوقيع</label></td>

                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($estimater as $item)
                                <tr>
                                    <td ><label>{{$item->nes_num}}</label></td>
                                    <td><label>{{$item->nes_name}}</label></td>
                                    <td><label>{{$item->hebrow_estimater}}</label></td>
                                    <td><label>{{$item->nes_authorization_num}}</label></td>
                                    <td><label>{{$item->nes_signature}}</label></td>
                                    <td><input class="edit-modal btn btn-info" data-id="{{$item->nes_num}}" data-name="{{$item->nes_name}}" data-estimaterid="{{$item->nes_authorization_num}}" data-sign="{{$item->nes_signature}}"
                                             data-hebrow="{{$item->hebrow_estimater}}"  value="تعديل"></td>

                                    <td><input class="delete-modal btn btn-danger"
                                               data-estimaterid="{{$item->nes_authorization_num}}" data-name="{{$item->nes_name}}"
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
                                                        <input type="text" class="form-control" id="number" >
                                                    </div>
                                                </div>
                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="estimatername">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم عبري:</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="hebrow_estimatername">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >رقم التفويض :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="estimaterid">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >التوقيع :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="sign">
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

        <script>
    var lastestimaterid_delete;
    var lastname_delete;

    var lastestimaternum;
    var lastname;
    var num_update;
    var name_update;
    var estimaterid_update;
    var sign_update;


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
            $('#number').val($(this).data('id'));
            $('#estimatername').val($(this).data('name'));
            $('#estimaterid').val($(this).data('estimaterid'));
            $('#sign').val($(this).data('sign'));
            $('#hebrow_estimatername').val($(this).data('hebrow'));

            lastestimaternum=$(this).data('estimaterid');
            lastname=$(this).data('name');

            updaterow=$(this).parent().parent();


            $('#myModal').modal('show');
        });


        $(document).on('click', '.delete-modal', function() {
            lastestimaterid_delete =$(this).data('estimaterid');
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
            $('.did').text($(this).data('estimaterid'));
            $('.deleteContent').show();
            $('.dname').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deleteEstimater')!!}',
                data: {
                    'num':lastestimaterid_delete,
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
            num_update=$('#number').val();
            name_update=$('#estimatername').val();
            estimaterid_update=$('#estimaterid').val();
            sign_update=$('#sign').val();

            $.ajax({
                type: 'get',
                url: '{!!URL::to('updateEstimater')!!}',
                data: {
                    'num':num_update,
                    'name':name_update,
                    'estimaterid':estimaterid_update,
                    'sign':sign_update,
                    'hebrow':$('#hebrow_estimatername').val(),
                    'lastnum':lastestimaternum,
                    'lastname':lastname
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

        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });






</script>

@endsection


{{--
<html>
<head>
    <title>ادخال مخمن</title>
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
            <div class="panel-heading text-center PanelHeadingCss">ادخال مخمن جديد</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal"  method="post" action="storeEstimater">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="IdNum" id="IdNum" placeholder="ادخل الرقم" required>
                            </div>
                            <label class="control-label col-sm-1" for="idNum">: الرقم</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="name" id="name" placeholder="ادخل الاسم" required>
                            </div>
                            <label class="control-label col-sm-1" for="name">: الاسم</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="phoneNumber" class="form-control PanelBodyCssInput" name="authNumber" id="authNumber" placeholder="ادخل رقم التفويض " required>
                            </div>
                            <label class="control-label col-sm-1" for="authNumber">: رقم تفويض</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="telephone" class="form-control PanelBodyCssInput" name="signature" id="signature" placeholder="التوقيع والختم" required>
                            </div>
                            <label class="control-label col-sm-1" for="signature">: التوقيع</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn-success" id="submit" value="إدخال" required>
                            </div>
                            <label class="control-label col-sm-7"></label>
                        </div>

                        <table class="table" dir="rtl" border="1" id="mytable">
                            <tbody>

                            <td><label>الرقم</label></td>
                            <td><label>اسم </label></td>
                            <td><label>رقم التفويض</label></td>
                            <td><label>التوقيع</label></td>

                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($estimater as $item)
                                <tr>
                                    <td ><label>{{$item->nes_num}}</label></td>
                                    <td><label>{{$item->nes_name}}</label></td>
                                    <td><label>{{$item->nes_authorization_num}}</label></td>
                                    <td><label>{{$item->nes_signature}}</label></td>
                                    <td><input class="edit-modal btn btn-info" data-id="{{$item->nes_num}}" data-name="{{$item->nes_name}}" data-estimaterid="{{$item->nes_authorization_num}}" data-sign="{{$item->nes_signature}}"
                                               value="تعديل"></td>

                                    <td><input class="delete-modal btn btn-danger"
                                               data-estimaterid="{{$item->nes_authorization_num}}" data-name="{{$item->nes_name}}"
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
                                                        <input type="text" class="form-control" id="number" >
                                                    </div>
                                                </div>
                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="estimatername">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >رقم التفويض :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="estimaterid">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right" >التوقيع :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="sign">
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
    var lastestimaterid_delete;
    var lastname_delete;

    var lastestimaternum;
    var lastname;
    var num_update;
    var name_update;
    var estimaterid_update;
    var sign_update;


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
            $('#number').val($(this).data('id'));
            $('#estimatername').val($(this).data('name'));
            $('#estimaterid').val($(this).data('estimaterid'));
            $('#sign').val($(this).data('sign'));

            lastestimaternum=$(this).data('estimaterid');
            lastname=$(this).data('name');

            updaterow=$(this).parent().parent();


            $('#myModal').modal('show');
        });


        $(document).on('click', '.delete-modal', function() {
            lastestimaterid_delete =$(this).data('estimaterid');
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
            $('.did').text($(this).data('estimaterid'));
            $('.deleteContent').show();
            $('.dname').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deleteEstimater')!!}',
                data: {
                    'num':lastestimaterid_delete,
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
            num_update=$('#number').val();
            name_update=$('#estimatername').val();
            estimaterid_update=$('#estimaterid').val();
            sign_update=$('#sign').val();

            $.ajax({
                type: 'get',
                url: '{!!URL::to('updateEstimater')!!}',
                data: {
                    'num':num_update,
                    'name':name_update,
                    'estimaterid':estimaterid_update,
                    'sign':sign_update,

                    'lastnum':lastestimaternum,
                    'lastname':lastname
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