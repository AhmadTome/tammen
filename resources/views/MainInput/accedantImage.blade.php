<script src="http://malsup.github.com/jquery.form.js"></script>
<div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
    <div class="panel panel-default">
        <div class="panel-heading text-center PanelHeadingCss">ادراج صور الحادث</div>
        <div class="panel-body PanelBodyCss">

            <div  >
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="saveimage" id="uploadeform" >
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
                            <input class="form-control image" type="file" name="images[]" id="images" value="اختيار الصور"  multiple />
                            <input class="form-control" type="hidden" name="carnumberhidden" id="carnumberhidden" value=""  />
                            <input class="form-control" type="hidden" name="filrnumberhidden" id="filrnumberhidden" value=""  />


                        </div>
                    </div>



                    <div class="form-group ">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center" >
                            <input type="submit"  name="submit" id="submit" class="btn btn-success " value="اضافة" />
                        </div>

                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >

                        </div>
                    </div>
                    <div id="targetLayer"></div>

                </form>
            </div>


        </div>
    </div>



</div>

<!--/body-->
<script>

$(document).ready(function () {

    $('#uploadeform').submit(function (e) {
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>20){
            alert("تستطيع تحميل فقط 20 صورة في المرة الواحدة");
            return false;
        }
else {
            if ($('#images').val()) {

                e.preventDefault();
                $(this).ajaxSubmit({
                    target: "#targetLayer",
                    beforeSubmit: function () {

                        $('.progress-bar').width("0%");
                    },
                    uploadProgress: function (event, position, tatal, percentComplete) {

                        $('.progress-bar').width(percentComplete + '%');
                        $('.progress-bar').html('<div id="progress-status">' + percentComplete + '%</div>')
                    },
                    success: function () {
                        alert('تم رفع الصور بنجاح')
                        $('.progress-bar').width('0%');
                    },
                    resetForm: true

                })
                return false;
            }

        }

    });

var arr;
    $('#images').on('change', function (e) {
         arr = e.target.files

    });


});

</script>