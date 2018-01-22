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

    //تقرير شطب مركبة
    public function carDestroy($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.carDestroy',['car' => $car,'l' => $l]);
    }

    //تقرير ثمن المركبة
    public function carPrice($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.carPrice',['car' => $car,'l' => $l]);
    }

    //تقرير ثمن المركبة مع حطام
    public function carPriceWithRek($fileId,$l='AR'){
        $car = enter_car_info::find($fileId);
        return view('report.carPriceWithRek',['car' => $car,'l' => $l]);
    }

    //دائرة الترخيص
    public function licence($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.licence',['car' => $car,'l' => $l]);
    }

    //تقرير أضرار أولي
    public function initialDamage($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.initialDamage',['car' => $car,'l' => $l]);
    }
}