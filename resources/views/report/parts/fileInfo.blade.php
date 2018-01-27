<table class="table table-bordered">
                <tr>
                    <th width="30%">
                        {{_t('production_date',$l)}}
                    </th>
                    <td colspan="2">
                        {{date('Y-m-d')}}
                    </td>
                </tr>
                <tr>
                    <th width="30%">
                        {{_t('file_num',$l)}}
                    </th>
                    <td width="20%">
                        {{explode('-',$car['file_num'])[1]}}
                    </td>
                    <td>
                        {{explode('-',$car['file_num'])[0]}}
                    </td>
                </tr>
            </table>