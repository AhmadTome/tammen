<?php

namespace App\Http\Controllers;

use App\getCarInfo;
use App\maintenance_vehicle_work;
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
             session()->flash("notif","تم ادخال اعمال صيانة بنجاح ");
         }else{
             session()->flash("notif","لم يتم ادخال اعمال صيانة لحدوث خطأ في الادخال");

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
        return redirect()->to('/maintinanceTransaction');
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
