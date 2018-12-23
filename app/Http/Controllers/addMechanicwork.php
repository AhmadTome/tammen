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

class addMechanicwork extends Controller
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


        $data=Input::get('Mechanicaltable');
        foreach ($data as $item){
            $user=new mechanic_vehicle_work;

            $user->me_vehicle_num=$item['carnumber'];
            $user->me_limit_num=$item['limitno'];
            $user->me_part_num=$item['carpartno'];
            $user->me_part_produce_num=$item['partcode'];
            $user->me_part_type=$item['parttypeno'];
            $user->mech_price=$item['price'];
            $user->me_mech_count=$item['count'];
            $user->me_rate=$item['percentage'];
            $user->me_consump_mech_rate=$item['percentageused'];
            $user->me_date=$item['date'];
            $user->me_note=$item['note'];
            $user->me_limit_name=$item['limit'];
            $user->me_part_name=$item['carpart'];
            $user->me_part_typename=$item['parttype'];
            $user->filenumber=$item['fileNumber'];


            if($user->save()){
                session()->flash("notif_mech","تم ادخال قطع غيار ميكانيك بنجاح ");
            }else{
                session()->flash("notif_mech","لم يتم ادخال قطع غيار ميكانيك لحدوث خطأ في الادخال");
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


        $num=Input::get('filenumber');
        mechanic_vehicle_work::where('filenumber','=',$num)->delete();
        $data=Input::get('Mechanicaltable');
        foreach ($data as $item){
            $user=new mechanic_vehicle_work;

            $user->me_vehicle_num=$item['carnumber'];
            $user->me_limit_num=$item['limitno'];
            $user->me_part_num=$item['carpartno'];
            $user->me_part_produce_num=$item['partcode'];
            $user->me_part_type=$item['parttypeno'];
            $user->mech_price=$item['price'];
            $user->me_mech_count=$item['count'];
            $user->me_rate=$item['percentage'];
            $user->me_consump_mech_rate=$item['percentageused'];
            $user->me_date=$item['date'];
            $user->me_note=$item['note'];
            $user->me_limit_name=$item['limit'];
            $user->me_part_name=$item['carpart'];
            $user->me_part_typename=$item['parttype'];
            $user->filenumber=$item['fileNumber'];



            $user->save();

        }

        $this->updateDamage($num);
        return redirect()->to('/mechanicalTransaction');
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
        mechanic_vehicle_work::where('filenumber','=',$num)->delete();
        return response()->json();
    }
    public function getall(Request $request){
        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_license_end_date','ve_insurence_end_date','attachments','ve_note')->where('file_num',$request->id)->take(1500)->get();
        $data2=mechanic_vehicle_work::select('me_vehicle_num','me_limit_num','me_part_num','me_part_produce_num',
            'me_part_type','mech_price','me_mech_count','me_rate','me_consump_mech_rate','me_date'
            ,'me_note','me_limit_name','me_part_name','me_part_typename','filenumber')->where('filenumber',$request->id)->take(1500)->get();

        return response()->json(array('data' => $data, 'data2' => $data2));
    }
}
