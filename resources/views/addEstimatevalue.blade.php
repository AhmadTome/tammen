@extends('layouts.app')

@section('title','إدخال قيمة تخمين')

@section('content')

<div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال قيمة التخمين</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeEstimatevalue">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="textNum" id="textNum" placeholder="ادخل رقم النص" required>
                            </div>
                            <label class="control-label col-sm-1" for="textNum">: الرقم</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="textName" id="textName" placeholder="ادخل نص المركبة" required>
                            </div>
                            <label class="control-label col-sm-1" for="textName">: النص</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control PanelBodyCssInput" name="hebrow_text" id="hebrow_text" placeholder="ادخل نص المركبة عبري" required>
                            </div>
                            <label class="control-label col-sm-1" for="textName">: النص عبري</label>
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
                            <td><label>قيمة التخمين</label></td>
                            <td><label>قيمة التخمين عبري</label></td>
                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($estimatevalue as $item)
                                <tr>
                                    <td ><label>{{$item->estim_num}}</label></td>
                                    <td><label>{{$item->estim_name}}</label></td>
                                    <td><label>{{$item->hebrow_text}}</label></td>

                                    <td style="text-align: center"><input class="edit-modal btn btn-info"  data-id="{{$item->estim_num}}" data-name="{{$item->estim_name}}" data-hebrow="{{$item->hebrow_text}}"
                                                                          value="تعديل"></td>

                                    <td style="text-align: center"><input class="delete-modal btn btn-danger"
                                                                          data-id="{{$item->estim_num}}" data-name="{{$item->estim_name}}"
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
                                                    <label class="control-label col-sm-2 pull-right"  >قيمة التخمين :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <textarea class="form-control" rows="5" id="insName">
                                                        </textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >قيمة التخمين عبري :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <textarea class="form-control" rows="5" id="hebrow_insName">
                                                        </textarea>
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
    var lastid_delete;
    var lastname_delete;

    var lastcompanynumnum;
    var lastcompanyname;
    var num_update;
    var companyname_update;


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
            $('#hebrow_insName').val($(this).data('hebrow'));

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
                url: '{!!URL::to('deleteestimatevalue')!!}',
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


            $.ajax({
                type: 'get',
                url: '{!!URL::to('updateestimatevalue')!!}',
                data: {
                    'num':num_update,
                    'name':companyname_update,
                    'hebrow':$('#hebrow_insName').val(),
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

        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });

    });








</script>

@endsection

{{--
<html>
<head>
    <title>ادخال قيمة تخمين</title>
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
            <div class="panel-heading text-center PanelHeadingCss">ادخال قيمة التخمين</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeEstimatevalue">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="textNum" id="textNum" placeholder="ادخل رقم النص" required>
                            </div>
                            <label class="control-label col-sm-1" for="textNum">: الرقم</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="textName" id="textName" placeholder="ادخل نص المركبة" required>
                            </div>
                            <label class="control-label col-sm-1" for="textName">: النص</label>
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
                            <td><label>قيمة التخمين</label></td>
                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($estimatevalue as $item)
                                <tr>
                                    <td ><label>{{$item->estim_num}}</label></td>
                                    <td><label>{{$item->estim_name}}</label></td>

                                    <td style="text-align: center"><input class="edit-modal btn btn-info"  data-id="{{$item->estim_num}}" data-name="{{$item->estim_name}}"
                                                                          value="تعديل"></td>

                                    <td style="text-align: center"><input class="delete-modal btn btn-danger"
                                                                          data-id="{{$item->estim_num}}" data-name="{{$item->estim_name}}"
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
                                                    <label class="control-label col-sm-2 pull-right"  >قيمة التخمين :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insName">
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
                url: '{!!URL::to('deleteestimatevalue')!!}',
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


            $.ajax({
                type: 'get',
                url: '{!!URL::to('updateestimatevalue')!!}',
                data: {
                    'num':num_update,
                    'name':companyname_update,

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