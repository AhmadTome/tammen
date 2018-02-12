<html>
<head>
    
    <title>
        @yield('title')
    </title>
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