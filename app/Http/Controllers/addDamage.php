<?php

namespace App\Http\Controllers;

use App\Damage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addDamage extends Controller
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
        $user=new Damage;
        $user->dam_num=Input::get('IdDamNum');
        $user->dam_name=Input::get('damName');
        $user->dam_hebrow=Input::get('hebrow_damName');
        if($user->save()){
            session()->flash("notif","تم اضافة الضرر بنجاح ");
        }else{
            session()->flash("notif","لم يتم اضافة الضرر لحدوث خطأ في الادخال");

        }
        return redirect()->to('addDamage');
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


        Damage::where('dam_num', '=', $lastnum)
            ->where('dam_name','=',$lastname)
            ->update(array('dam_num' =>$newnum , 'dam_name'=>$newname ,'dam_hebrow'=>$request->hebrow));

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
        Damage::where('dam_num','=',$num)->where('dam_name','=',$name)->delete();
        return response()->json();
    }
}
