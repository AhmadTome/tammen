<?php

namespace App\Http\Controllers;

use App\Body_vehicle_work;
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
