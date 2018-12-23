<div class="form-group row col-lg-12 col-md-12 col-xs-12 col-sm-12 " dir="rtl">

        <div class="col-sm-2 pull-right text-left">
            <select class="form-control carInfo_select select-2" id="carInfo_select" name="carInfo_select">
                <option selected disabled="">اختار رقم المركبة</option>
                @foreach($carInfo as $car)
                    <option value="{{$car->file_num}}">{{$car->ve_num." | ".$car->file_num." | ".$car->ve_used." | ".$car->ve_version." | ".$car->ve_produce_year}}</option>

                @endforeach
            </select>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carnumber" id="carnumber" placeholder="رقم المركبة" disabled required>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="filenumber" id="filenumber" placeholder="رقم الملف" disabled>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carused" id="carused" placeholder="استعمال المركبة" disabled>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="carversion" id="carversion" placeholder="طراز المركبة" disabled>
        </div>
        <div class="col-sm-2 pull-right text-left">
            <input type="text" class="form-control PanelBodyCssInput " name="producedyear" id="producedyear" placeholder="سنة الانتاج" disabled>
        </div>


    </div>
    <div class="clearfix"></div>
    <div class="text-danger text-center" id="fileError"></div>
    <div class="text-danger text-center" style="font-size: 22px;" id="DamagePercient"></div>
    <br>
<script>

    $(document).ready(function(){
        $(document).on("change",".carInfo_select",function () {
            var file_nom=$(this).val();
            $.ajax({
                type:'get',
                url:'{!!URL::to('findCarInfo')!!}',
                data:{'id':file_nom},
                success:function(data) {
                    $('#filenumber').val(data[0].file_num);
                    $("#filenumber").trigger("change");
                    $('#carused').val(data[0].ve_used);
                    $('#carversion').val(data[0].ve_version);
                    $('#producedyear').val(data[0].ve_produce_year);
                    $('#carnumber').val(data[0].ve_num);
                    $('#carnumberhidden').val(data[0].ve_num);
                    $('#filrnumberhidden').val(data[0].file_num);
                }
            });
        });
    });

</script>