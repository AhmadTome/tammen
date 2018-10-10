<html>
<head>
    <title>استعلام عن طراز مركبة</title>
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
    <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">استعلام عن طراز مركبة</div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">

                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="Editcarmodel">
                        {{ csrf_field() }}

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > اختار المركبة :</label>
                            <div class="col-sm-8 pull-right text-left">
                                <select class="form-control " id="car_model_select" name="car_model_select">
                                    <option selected disabled>اختار المركبة</option>
                                    @foreach($models as $item)
                                        <option value="{{$item->id}}">{{$item->model_name}}</option>

                                    @endforeach
                                </select>
                            </div>



                        </div>




                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> الاسم : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="carname" id="carname" type="text"  placeholder="ادخل الاسم" required/>
                                <input type="hidden" name="idhidden" id="idhidden">
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> الصورة : </label>
                            <div id="imgdiv" class="col-sm-7 pull-right" style="display: none">
                                <img src="" name="img" id="img" width="600px" height="500px">
                            </div>
                            <div class="col-sm-2 pull-right" style="margin-right: 20px;">
                                <input type="file" value="تغيير صورة هذا الموديل" name="editimg" id="editimg">
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
                                            هل أنت متأكد من أنك تريد حذف مركبة <span class="dname"></span> ؟
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
        $("#car_model_select").select2({
            dropdownAutoWidth: true,
            theme: "classic"
        });

        $("#car_model_select").on("change",function () {
            var car_model_id = $(this).val();
            $.ajax({
                type: 'get',
                url: '{!!URL::to('get_car_model')!!}',
                data: {
                    'id':car_model_id
                },
                success: function(data) {
                    $("#carname").val(data[0].model_name);
                    var imgsrc = "uploads/"+data[0].car_img ;

                    var imgdiv = document.getElementById('imgdiv');
                    imgdiv.style.display="block";
                    var image = document.getElementById('img');
                        image.src = imgsrc;

                     $("#idhidden").val(data[0].id);

                },
                error:function (data) {
                    alert("error")
                }

            });
        })



            $('#editimg').change( function(event) {
                var tmppath = URL.createObjectURL(event.target.files[0]);
                $("#img").fadeIn("fast").attr('src',tmppath);

            });

        $(document).on('click', '.delete-modal', function() {

            $('#footer_action_button').text(" Delete");

            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Delete');
            $('.EditContent').hide();
            $('.did').text($('#carname'));
            $('.deleteContent').show();
            $('.dname').html($('#carname').val());
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deletcarmodel')!!}',
                data: {
                    'id':$("#car_model_select").val()
                },
                success: function(data) {
                    location.reload();
                },
                error:function (data) {
                    console.log('error')
                }

            });
        });

    });


</script>