<?php

namespace App\Http\Controllers;

use App\Body_vehicle_work;
use App\carcost;
use App\estimate_car;
use App\getCarInfo;
use App\maintenance_vehicle_work;
use App\mechanic_vehicle_work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addBodywork extends Controller
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
        $data=Input::get('Bodytable');
        foreach ($data as $item){
            $user=new Body_vehicle_work;

            $user->bo_vehicle_num=$item['carnumber'];
            $user->bo_limit_num=$item['limitno'];
            $user->bo_part_num=$item['carpartno'];
            $user->bo_part_produce_num=$item['partcode'];
            $user->bo_part_type=$item['parttypeno'];
            $user->bo_bod_count=$item['count'];
            $user->bo_rate=$item['percentage'];
            $user->bo_consump_mech_rate=$item['percentageused'];
            $user->bo_date=$item['date'];
            $user->bo_note=$item['note'];
            $user->bo_limit_name=$item['limit'];
            $user->bo_part_name=$item['carpart'];
            $user->bo_part_typename=$item['parttype'];
            $user->partPrice=$item['price'];
            $user->file_number=$item['fileNumber'];



            if($user->save()){
                session()->flash("notif_body","تم ادخال قطع غيار هيكل بنجاح ");
            }else{
                session()->flash("notif_body","لم يتم ادخال قطع غيار هيكل لحدوث خطأ في الادخال");
            }

        }
        return redirect()->to('/addcarTransaction');
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
        Body_vehicle_work::where('file_number','=',$num)->delete();

        $data=Input::get('Bodytable');
        foreach ($data as $item){
            $user=new Body_vehicle_work;

            $user->bo_vehicle_num=$item['carnumber'];
            $user->bo_limit_num=$item['limitno'];
            $user->bo_part_num=$item['carpartno'];
            $user->bo_part_produce_num=$item['partcode'];
            $user->bo_part_type=$item['parttypeno'];
            $user->bo_bod_count=$item['count'];
            $user->bo_rate=$item['percentage'];
            $user->bo_consump_mech_rate=$item['percentageused'];
            $user->bo_date=$item['date'];
            $user->bo_note=$item['note'];
            $user->bo_limit_name=$item['limit'];
            $user->bo_part_name=$item['carpart'];
            $user->bo_part_typename=$item['parttype'];
            $user->partPrice=$item['price'];
            $user->file_number=$item['fileNumber'];



            $user->save();

        }
        $this->updateDamage($num);
        return redirect()->to('/BodyTransaction');

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
        Body_vehicle_work::where('file_number','=',$num)->delete();
        return response()->json();
    }


    public function getall(Request $request){
        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_license_end_date','ve_insurence_end_date','attachments','ve_note')->where('file_num',$request->id)->take(1500)->get();

        $data2=Body_vehicle_work::select('bo_vehicle_num','bo_limit_num','bo_part_num','bo_part_produce_num',
            'bo_part_type','bo_bod_count','bo_rate','bo_consump_mech_rate','bo_date','bo_note',
            'bo_limit_name','bo_part_name','bo_part_typename','partPrice','file_number')->where('file_number',$request->id)->take(1500)->get();

        return response()->json(array('data' => $data, 'data2' => $data2));
    }
}
