<?php

namespace App\Http\Controllers;

use App\Body_vehicle_work;
use App\enter_accedent_side;
use App\maintenance_vehicle_work;
use App\mechanic_vehicle_work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addAccedentSide extends Controller
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


        $user=new enter_accedent_side;
        $user->si_num=Input::get('accSideNum');
        $user->si_name=Input::get('accSideValue');
        if($user->save()){
            session()->flash("notif","تم ادخال طرف حادث بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال طرف حادث لحدوث خطأ في الادخال");

        }
        return redirect()->to('addAccedentSide');
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
        $lastnum=$request->lastnum;
        $lastname=$request->lastname;

        $newnum=$request->num;
        $newname=$request->name;


        enter_accedent_side::where('si_num', '=', $lastnum)
            ->where('si_name','=',$lastname)
            ->update(array('si_num' =>$newnum , 'si_name'=>$newname ));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $num = $request->num;
        $name = $request->name;
        enter_accedent_side::where('si_num','=',$num)->where('si_name','=',$name)->delete();
        return response()->json();
    }
}
