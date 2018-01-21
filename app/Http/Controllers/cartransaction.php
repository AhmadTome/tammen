<?php

namespace App\Http\Controllers;


use App\enter_body_part;
use App\enter_mechanic_part;
use Illuminate\Http\Request;
use App\getCarInfo;
use App\Product;
use App\enter_maintinance;
class cartransaction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $carInfo=getCarInfo::all();
     $maintinanceinfo=enter_maintinance::all();
     $mechanicinfo=enter_mechanic_part::all();
     $Bodyinfo=enter_body_part::all();


        return view('MainInput.carTransaction')->with("carInfo",$carInfo)->with("maintinanceinfo",$maintinanceinfo)->with("mechanicinfo",$mechanicinfo)->with("Bodyinfo",$Bodyinfo);
    }

    public function findCarInfo(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num')->where('file_num',$request->id)->take(1500)->get();
        return response()->json($data);//then sent this data to ajax success
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
