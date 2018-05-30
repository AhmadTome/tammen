<?php

namespace App\Http\Controllers;

use App\Body_vehicle_work;
use App\drop_car;
use App\enter_body_part;
use App\enter_Drop_statment;
use App\enter_maintinance;
use App\maintenance_vehicle_work;
use App\mechanic_vehicle_work;
use Illuminate\Http\Request;
use App\getCarInfo;
use App\carcost;
use Illuminate\Support\Facades\Input;

class dropvalueofcar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carInfo=getCarInfo::all();
        $dropStatment=enter_Drop_statment::all();
        $maintinance=enter_maintinance::all();
        $bodypart=enter_body_part::all();




        return view('MainInput.dropvalue')->with("carInfo",$carInfo)->with("dropStatment",$dropStatment)->with("maintinance",$maintinance)->with("bodypart",$bodypart);

    }
    public function findCarInfoforDropValue(Request $request){

        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_body_num')->where('file_num',$request->id)->take(1500)->get();
        $data2=carcost::select('finalcost')->where('filrnumberhidden',$request->id)->take(100)->get();
        $data3=drop_car::select('filenumber','dropStatment','part','maintinance','data','count','percantige','finalprice','maintinanceCost','note'
        ,'firstCar','secondCar'
        )->where('filenumber',$request->id)->take(100)->get();

        return response()->json(array('data'=>$data , 'data2'=>$data2, 'data3'=>$data3));//then sent this data to ajax success
    }

    public function findCostDropValue(Request $request){
        $data =0.0;
        $mecha_work=mechanic_vehicle_work::select('mech_price')->where('filenumber',$request->id)->take(1500)->get();
        $maintinance_work=maintenance_vehicle_work::select('mawo_cost')->where('file_number',$request->id)->take(1500)->get();
        $body_work=Body_vehicle_work::select('partPrice')->where('file_number',$request->id)->take(1500)->get();

        foreach ($mecha_work as $value){
            $data = $data+($value->mech_price);
        }
        foreach ($maintinance_work as $value){
            $data = $data+($value->mawo_cost);
        }

        foreach ($body_work as $value){
            $data = $data+($value->partPrice);
        }


        return json_encode($data);
       // return response()->json($data);
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
        $this->validate($request,[
            'filenumber' => 'required|unique:drop_cars,filenumber'
        ]);

        $data =Input::get('dropcartable');

        foreach ($data as $item){

            $user=new drop_car;
            $user->filenumber=$item['filenumber'];
            $user->dropStatment=$item['dropvaluestatment'];
            $user->part=$item['part'];
            $user->maintinance=$item['maintinace'];
            $user->data=$item['date'];
            $user->count=$item['countpart'];
            $user->percantige=$item['percantige'];
            $user->note=$item['note'];
            $user->finalprice=Input::get('carPrice');
            $user->maintinanceCost=Input::get('cost');
            $user->firstCar=Input::get('firstcar_note');
            $user->secondCar=Input::get('secondcar_note');

            if($user->save()){
                session()->flash("notif","تم ادخال هبوط القيمة بنجاح ");
            }else{
                session()->flash("notif","لم يتم ادخال هبوط القيمة لحدوث خطأ في الادخال");

            }

        }


        return redirect()->to('/dropvalue');
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

        drop_car::where('filenumber','=',$num)->delete();
        $data =Input::get('dropcartable');

        foreach ($data as $item){

            $user=new drop_car;
            $user->filenumber=$item['filenumber'];
            $user->dropStatment=$item['dropvaluestatment'];
            $user->part=$item['part'];
            $user->maintinance=$item['maintinace'];
            $user->data=$item['date'];
            $user->count=$item['countpart'];
            $user->percantige=$item['percantige'];
            $user->note=$item['note'];
            $user->finalprice=Input::get('carPrice');
            $user->maintinanceCost=Input::get('cost');
            $user->firstCar=Input::get('firstcar_note');
            $user->secondCar=Input::get('secondcar_note');

            $user->save();

        }


        return redirect()->to('/dropcarTransaction');
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

        drop_car::where('filenumber','=',$num)->delete();
        return response()->json();
    }
}
