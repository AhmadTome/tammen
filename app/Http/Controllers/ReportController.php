<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enter_car_info;

class ReportController extends Controller
{

    //تقرير بيانات مركبة
    public function carInfo($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.carInfo',['car' => $car,'l' => $l]);
    }

    //تقرير حساب ملف
    public function fileAccount($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.fileAccount',['car' => $car,'l' => $l]);
    }

    //تقرير حساب ملف شخصي
    public function personalFileAccount($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.personalFileAccount',['car' => $car,'l' => $l]);
    }
}