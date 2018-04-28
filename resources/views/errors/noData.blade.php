@extends('layouts.app')

@section('title','لم يتم ايجاد بيانات')

@section('content')

    <style>
        .report-message{
            text-align:center;
        }
    </style>

    <div class="report-message">
        <h3>
            لم يتم ايجاد معلومات لهذا التقرير
        </h3>
        <br>
        <h4>
            لم يتم إيجاد اي معلومات تتناسب مع المعلومات التي قمت بادخالها
        </h4>
        <br>
        <button type="button" class="btn btn-primary btn-block" onclick="goBack()">
            عودة
        </button>
    </div>
    <br><br>
@endsection