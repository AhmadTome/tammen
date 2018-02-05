
<div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
    <div class="panel panel-default">
        <div class="panel-heading text-center PanelHeadingCss">ادراج صور الحادث</div>
        <div class="panel-body PanelBodyCss">

            <div  >
                <form class="form-horizontal" enctype="multipart/form-data" method="post"  id="imgform" >
                    {{ csrf_field() }}
                    <div class="form-group row" dir="rtl">
                        <label class="control-label col-sm-1 pull-right text-left">تاريخ التصوير: </label>
                        <div class="col-sm-3 pull-right">
                            <input class="form-control" type="date" name="pictureDate" id="pictureDate" style="text-align: right;"  placeholder="تاريخ التقاط الصور" />
                        </div>

                    </div>




                    <div class="form-group row" dir="rtl">
                        <label class="control-label col-sm-1 pull-right text-left">ادراج صور: </label>
                        <div class="col-sm-7 pull-right">
                            <input class="form-control image" type="file" name="images[]" id="images" value="اختيار الصور"  multiple/>
                            <input class="form-control" type="hidden" name="carnumberhidden" id="carnumberhidden" value=""  />
                            <input class="form-control" type="hidden" name="filrnumberhidden" id="filrnumberhidden" value=""  />


                        </div>
                    </div>

                    <div class="progress  active">
                        <div class="progress-bar" style="width: 100%">0%</div>

                    </div>


                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center" >
                            <input type="submit"  name="submit" id="submit" class="btn btn-success " value="اضافة" />
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>



</div>

<!--/body-->
<script>

$(document).ready(function () {

var arr;
    $('#images').on('change', function (e) {
         arr = e.target.files

    });

    $('#imgform').on('submit',function () {

        var carnumber=$('#carnumberhidden').val();
        var filenumber=$('#filrnumberhidden').val();
        var date=$('#pictureDate').val();
alert(arr)
        $.ajax({
            type: 'get',
            url: '{!!URL::to('uploadimage')!!}',
            data: {
                'imge':arr,
                'carnumber':carnumber,
                'filenumber':filenumber,
                'date':date
            },
            success: function(data) {
                //$('.item' + $('.did').text()).remove();
                console.log(data)

                //location.reload();
            },
            error:function (data) {
                console.log('error')
            }

        });
    });

/*
    $('#imgform').submit(function (e) {


     //   $form=$(this);
//console.log($form);
        //uploadImage($form);
    });
    /*function uploadImage($form) {
        var formdate=new FormData($form[0]);
        var request= new XMLHttpRequest();

        request.upload.addEventListener('process',function (e) {

            // var percent=Math.round(e.loaded/2000 *100);
            var percent=10;
            $form.find('.progress-bar').width=(percent+"%").html(percent+"%");
        });
        request.addEventListener('load',function () {
            $form.find('.progress-bar').addClass('progress-bar-success').html("uploaded completed ....");
        });
        request.open('post','');
        request.send(formdate);
    }
*/


});

</script>