<?php

namespace App\Http\Controllers;

use App\getCarInfo;
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



            $user->save();

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
        return redirect()->to('/mechanicalTransaction');
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
