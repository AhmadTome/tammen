<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enter_car_info;

class ReportController extends Controller
{

    public function car(){
        $files = enter_car_info::get();
        return view('carReport',['files' => $files]);
    }

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

    //كشف الزيارات
    public function carVisit($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.carVisit',['car' => $car,'l' => $l]);
    }

    //حساب شركة التامي
    public function insCompanyAcc($l = 'AR'){
        return view('report.insCompanyAcc',['l' => $l]);
    }

    //حساب شركة التامين للمستفيد
    public function insCompanyUser($l = 'AR'){
        return view('report.insCompanyUser',['l' => $l]);
    }

    //تقرير قطع غيار هيكل
    public function bodyPartChange($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.bodyPartChange',['car' => $car,'l' => $l]);
    }

    //تقرير قطع غيار ميكانيك
    public function mechPartChange($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.mechPartChange',['car' => $car,'l' => $l]);
    }

    //أعمالمركبة
    public function carWork($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.carWork',['car' => $car,'l' => $l]);
    }
}