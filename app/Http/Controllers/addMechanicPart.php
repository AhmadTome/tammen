<?php

namespace App\Http\Controllers;

use App\enter_mechanic_part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addMechanicPart extends Controller
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
        $user=new enter_mechanic_part;
        $user->mec_num=Input::get('IdMechNum');
        $user->mec_name=Input::get('MechName');
        $user->mec_hebrow=Input::get('hebrow_MechName');
        if($user->save()){
            session()->flash("notif","تم ادخال الضرر بنجاح");
        }else{
            session()->flash("notif","لم يتم ادخال الضرر لحدوث خطأ في الادخال");

        }
        return redirect()->to('addMechParts');


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


        enter_mechanic_part::where('mec_num', '=', $lastnum)
            ->where('mec_name','=',$lastname)
            ->update(array('mec_num' =>$newnum , 'mec_name'=>$newname ,'mec_hebrow'=>$request->hebrow));
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
        enter_mechanic_part::where('mec_num','=',$num)->where('mec_name','=',$name)->delete();
        return response()->json();
    }
}
