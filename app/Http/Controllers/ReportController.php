<?php

namespace App\Http\Controllers;

use App\car_model;
use App\car_model_img;
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
use App\add_certificate;
use App\add_image;
use App\Estimater;
use App\bankinfo;
use App\letter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use function MongoDB\BSON\toJSON;

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

    public function AccountsInsuranceCompany(){
        return view('AccountsInsuranceCompany');
    }

    public function images(){
        $carInfo = enter_car_info::all();
        return view('images',['carInfo' => $carInfo]);
    }

    public function carModelImages(){
        $carInfo = car_model::all();
        return view('carModelImages',['carInfo' => $carInfo]);
    }

    //تقرير بيانات مركبة
    public function carInfo(Request $request,$l = 'AR'){

        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }
        return view('report.carInfo',['car' => $car,'est' => $est[0],'l' => $l]);
    }
    

    //تقرير حساب ملف
    public function fileAccount(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }

        return view('report.fileAccount',['car' => $car,'est' => $est[0],'l' => $l]);
    }

    //تقرير حساب ملف شخصي
    public function personalFileAccount(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::with('insCompany')->where('fileNumber',$fileId)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }

        return view('report.personalFileAccount',['car' => $car,'est' => $est[0],'l' => $l]);
    }

    //تقرير شطب مركبة
    public function carDestroy(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }else{
            $estimater = Estimater::where('nes_name',$est[0]->estimaterName)->get();
            
            if(count($estimater) == 0){
                return view('errors.noData',[
                    'msg' => 'لم يتم ايجاد مخمن'
                ]);
            }
        }

        return view('report.carDestroy',['car' => $car,'est' => $est[0],'l' => $l,'estimater' => $estimater[0]]);
    }

    //تقرير ثمن المركبة
    public function carPrice(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::with(['maintenance','bodyVehicleWork'])->find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }
        return view('report.carPrice',['car' => $car,'est' => $est[0],'l' => $l]);
    }

    //تقرير ثمن المركبة مع حطام
    public function carPriceWithRek(Request $request,$l='AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }

        return view('report.carPriceWithRek',['car' => $car,'est' => $est[0],'l' => $l]);
    }

    //دائرة الترخيص
    public function licence(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        $drop = drop_car::where('filenumber',$fileId)->get();

        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }
        return view('report.licence',['car' => $car,'l' => $l,'est' => $est[0],'drops' => $drop]);
    }

    //تقرير أضرار أولي
    public function initialDamage(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $car = enter_car_info::find($fileId);
        $est = estimate_car::where('fileNumber',$fileId)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }
        return view('report.initialDamage',['car' => $car,'est' => $est[0],'l' => $l]);
    }

    //كشف الزيارات
    public function carVisit(Request $request,$l = 'AR'){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }

        $From = Input::get('From',date('Y-m-d'));
        $To = Input::get('To',date('Y-m-d'));
        $car = enter_car_info::find($fileId);

        $visits = CarVisit::where('vis_vehicle_num',$fileId);

        if($From != null){
            $visits->where('vis_date','>=',$From);
        }

        if($To != null){
            $visits->where('vis_date','<=',$To);
        }
        return view('report.carVisit',['car' => $car,'l' => $l,'visits' => $visits->get()]);
    }

    //حساب شركة التامي
    public function insCompanyAcc(){
        $l = Input::get('lang','AR');
        $ins_num = Input::get('ins_num',1);
        $benName = Input::get('benName',0);

        
        $ests = estimate_car::with('carInfo')->where('insurance_company',$ins_num);

        $toName = Input::get('toName');

        if($toName != null && count($toName) != 0){
            $ests->whereIn('to',$toName);

        }

        $From = Input::get('From',date('Y-m-d'));
        if($From != null){
            $ests->where('registerDate','>=',$From);
        }
        
        $To = Input::get('To',date('Y-m-d'));
        if($To != null){
            $ests->where('registerDate','<=',$To);
        }

        $company = enter_insurence_company::where('ins_name',$ins_num)->first();
        
        return view('report.insCompanyAcc',['l' => $l,'company' => $company,'ests' => $ests->get()]);
    }

    //حساب شركة التامين للمستفيد
    public function insCompanyUser(){
        $l = Input::get('lang','AR');
        $car_num = Input::get('carInfo_select',0);
        $ins_num = Input::get('ins_num',1);

        $benName = Input::get('benName',0);
        //$RegDate = Input::get('RegDate',date('Y-m-d'));
        $company = enter_insurence_company::where('ins_name',$ins_num)->get();
        $est = estimate_car::with('carInfo')->where('fileNumber',$car_num)->get();

        if(count($company) == 0){
            return view('errors.noData',[
                'msg' => 'لم يتم ايجاد شركة التامين'
            ]);
        }

        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }
        
        return view('report.insCompanyUser',['l' => $l,'company' => $company[0],'est' => $est[0]]);
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
        $date = Input::get('date',date('Y-m-d'));
        $parts = mechanic_vehicle_work::where('filenumber',$fileId)->where('me_date',$date)->get();
        //$parts = mechanic_vehicle_work::where('filenumber',$fileId)->get();
        return view('report.mechPartChange',['car' => $car,'parts' => $parts,'l' => $l]);
    }

    //أعمالمركبة
    public function carWork($l = 'AR'){
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
        $drop = drop_car::where('filenumber',$fileId)->where('data',$date)->get();
        if(count($drop) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال هبوط مركبة اوﻻ'
            ]);
        }
        return view("report.carDown",['car' => $car,'drops' => $drop,'l' => $l]);
    }

    //اضرار فنية لدائرة الترخيص
    public function carTechDamage($l = 'AR'){
        $fileId = Input::get('file_num','');

        $estimate = estimate_car::where('fileNumber',$fileId)->get();
        $car = enter_car_info::find($fileId);
        $drop = drop_car::where('filenumber',$fileId)->get();


        $date = Input::get('date',date('Y-m-d'));
        return view('report.carTechDamage',['car' => $car,'estimate',$estimate[0],'drops' => $drop,'l' => $l]);
    }

    //شهادة
    public function degree($l = 'AR'){
        $fileId = Input::get('file_num','');
        $car = enter_car_info::find($fileId);
        //$date = Input::get('date',date('Y-m-d'));
        $certificates = add_certificate::all();
        return view('report.degree',['car' => $car,'certificates' => $certificates,'l' => $l]);
    }

    //شهادة بنك
    public function bankStmnt($l = 'AR'){
        $id = Input::get('id',1);
        $fileId = Input::get('file_num','');
        $carInfo = enter_car_info::find($fileId);
        $person = enter_personalinfo::find($id);

        $est = estimate_car::where('fileNumber',$fileId)->get();
        $bankInfo = bankinfo::where('filenumber',$fileId)->where('personname',$person->name)->get();
        if(count($est) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال معلومات تخمين لهذه المركبة'
            ]);
        }

        if(count($bankInfo) == 0){
            return view('errors.noData',[
                'msg' => 'يجب ادخال كشف بنك'
            ]);
        }

        return view('report.bankStmnt',['carInfo' => $carInfo,'person' => $person,'l' => $l,'bankInfo' => $bankInfo[0],'est' => $est[0]]);
    }

    //تقرير الرقابة
    public function monitorReport(){
        $l = Input::get('lang','AR');
        
        $ests;
        
        $From = Input::get('From',date('Y-m-d'));
        $To = Input::get('To',date('Y-m-d'));
        if($From == null){
            if($To == null){
                //$ests = \Illuminate\Support\Facades\DB::select('select m.summation,e.* from monitor_report m inner join estimate_cars e on m.fileNumber = e.fileNumber;');
                $ests=estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                    ->select('estimate_cars.*', 'monitor_report.summation')
                    ->get();
            }else{
                $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                    ->select('estimate_cars.*', 'monitor_report.summation')->where('registerDate','<=',$To)->get();
            }
        }else{
            if($To == null){
                $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                    ->select('estimate_cars.*', 'monitor_report.summation')->where('registerDate','>=',$From)->get();
            }else{
                $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                    ->select('estimate_cars.*', 'monitor_report.summation')->where('registerDate','>=',$From)->where('registerDate','<=',$To)->get();
            }
        }
        

        
        return view('report.monitorReport',['l' => $l,'ests' => $ests]);
    }

    //تقريرحساب شركة التأمين
    public function AccountsInsuranceCompanyReport(){

        $l = Input::get('lang','AR');
        $ests;
        $From = Input::get('From',date('Y-m-d'));
        $To = Input::get('To',date('Y-m-d'));
        $companyAccId = Input::get('To_selectBranch');

        // for specific Branch
        if(strpos($companyAccId,'-')){
            $companyAcc = explode('-',$companyAccId);
            $account = $companyAcc[0];
            $branchNO = $companyAcc[1];


            if($From == null){
                if($To == null){
                    //$ests = \Illuminate\Support\Facades\DB::select('select m.summation,e.* from monitor_report m inner join estimate_cars e on m.fileNumber = e.fileNumber;');
                    $ests=estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number',$account.'-'.$branchNO)
                        ->get();
                }else{
                    $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number',$account.'-'.$branchNO)
                        ->where('registerDate','<=',$To)->get();
                }
            }else{
                if($To == null){
                    $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number',$account.'-'.$branchNO)
                        ->where('registerDate','>=',$From)->get();
                }else{
                    $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number',$account.'-'.$branchNO)
                        ->where('registerDate','<=',$To)->get();
                }
            }

        }




        // for company to get all branches
        else{

            $account = $companyAccId;

            if($From == null){
                if($To == null){
                    //$ests = \Illuminate\Support\Facades\DB::select('select m.summation,e.* from monitor_report m inner join estimate_cars e on m.fileNumber = e.fileNumber;');
                    $ests=estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number','like',$account.'-%')
                        ->get();
                }else{
                    $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number','like',$account.'-%')
                        ->where('registerDate','<=',$To)->get();
                }
            }else{
                if($To == null){
                    $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number','like',$account.'-%')
                        ->where('registerDate','>=',$From)->get();
                }else{
                    $ests = estimate_car::leftJoin('monitor_report','estimate_cars.fileNumber','=', 'monitor_report.fileNumber')
                        ->leftJoin('enter_car_infos','estimate_cars.fileNumber','=','enter_car_infos.file_num')
                        ->leftJoin('accountstatment','estimate_cars.fileNumber','=','accountstatment.filenumber')
                        ->select('estimate_cars.*', 'monitor_report.summation','enter_car_infos.ve_num','accountstatment.*')
                        ->where('account_number','like',$account.'-%')
                        ->where('registerDate','<=',$To)->get();
                }
            }
        }






        return view('report.AccountsInsuranceCompanyReport',['l' => $l,'ests' => $ests]);
    }

    //
    public function carImages(Request $request){
        $fileId = $request->type;
        if(!$fileId){
            return;
        }
        $allImages = add_image::where('file_number',$fileId)->get();
        $groupedImages = [];
        foreach($allImages as $image){
            $groupedImages[$image->im_photo_date][] = $image;
        }
        return view('report.carImages',['groupedImages' => $groupedImages]);
    }

    //
    public function carImgModel(Request $request){
        $id = $request->type;
        if(!$id){
            return;
        }
        $allImages = car_model_img::where('car_model_id',$id)->get();
        $info      = car_model::where('id',$id)->get();
        $groupedImages = [];
        foreach($allImages as $image){
            $groupedImages[$image->im_photo_date][] = $image;
        }
        return view('report.carImgModel',['groupedImages' => $groupedImages , 'info' => $info]);
    }

    public function partsDates(Request $request){
        $fileId = $request->input('fileId');
        if(!$fileId){
            return ;
        }
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

    public function letter($id){
        $letter = letter::find($id);
        if($letter == null){
            return view('errors.noData');
        }

        return view('report.letter',['letter' => $letter]);
    }
}