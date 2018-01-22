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
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال شهادة</div>
            <div class="panel-body PanelBodyCss">

                <form method="post" class="form-horizontal" action="storeCertification">
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

    });
</script>