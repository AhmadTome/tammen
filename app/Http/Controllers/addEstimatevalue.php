<?php

namespace App\Http\Controllers;

use App\enter_estimit_value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addEstimatevalue extends Controller
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
        $user = new enter_estimit_value;

        $user->estim_num=Input::get('textNum');
        $user->estim_name=Input::get('textName');
        $user->hebrow_text=Input::get('hebrow_text');

        if($user->save()){
            session()->flash("notif","تم ادخال قيمة التخمين بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال قيمة التخمين لحدوث خطأ في الادخال");

        }
        return redirect()->to('addEstimatevalue');

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


        enter_estimit_value::where('estim_num', '=', $lastnum)
            ->where('estim_name','=',$lastname)
            ->update(array('estim_num' =>$newnum , 'estim_name'=>$newname ,'hebrow_text'=>$request->hebrow));

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
        enter_estimit_value::where('estim_num','=',$num)->where('estim_name','=',$name)->delete();
        return response()->json();
    }
}
