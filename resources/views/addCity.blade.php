

@extends('layouts.app')

@section('title','إدخال مدينة')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال مدينة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeCity" >
                        {{ csrf_field() }}
                        <div class="form-group">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="IdDamNum" id="IdDamNum" placeholder="ادخل رقم المدينة" required>
                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: الرقم</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="damName" id="damName" placeholder="ادخل الاسم" required>
                            </div>
                            <label class="control-label col-sm-1" for="damName">: الاسم</label>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-2 col-xs-offset-0">
                                <input type="text" class="form-control PanelBodyCssInput" name="city_hebrow_name" id="city_hebrow_name" placeholder="  ادخل الاسم العبري" >
                            </div>
                            <label class="control-label col-sm-1" for="damName">:الاسم العبري</label>
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
                            <td><label>اسم المدينة</label></td>
                            <td><label>اسم العبري للمدينة</label></td>
                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($city as $item)
                                <tr>
                                    <td ><label>{{$item->city_num}}</label></td>
                                    <td><label>{{$item->city_name}}</label></td>
                                    <td><label>{{$item->city_hebrow_name}}</label></td>

                                    <td style="text-align: center"><input class="edit-modal btn btn-info"  data-id="{{$item->city_num}}" data-name="{{$item->city_name}}" data-hebrowname="{{$item->city_hebrow_name}}"
                                                                          value="تعديل"></td>

                                    <td style="text-align: center"><input class="delete-modal btn btn-danger"
                                                                          data-id="{{$item->city_num}}" data-name="{{$item->city_name}}"
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
                                                    <label class="control-label col-sm-2 pull-right"  >اسم المدينة :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="insName">
                                                    </div>
                                                </div>

                                                <div class="form-group" dir="rtl">
                                                    <label class="control-label col-sm-2 pull-right"  >اسم المدينة بالعبري :</label>
                                                    <div class="col-sm-10 pull-right">
                                                        <input type="text" class="form-control" id="hebrowName">
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
    var cityHebrowname_update;


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
            $('#hebrowName').val($(this).data('hebrowname'));

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
                url: '{!!URL::to('deletecity')!!}',
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
                url: '{!!URL::to('updatecity')!!}',
                data: {
                    'num':num_update,
                    'name':companyname_update,
                    'hebrowname':$("#hebrowName").val(),

                    'lastnum':lastcompanynumnum,
                    'lastname':lastcompanyname
                },
                success: function(data) {
                    //$('.item' + $('.did').text()).remove();
                    console.log(data)

                    location.reload();
                },
                error:function (data) {
                    alert('error')
                }

            });




        });



    });








</script>

@endsection

{{-- <html>
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
            <div class="panel-heading text-center PanelHeadingCss">ادخال مدينة</div>
            <div class="panel-body PanelBodyCss">

                <div class="container " style="max-width: 1000px ;margin-bottom: -15px">
                    <form class="form-horizontal" method="post" action="storeCity" >
                        {{ csrf_field() }}
                        <div class="form-group">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="name" class="form-control PanelBodyCssInput" name="IdDamNum" id="IdDamNum" placeholder="ادخل رقم المدينة" required>
                            </div>
                            <label class="control-label col-sm-1" for="idDamNum">: الرقم</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <input type="address" class="form-control PanelBodyCssInput" name="damName" id="damName" placeholder="ادخل الاسم" required>
                            </div>
                            <label class="control-label col-sm-1" for="damName">: الاسم</label>
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
                            <td><label>اسم المدينة</label></td>
                            <td><label>تعديل</label></td>
                            <td><label>حذف</label></td>

                            </tbody>
                            @foreach($city as $item)
                                <tr>
                                    <td ><label>{{$item->city_num}}</label></td>
                                    <td><label>{{$item->city_name}}</label></td>

                                    <td style="text-align: center"><input class="edit-modal btn btn-info"  data-id="{{$item->city_num}}" data-name="{{$item->city_name}}"
                                                                          value="تعديل"></td>

                                    <td style="text-align: center"><input class="delete-modal btn btn-danger"
                                                                          data-id="{{$item->city_num}}" data-name="{{$item->city_name}}"
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
                                                    <label class="control-label col-sm-2 pull-right"  >اسم المدينة :</label>
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

--}}

