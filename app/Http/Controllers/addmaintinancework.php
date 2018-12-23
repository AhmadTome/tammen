<?php

namespace App\Http\Controllers;

use App\body_vehicle_work;
use App\carcost;
use App\estimate_car;
use App\getCarInfo;
use App\maintenance_vehicle_work;
use App\mechanic_vehicle_work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addmaintinancework extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





      $data=Input::get('maintinacetable');
       // $data = $request->maintinacetable;
     foreach ($data as $item){
       $user=new maintenance_vehicle_work;

         $user->mawo_vehicl_num=$item['carnumber'];
         $user->mawo_limit_num=$item['limitno'];
         $user->mawo_work_num=$item['workno'];
         $user->mawo_cost=$item['price'];
         $user->mawo_rate=$item['percantige'];
         $user->mawo_register_date=$item['date'];
         $user->mawo_details=$item['details'];
         $user->mawo_limit_name=$item['limit'];
         $user->mawo_work_name=$item['work'];
         $user->file_number=$item['fileNumber'];
         if($user->save()){
             session()->flash("notif_maintin","تم ادخال اعمال صيانة بنجاح ");
         }else{
             session()->flash("notif_maintin","لم يتم ادخال اعمال صيانة لحدوث خطأ في الادخال");
         }

     }
        return redirect()->to('/addcarTransaction');
         //return response()->json($data);
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

        $num = Input::get('filenumber');
        maintenance_vehicle_work::where('file_number', '=', $num)->delete();

        $data = Input::get('maintinacetable');
        // $data = $request->maintinacetable;
        foreach ($data as $item) {
            $user = new maintenance_vehicle_work;

            $user->mawo_vehicl_num = $item['carnumber'];
            $user->mawo_limit_num = $item['limitno'];
            $user->mawo_work_num = $item['workno'];
            $user->mawo_cost = $item['price'];
            $user->mawo_rate = $item['percantige'];
            $user->mawo_register_date = $item['date'];
            $user->mawo_details = $item['details'];
            $user->mawo_limit_name = $item['limit'];
            $user->mawo_work_name = $item['work'];
            $user->file_number = $item['fileNumber'];
            $user->save();
        }


        $this->updateDamage($num);



        return redirect()->to('/maintinanceTransaction');
    }

    public function updateDamage($num){
        $data_cal =0.0;
        $mecha_work=mechanic_vehicle_work::select('mech_price','me_mech_count')->where('filenumber',$num)->take(1500)->get();
        $maintinance_work=maintenance_vehicle_work::select('mawo_cost')->where('file_number',$num)->take(1500)->get();
        $body_work=body_vehicle_work::select('partPrice','bo_bod_count')->where('file_number',$num)->take(1500)->get();

        foreach ($mecha_work as $value){
            $data_cal = $data_cal+($value->mech_price * $value->me_mech_count);
        }
        foreach ($maintinance_work as $value){
            $data_cal = $data_cal+($value->mawo_cost );
        }

        foreach ($body_work as $value){
            $data_cal = $data_cal+($value->partPrice * $value->bo_bod_count);
        }

        $carprice=carcost::select('finalcost')->where('filrnumberhidden',$num)->take(100)->get();

        $Dmagepercient = ($data_cal / $carprice[0]->finalcost) * 100 ;

        estimate_car::where('fileNumber','=',$num)
            ->update(array('DamagePercantige'=>$Dmagepercient , 'finalPriceForMaintinance'=> $data_cal));

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
        maintenance_vehicle_work::where('file_number','=',$num)->delete();
        return response()->json();
    }

    public function getall(Request $request){
        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_license_end_date','ve_insurence_end_date','attachments','ve_note')->where('file_num',$request->id)->take(1500)->get();
        $data2=maintenance_vehicle_work::select('mawo_vehicl_num','file_number','mawo_limit_num','mawo_limit_name',
            'mawo_work_name','mawo_work_num','mawo_cost','mawo_rate','mawo_register_date','mawo_details')->where('file_number',$request->id)->take(1500)->get();

        return response()->json(array('data' => $data, 'data2' => $data2));
    }


}
