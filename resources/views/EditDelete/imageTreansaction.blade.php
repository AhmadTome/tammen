<html>
<head>
    <title>استعلام عن صور الحادث</title>
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
            <div class="panel-heading text-center PanelHeadingCss">استعلام عن صور الحادث</div>
            <div class="panel-body PanelBodyCss">

                <form class="form-horizontal" method="post" action="#" >
                    {{ csrf_field() }}
                    <div class="form-group row" dir="rtl">
                        <div class="form-group row col-sm-12 " dir="rtl">

                            <div class="col-sm-2 pull-right text-left">
                                <select class="form-group-lg carInfo_select" id="carInfo_select">
                                    <option selected disabled="">اختار رقم المركبة</option>
                                    @foreach($carInfo as $car)
                                        <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-sm-12 " dir="rtl">


                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="carnumber" id="carnumber" placeholder="رقم المركبة" readonly required>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="carused" id="carused" placeholder="استعمال المركبة" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="carversion" id="carversion" placeholder="طراز المركبة" readonly>
                            </div>
                            <div class="col-sm-2 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " name="producedyear" id="producedyear" placeholder="سنة الانتاج" readonly>
                            </div>

                        </div>
                    </div>


                    <div class="container" id="content"></div>
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
هل أنت متأكد من أنك تريد حذف الصورة  <span class="dname"></span> ?
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
                </form>



            </div>
        </div>



        <!-- end Body -->
        <!--footer-->
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
            @include('footer')

        </div>
        <!--/footer-->



    </div>
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
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                console.log("enter pressed")
                event.preventDefault();
                return false;
            }
        });

        var path;
        var filenumforimage;
        var deleterow;
        $(document).on('click', '.delete-modal', function() {
            path =$(this).data('id');
            filenumforimage=$(this).data('filenum');
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

            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function() {

            $.ajax({
                type: 'get',
                url: '{!!URL::to('deleteiamge')!!}',
                data: {
                    'path':path,
                    'filenum':filenumforimage
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

        $("#carInfo_select").select2({
            dropdownAutoWidth : true,
            theme: "classic"
        });

        $(document).on('change','#carInfo_select',function () {
            var file_nom=$(this).val();


            $.ajax({

                type:'get',
                url:'{!!URL::to('getimageinfo')!!}',
                data:{'id':file_nom},
                success:function(data) {
                    console.log(data.data2)
                    if(data !=""){
                        $('#filenumber').val(data.data[0].file_num);
                        $('#carused').val(data.data[0].ve_used);
                        $('#carversion').val(data.data[0].ve_version);
                        $('#producedyear').val(data.data[0].ve_produce_year);
                        $('#carnumber').val(data.data[0].ve_num);
                        $("#content").empty();
for(var i=0;i<data.data2.length;i++){
$("#content").append('<div><div class="col-xs-9 margin-bottom"><img src="'+ data.data2[i].path +'" width="100%" height="100%"></div><div class="col-xs-3"><button type="button" class="btn btn-danger delete-modal" data-id="'+ data.data2[i].path +'" data-filenum="'+ file_nom +'">X</button> </div></div>');
}

                        }
                    else{
                        $("#content").empty();
                       alert('لم يتم ادخال صور لهذه المركبة')
                    }


                }
            });
        })

    });


</script>
