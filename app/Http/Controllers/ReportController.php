<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enter_car_info;
use App\CarVisit;
use App\enter_insurence_company;
use App\enter_personalinfo;
use App\estimate_car;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{

    public function car(){
        $carInfo = enter_car_info::get();
        return view('carReport',['carInfo' => $carInfo]);
    }

    public function insurance(){
        $companies = enter_insurence_company::all();
        return view('insCompanyReport',['companies' => $companies]);
    }

    public function insuranceBenifiter(){
        $carInfo = enter_car_info::all();
        $companies = enter_insurence_company::all();
        return view('insCompanyBenifiter',['companies' => $companies,'carInfo' => $carInfo]);
    }

    public function carParts(){
        $carInfo = enter_car_info::all();
        return view('carPartsReports',['carInfo' => $carInfo]);
    }

    public function bank(){
        $carInfo = enter_car_info::all();
        $people = enter_personalinfo::all();
        return view('bank',['carInfo' => $carInfo,'people' => $people]);
    }

    //تقرير بيانات مركبة
    public function carInfo($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.carInfo',['car' => $car,'est' => $est,'l' => $l]);
    }

    //تقرير حساب ملف
    public function fileAccount($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.fileAccount',['car' => $car,'est' => $est,'l' => $l]);
    }

    //تقرير حساب ملف شخصي
    public function personalFileAccount($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.personalFileAccount',['car' => $car,'est' => $est,'l' => $l]);
    }

    //تقرير شطب مركبة
    public function carDestroy($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.carDestroy',['car' => $car,'est' => $est,'l' => $l]);
    }

    //تقرير ثمن المركبة
    public function carPrice($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.carPrice',['car' => $car,'est' => $est,'l' => $l]);
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
        $From = Input::get('From',date('Y-m-d'));
        if($From == null) $From = date('Y-m-d');
        $To = Input::get('To',date('Y-m-d'));
        if($To == null) $To = date('Y-m-d');
        $car = enter_car_info::find($fileId);
        $visits = CarVisit::where('vis_date','>=',$From)->where('vis_date','<=',$To)->where('vis_vehicle_num',$car->ve_num)->get();
        return view('report.carVisit',['car' => $car,'l' => $l,'visits' => $visits]);
    }

    //حساب شركة التامي
    public function insCompanyAcc(){
        $l = Input::get('lang','AR');
        $ins_num = Input::get('ins_num',1);
        $benName = Input::get('benName',0);
        $From = Input::get('From',date('Y-m-d'));
        $To = Input::get('To',date('Y-m-d'));

        $company = enter_insurence_company::find($ins_num);

        return view('report.insCompanyAcc',['l' => $l,'company' => $company]);
    }

    //حساب شركة التامين للمستفيد
    public function insCompanyUser(){
        $l = Input::get('lang','AR');
        $car_num = Input::get('car_num',0);
        $ins_num = Input::get('ins_num',1);
        $benName = Input::get('benName',0);
        $RegDate = Input::get('RegDate',date('Y-m-d'));
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

    //شهادة
    public function degree($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        return view('report.degree',['car' => $car,'l' => $l]);
    }

    //شهادة بنك
    public function bankStmnt($l = 'AR'){
        return view('report.bankStmnt',['l' => $l]);
    }
}