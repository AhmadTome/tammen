<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enter_car_info;
use App\CarVisit;
use App\enter_insurence_company;
use App\enter_personalinfo;
use App\estimate_car;
use App\body_vehicle_work;
use App\mechanic_vehicle_work;
use App\maintenance_vehicle_work;
use App\drop_car;
use App\enter_certificate;
use App\add_image;
use App\Estimater;
use App\bankinfo;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{

    public function car(){
        $carInfo = enter_car_info::get();
        return view('carReport',['carInfo' => $carInfo]);
    }

    public function insurance(){
        $companies = enter_insurence_company::all();
        $toNames = estimate_car::distinct('to')->select('to')->get();
        return view('insCompanyReport',['companies' => $companies,'toNames' => $toNames]);
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

    public function monitor(){
        return view('monitor');
    }

    public function images(){
        $carInfo = enter_car_info::all();
        return view('images',['carInfo' => $carInfo]);
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
        $estimater = Estimater::where('nes_name',$est->estimaterName)->first();
        return view('report.carDestroy',['car' => $car,'est' => $est,'l' => $l,'estimater' => $estimater]);
    }

    //تقرير ثمن المركبة
    public function carPrice($fileId,$l = 'AR'){
        $car = enter_car_info::with(['maintenance','bodyVehicleWork'])->find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.carPrice',['car' => $car,'est' => $est,'l' => $l]);
    }

    //تقرير ثمن المركبة مع حطام
    public function carPriceWithRek($fileId,$l='AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.carPriceWithRek',['car' => $car,'est' => $est,'l' => $l]);
    }

    //دائرة الترخيص
    public function licence($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.licence',['car' => $car,'l' => $l,'est' => $est]);
    }

    //تقرير أضرار أولي
    public function initialDamage($fileId,$l = 'AR'){
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->first();
        return view('report.initialDamage',['car' => $car,'est' => $est,'l' => $l]);
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
        $toName = Input::get('toName');
        $company = enter_insurence_company::where('ins_name',$ins_num)->first();
        $ests = estimate_car::with('carInfo')->where('to',$toName)->where('insurance_company',$ins_num)->where('registerDate','>=',$From)->where('registerDate','<=',$To)->get();
        return view('report.insCompanyAcc',['l' => $l,'company' => $company,'ests' => $ests]);
    }

    //حساب شركة التامين للمستفيد
    public function insCompanyUser(){
        $l = Input::get('lang','AR');
        $car_num = Input::get('car_num',0);
        $ins_num = Input::get('ins_num',1);
        $benName = Input::get('benName',0);
        //$RegDate = Input::get('RegDate',date('Y-m-d'));
        $company = enter_insurence_company::where('ins_name',$ins_num)->firstOrFail();
        $est = estimate_car::with('carInfo')->where('fileNumber',$car_num)->firstOrFail();
        return view('report.insCompanyUser',['l' => $l,'company' => $company,'est' => $est]);
    }

    //تقرير قطع غيار هيكل
    public function bodyPartChange($l = 'AR'){
        $fileId = Input::get('file_num','');
        $car = enter_car_info::find($fileId);
        $date = Input::get('date',date('Y-m-d'));
        $parts = body_vehicle_work::where('file_number',$fileId)->where('bo_date',$date)->get();
        return view('report.bodyPartChange',['car' => $car,'parts' => $parts,'l' => $l]);
    }

    //تقرير قطع غيار ميكانيك
    public function mechPartChange($l = 'AR'){
        $fileId = Input::get('file_num','');
        $car = enter_car_info::find($fileId);
        $parts = mechanic_vehicle_work::where('filenumber',$fileId)->get();
        return view('report.mechPartChange',['car' => $car,'parts' => $parts,'l' => $l]);
    }

    //أعمالمركبة
    public function carWork($fileId,$l = 'AR'){
        $fileId = Input::get('file_num','');
        $date = Input::get('date',date('Y-m-d'));
        $car = enter_car_info::find($fileId);
        $parts = maintenance_vehicle_work::where('file_number',$fileId)->where('mawo_register_date',$date)->get();
        return view('report.carWork',['car' => $car,'parts'=> $parts,'l' => $l]);
    }

    //هبوط مركبة
    public function carDown($l = 'AR'){
        $fileId = Input::get('file_num','');
        $car = enter_car_info::find($fileId);
        $date = Input::get('date',date('Y-m-d'));
        $drop = drop_car::where('filenumber',$fileId)->where('data',$date)->firstOrFail();
        return view("report.carDown",['car' => $car,'drop' => $drop,'l' => $l]);
    }

    //اضرار فنية لدائرة الترخيص
    public function carTechDamage($l = 'AR'){
        $fileId = Input::get('file_num','');
        $car = enter_car_info::find($fileId);
        $date = Input::get('date',date('Y-m-d'));
        return view('report.carTechDamage',['car' => $car,'l' => $l]);
    }

    //شهادة
    public function degree($l = 'AR'){
        $fileId = Input::get('file_num','');
        $car = enter_car_info::find($fileId);
        //$date = Input::get('date',date('Y-m-d'));
        $certificates = enter_certificate::all();
        return view('report.degree',['car' => $car,'certificates' => $certificates,'l' => $l]);
    }

    //شهادة بنك
    public function bankStmnt($l = 'AR'){
        $id = Input::get('id',1);
        $fileId = Input::get('file_num','');
        $date = Input::get('date',date('Y-m-d'));
        $carInfo = enter_car_info::find($fileId);
        $person = enter_personalinfo::find($id);
        $est = estimate_car::where('registerDate',$date)->where('fileNumber',$fileId)->firstOrFail();
        $bankInfo = bankinfo::where('filenumber',$fileId)->first();
        return view('report.bankStmnt',['carInfo' => $carInfo,'person' => $person,'l' => $l,'bankInfo' => $bankInfo,'est' => $est]);
    }

    //تقرير الرقابة
    public function monitorReport(){
        $l = Input::get('lang','AR');
        $From = Input::get('From',date('Y-m-d'));
        $To = Input::get('To',date('Y-m-d'));
        $ests = estimate_car::where('registerDate','>=',$From)->where('registerDate','<=',$To)->get();
        return view('report.monitorReport',['l' => $l,'ests' => $ests]);
    }

    //
    public function carImages($fileId){
        $allImages = add_image::where('file_number',$fileId)->get();
        $groupedImages = [];
        foreach($allImages as $image){
            $groupedImages[$image->im_photo_date][] = $image;
        }
        return view('report.carImages',['groupedImages' => $groupedImages]);
    }

    public function partsDates($fileId){
        $dropDates = drop_car::where('filenumber',$fileId)->distinct('data')->select('data')->get();
        $dates = [];
        foreach($dropDates as $date){
            $dates[] = [
                'value' => $date->data,
                'display' => $date->data." - هبوط مركبة"
            ];
        }

        $mDates = maintenance_vehicle_work::where('file_number',$fileId)->distinct('mawo_register_date')->select('mawo_register_date')->get();
        foreach($mDates as $date){
            $dates[] = [
                'value' => $date->mawo_register_date,
                'display' => $date->mawo_register_date." - أعمال مركبة"
            ];
        }

        $mcDates = mechanic_vehicle_work::where('filenumber',$fileId)->distinct('me_date')->select('me_date')->get();
        foreach($mcDates as $date){
            $dates[] = [
                'value' => $date->me_date,
                'display' => $date->me_date." - قطع غيار ميكانيك"
            ];
        }

        $bDates = body_vehicle_work::where('file_number',$fileId)->distinct('bo_date')->select('bo_date')->get();
        foreach($bDates as $date){
            $dates[] = [
                'value' => $date->bo_date,
                'display' => $date->bo_date." - قطع غيار هيكل"
            ];
        }

        return response()->json($dates);
    }

    public function bankDates($fileId){
        $dates = estimate_car::where('fileNumber',$fileId)->distinct('registerDate')->select('registerDate')->get();
        
        return response()->json($dates);
    }
}