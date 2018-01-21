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
        $output=Input::get('name');
$attach=' ';
        foreach ($output as $sku){
            $attach = $attach.','.$sku;
        }


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


        return redirect()->to('MainInput.CarInformation');



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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
