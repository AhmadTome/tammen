<?php

namespace App\Http\Controllers;

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
         $user->save();

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
