<!DOCTYPE HTML>
<html dir="rtl">
    <head>
        <title>
            @yield('title')
        </title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .printDoc{
            width: 210mm;
        }
        .text-center{
            text-align: center;
        }
        .left-header{
            float:left;
            width: 35%;
        }
        .middle-header{
            float:left;
            width: 30%;
        }
        .right-header{
            float:right;
            width: 35%;
        }
        .footer{
            border-top: 2px solid black;
            border-bottom: 1px solid black;
        }
        .header{
            border-bottom: 2px solid black;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .table tr td{
            text-align:center;
        }

        .border-1{
            border: 1px solid black;
        }

        .border-2{
            border: 2px solid black;
        }

        .padding{
            padding: 10px;
        }
        .black-header thead{
            background-color: lightgray;
        }
        .content{
            margin: 30px;
        }
        th,td{
            text-align:center;
        }
        .gray-back{
            background-color: lightgray;
        }
        .half-width{
            width: 50% !important;
        }
        .cols-2 th{
            width: 30%;
        }
        .cols-2 td{
            width: 70%;
        }
        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
            border: 1px solid black;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
            padding: 4px !important;
        }
        .box{
            display: block;
            border: 1px solid black;
            width: 100%;
            height: 150px;
            margin-top: 0px;
        }
        html{
            font-size: 12pt !important;
        }

        @page {
            size: A4;
            margin: 11mm 17mm 17mm 17mm;
        }

        @media print {
            html, body {
            width: 210mm;
            height: 297mm;
        }
        .dont-print{
            display:none;
        }
        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
            border: 1px solid black;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
            padding: 4px !important;
        }
        .gray-back{
            background-color: lightgray;
        }
        }
    </style>
    </head>
    <body>
            <button onclick="window.print()" class="dont-print">Print</button>
        <div>
        <div class="header">
            <div class="text-center">
                بسم الله الرحمن الرحيم
            </div>
            <div class="clearfix"></div>
            <div>
                <div class="left-header text-center">
                    <h3>
                        Mohammad Ahmad Bdarneh
                    </h3>
                    <h4>
                        Loss Adjuster Insurance Serveying Consulting
                    </h4>
                    <h5>
                        Yabad
                    </h5>
                </div>

                <div class="middle-header" align="center" width="50">
                    <img src="/img/projectIcon.png">
                </div>

                    <div class="right-header text-center">
                        <h3>
                            محمد أحمد بدارنة
                        </h3>
                        <h4>
                            خبير ومثمن أضرار
                        </h4>
                        <h5>
                            يعبد
                        </h5>
                    </div>
                </div>
            <div class="clearfix"></div>
        </div>
        
            <div class="content">
                @yield("content")
            </div>
        
            <div class="footer text-center">
                تلفون: 04-2461640 فاكس: 04-2462312 جوال: 0599-261388 وطنية: 0569-261388
            </div>
        </div>
    </body>
</html>