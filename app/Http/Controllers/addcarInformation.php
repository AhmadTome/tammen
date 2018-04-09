<?php

namespace App\Http\Controllers;

use App\enter_car_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class addcarInformation extends Controller
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
        $this->validate($request,[
            'fileNumber' => 'required|unique:enter_car_infos,file_num'
        ]);




        $output=Input::get('name');
$attach='';
    for($i=0;$i<count($output)-1;$i++){
        $attach=$attach.$output[$i].',';
    }
        $attach=$attach.$output[count($output)-1];

        $user=new enter_car_info;

        $user->file_num=Input::get('fileNumber');
        $user->ve_num=Input::get('carNumber');
        $user->ve_body_num=Input::get('bodyNumber');
        $user->ve_engin_num=Input::get('EnginNumber');
        $user->ve_engin_size=Input::get('Enginsize');

        $user->ve_version=Input::get('carVersion');
        $user->ve_produce_year=Input::get('producedYear');
        $user->ve_used=Input::get('carused');
        $user->ve_color=Input::get('carColor');
        $user->ve_weight=Input::get('weight');

        $user->ve_speedometer=Input::get('speedMeter');
        $user->ve_gas_type=Input::get('gasType');
        $user->ve_power_push=Input::get('power');
        $user->ve_gear_type=Input::get('gearType');
        $user->ve_insurence_num=Input::get('insuranceNumber');

        $user->ve_insurence_statr_date=Input::get('startInsurance');
        $user->ve_insurence_end_date=Input::get('endInsurance');
        $user->ve_license_end_date=Input::get('endlicense');
        $user->ve_note=Input::get('note');
        $user->ve_version_num=Input::get('NumberCarVersion');

        $user->seat_num=Input::get('passengerNumber');
        $user->attachments=$attach;
        $user->seat_close_Driver=Input::get('seatsCloseofDriver');

        $user->save();


        return redirect()->to('/carinfoTransaction');


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
        $output=Input::get('name');
        $attach='';
        for($i=0;$i<count($output)-1;$i++){
            $attach=$attach.$output[$i].',';
        }
        $attach=$attach.$output[count($output)-1];
        $filenumber=Input::get('fileNumber');
        $carnumber=Input::get('carNumber');
        $bodynumber=Input::get('bodyNumber');
        $enginnumber=Input::get('EnginNumber');
        $enginsize=Input::get('Enginsize');

        $carversion=Input::get('carVersion');
        $producesyear=Input::get('producedYear');
        $carused=Input::get('carused');
        $carcolor=Input::get('carColor');
        $weight=Input::get('weight');

        $speedmeter=Input::get('speedMeter');
        $gastype=Input::get('gasType');
        $power=Input::get('power');
        $geartype=Input::get('gearType');
        $insurancenumber=Input::get('insuranceNumber');

        $startinsurance=Input::get('startInsurance');
        $endinsurance=Input::get('endInsurance');
        $endlicense=Input::get('endlicense');
        $note=Input::get('note');
        $numbercarversion=Input::get('NumberCarVersion');

        $passengernumber=Input::get('passengerNumber');

        $seatsCloseofDriver=Input::get('seatsCloseofDriver');
$lastfilenum=Input::get('carInfo_select');
        enter_car_info::where('file_num', '=', $lastfilenum)
            ->update(array('file_num' =>$filenumber , 've_num'=>$carnumber ,'ve_body_num'=>$bodynumber , 've_engin_num'=>$enginnumber ,
                've_engin_size'=>$enginsize,'ve_version'=>$carversion,'ve_produce_year'=>$producesyear,
                've_used'=>$carused,'ve_color'=>$carcolor,'ve_weight'=>$weight,
                  've_speedometer'=>$speedmeter,'ve_gas_type'=>$gastype,'ve_power_push'=>$power,
                've_gear_type'=>$geartype,'ve_insurence_num'=>$insurancenumber,'ve_insurence_statr_date'=>$startinsurance,
                've_insurence_end_date'=>$endinsurance,'ve_license_end_date'=>$endlicense,'ve_note'=>$note,
                've_version_num'=>$numbercarversion,'seat_num'=>$passengernumber,'attachments'=>$attach,'seat_close_Driver'=>$seatsCloseofDriver));

        return redirect()->to('/carinfoTransaction');

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

        enter_car_info::where('file_num','=',$num)->delete();
        return response()->json();
    }


    public function findcarinfo(Request $request){
        $data=enter_car_info::select('file_num','ve_num','ve_body_num','ve_engin_num','ve_engin_size',
            've_version','ve_produce_year','ve_used','ve_color','ve_weight','ve_speedometer'
            ,'ve_gas_type','ve_power_push','ve_gear_type','ve_insurence_num'
            ,'ve_insurence_statr_date','ve_insurence_end_date','ve_license_end_date','ve_note'
            ,'ve_version_num','seat_num','attachments','seat_close_Driver')
            ->where('file_num',$request->id)->take(1500)->get();
        return response()->json($data);
    }
}
