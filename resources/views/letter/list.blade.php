@extends('layouts.app')

@section('title','المراسﻻت')

@section('content')

    <div class="row">

        <!-- Text -->
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label pull-right">
                    بحث
                </label>
                <input type="text" class="form-control" name="text" id="text">
            </div>
        </div>
        <!-- End Text -->

        <!-- Destination -->
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label pull-right">
                    المستقبل
                </label>
                <select class="form-control" name="dest" id="dest">
                    <option value="ALL">
                        الكل
                    </option>
                    @foreach($dests as $dest)
                        <option value="{{$dest->destination}}">
                            {{$dest->destination}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- End Destination -->

    </div>

    <div class="row">
        <h4 class="text-center">
            تاريخ الارسال
        </h4>
        <!-- To -->
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label pull-right">
                    إلى
                </label>
                <input type="date" class="form-control" name="to_date" id="to_date" />
            </div>
        </div>
        <!-- End To -->

        <!-- From -->
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label pull-right">
                    من
                </label>
                <input type="date" class="form-control" name="from_date" id="from_date">
            </div>
        </div>
        <!-- End From -->
    </div>
    <br>
    <div>
        <button class="btn btn-primary btn-block" onclick="getLetters()">
            بحث
        </button>
    </div>
    <br>
    <div>
        <table dir="rtl" class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        الموضوع
                    </th>
                    <th>
                        المستقبل
                    </th>
                    <th>
                        طباعة
                    </th>
                </tr>
            </thead>
            <tbody id="letters-table">
            
            </tbody>
        </table>
    </div>

    <script>
        var $text = $("#text");
        var $from_date = $("#from_date");
        var $to_date = $("#to_date");
        var $dest = $("#dest");
        var $lettersTable = $("#letters-table");

        var errorTr = document.createElement('tr');
        errorTr.className = "danger text-center";

        var errorTd = document.createElement('td');
        errorTd.colSpan = '4';
        errorTd.appendChild(document.createTextNode('ﻻ يوجد بيانات'));

        errorTr.appendChild(errorTd);

        function getLetters(){
            var text = $text.val();
            var from_date = $from_date.val();
            var to_date = $to_date.val();
            var dest = $dest.val();

            var params = {
                text : text,
                from_date : from_date,
                to_date : to_date,
                dest : dest
            };

            $lettersTable.html('');

            $.post('/letters/list',params).done(function(r){
                if(r.length == 0){
                    $lettersTable.append(errorTr);
                    return;
                }

                for(var i = 0, l = r.length; i < l; i++){
                    var currentRow = r[i];
                    var tr = document.createElement('tr');
                    var idTd = document.createElement('td');
                    var subjectTd = document.createElement('td');
                    var destTd = document.createElement('td');
                    var btnTd = document.createElement('td');

                    idTd.appendChild(document.createTextNode(currentRow.idletter));
                    subjectTd.appendChild(document.createTextNode(currentRow.subject));
                    destTd.appendChild(document.createTextNode(currentRow.destination));

                    var printBtn = document.createElement('a');
                    printBtn.className = 'btn btn-primary';
                    printBtn.href = '/report/letter/' + currentRow.idletter;

                    var printIcon = document.createElement('i');
                    printIcon.className = 'fa fa-print';

                    printBtn.appendChild(printIcon);

                    btnTd.appendChild(printBtn);

                    tr.appendChild(idTd);
                    tr.appendChild(subjectTd);
                    tr.appendChild(destTd);
                    tr.appendChild(btnTd);

                    $lettersTable.append(tr);
                }
            }).fail(function(err){
                $lettersTable.append(errorTr);
            });
        }
    </script>

@endsection