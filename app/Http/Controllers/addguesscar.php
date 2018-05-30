<?php

namespace App\Http\Controllers;

use App\Body_vehicle_work;
use App\Damage;
use App\drop_car;
use App\enter_city;
use App\enter_garage;
use App\enter_insurence_company;
use App\enter_personalinfo;
use App\estimate_car;
use App\Estimater;
use App\maintenance_vehicle_work;
use App\mechanic_vehicle_work;
use Illuminate\Http\Request;
use App\getCarInfo;
use App\carcost;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class addguesscar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carInfo=getCarInfo::all();
        $insuranceCompany=enter_insurence_company::all();
        $cities=enter_city::all();
        $Id = enter_personalinfo::all();
        $DamageType=Damage::all();
        $Estimater=Estimater::all();
        $Garage=enter_garage::all();


        return view('MainInput.carGuess')->with('carInfo',$carInfo)->with('insuranceCompany',$insuranceCompany)
            ->with('cities',$cities)->with('Id',$Id)->with('DamageType',$DamageType)->with('Estimater',$Estimater)
            ->with('Garage',$Garage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function findCarInfoforGesscar(Request $request){

        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_body_num','ve_insurence_num')->where('file_num',$request->id)->take(1500)->get();
        $data2=carcost::select('finalcost')->where('filrnumberhidden',$request->id)->take(100)->get();

        return response()->json(array('data'=>$data , 'data2'=>$data2));//then sent this data to ajax success
    }


    public function findCostforGuessCar(Request $request){
        $data =0.0;
        $mecha_work=mechanic_vehicle_work::select('mech_price','me_mech_count')->where('filenumber',$request->id)->take(1500)->get();
        $maintinance_work=maintenance_vehicle_work::select('mawo_cost')->where('file_number',$request->id)->take(1500)->get();
        $body_work=Body_vehicle_work::select('partPrice','bo_bod_count')->where('file_number',$request->id)->take(1500)->get();

        foreach ($mecha_work as $value){
            $data = $data+($value->mech_price * $value->me_mech_count);
        }
        foreach ($maintinance_work as $value){
            $data = $data+($value->mawo_cost );
        }

        foreach ($body_work as $value){
            $data = $data+($value->partPrice * $value->bo_bod_count);
        }





        return $data;

    }

    public function findDropPercantige(Request $request){


        $finalPercantige=0.0;
    $percantige = drop_car::select('percantige')->where('filenumber',$request->id)->take(1500)->get();
    foreach ($percantige as $value) {
        $finalPercantige = $finalPercantige + $value->percantige;
    }


return $finalPercantige;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'filenumber' => 'required|unique:estimate_cars,fileNumber'
        ]);


        $user=new estimate_car;
        $user->fileNumber=Input::get('filenumber');
        $user->to=Input::get('ToPerson');
        $user->climeNumber=Input::get('ClaimNumber');
        $user->insurance_company=Input::get('insuranceCompany');
        $user->city=Input::get('City');
        $user->persone_name=Input::get('personName');
        $user->person_insurances=Input::get('InsurancePersonal');
        $user->person_insurance_note=Input::get('personNote');
        $user->coverDamage=Input::get('coverDamage');
        $user->registerDate=Input::get('dateRegister');
        $user->accidantDate=Input::get('accidentDate');
        $user->checkDate=Input::get('checkDate');
        $user->Insurance_policy=Input::get('InsuranceNumber2');
        $user->DamageType=Input::get('damageType');
        $user->estimaterName=Input::get('GuessNumber');
        $user->Garage=Input::get('garageNumber');
        $user->carPrice=Input::get('carPrice');
        $user->transport=Input::get('visit');
        $user->gelary=Input::get('photograper');
        $user->officeCost=Input::get('officeCost');
        $user->finalPriceForMaintinance=Input::get('cost');
        $user->dropPercantige=Input::get('dropPercantige');
        $user->dropCost=Input::get('dropPercantigePrice');
        $user->estimatePercantige=Input::get('Guesspersantige');
        $user->DamagePercantige=Input::get('TechnicalDamage');
        $user->checkplace=Input::get('checkplace');
        $user->DamageCost=Input::get('DebrisPrice');
        $user->visitCost=Input::get('visitcost');
        $user->DamageDiscription=Input::get('DamegeDescription');
        $user->EstimateNote=Input::get('noteGuess');
        $user->carEstimateNote=Input::get('noteGuessCar');
        $user->Attachment=Input::get('AttachmentsGuess');
        $user->DestroyCarTo=Input::get('crossOffNamer');
        $user->DestroyText=Input::get('crossOffNote');

        if($user->save()){
            session()->flash("notif","تم ادخال تخمين المركبة بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال تخمين المركبة لحدوث خطأ في الادخال");

        }
        return redirect()->to('/carGuess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $fileNumber=Input::get('filenumber');
        $to=Input::get('ToPerson');
        $climeNumber=Input::get('ClaimNumber');
        $insurance_company=Input::get('insuranceCompany');
        $city=Input::get('City');
        $persone_name=Input::get('personName');
        $person_insurances=Input::get('InsurancePersonal');
        $person_insurance_note=Input::get('personNote');
        $coverDamage=Input::get('coverDamage');
        $registerDate=Input::get('dateRegister');
        $accidantDate=Input::get('accidentDate');
        $checkDate=Input::get('checkDate');
        $Insurance_policy=Input::get('InsuranceNumber2');
        $DamageType=Input::get('damageType');
        $estimaterName=Input::get('GuessNumber');
        $Garage=Input::get('garageNumber');
       // $carPrice=Input::get('carPrice');
        $transport=Input::get('visit');
        $gelary=Input::get('photograper');
        $officeCost=Input::get('officeCost');
        //$finalPriceForMaintinance=Input::get('cost');
       // $dropPercantige=Input::get('dropPercantige');
      //  $dropCost=Input::get('dropPercantigePrice');
        $estimatePercantige=Input::get('Guesspersantige');
      //  $DamagePercantige=Input::get('TechnicalDamage');

        $DamageCost=Input::get('DebrisPrice');
        $visitCost=Input::get('visitcost');
        $DamageDiscription=Input::get('DamegeDescription');
        $EstimateNote=Input::get('noteGuess');
        $carEstimateNote=Input::get('noteGuessCar');
        $Attachment=Input::get('AttachmentsGuess');
        $DestroyCarTo=Input::get('crossOffNamer');
        $DestroyText=Input::get('crossOffNote');

        $checkplace=Input::get('checkplace');

        $lastid=Input::get('carInfo_select');

        estimate_car::where('fileNumber', '=', $lastid)
            ->update(array('fileNumber' =>$fileNumber , 'to'=>$to ,'climeNumber'=>$climeNumber , 'insurance_company'=>$insurance_company ,
                'city'=>$city,'persone_name'=>$persone_name,'person_insurances'=>$person_insurances,
                'person_insurance_note'=>$person_insurance_note,'coverDamage'=>$coverDamage,'registerDate'=>$registerDate,
                'accidantDate'=>$accidantDate,'checkDate'=>$checkDate,'Insurance_policy'=>$Insurance_policy,
                'DamageType'=>$DamageType,'estimaterName'=>$estimaterName,'Garage'=>$Garage,
                'transport'=>$transport,'gelary'=>$gelary,'officeCost'=>$officeCost,
                'estimatePercantige'=>$estimatePercantige,'DamageCost'=>$DamageCost
            ,'visitCost'=>$visitCost,'DamageDiscription'=>$DamageDiscription
            ,'EstimateNote'=>$EstimateNote,'carEstimateNote'=>$carEstimateNote
            ,'Attachment'=>$Attachment,'DestroyCarTo'=>$DestroyCarTo
            ,'DestroyText'=>$DestroyText,'checkplace'=>$checkplace));

        return redirect()->to('/CarGuessTransaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $num = $request->id;

        estimate_car::where('fileNumber','=',$num)->delete();
        return response()->json();
    }
    public function findallinfo(Request $request){
        $data=estimate_car::select('fileNumber','to','climeNumber','insurance_company','city',
            'persone_name','person_insurances','person_insurance_note','coverDamage','registerDate','accidantDate'
            ,'checkDate','Insurance_policy','DamageType','estimaterName'
            ,'Garage','carPrice','transport','gelary'
            ,'officeCost','finalPriceForMaintinance','dropPercantige','dropCost'
            ,'estimatePercantige','DamagePercantige','DamageCost','visitCost'
            ,'DamageDiscription','EstimateNote','carEstimateNote','Attachment'
            ,'DestroyCarTo','DestroyText','checkplace')
            ->where('fileNumber',$request->id)->take(1500)->get();
        return response()->json($data);
    }
}
