<?php

namespace App\Http\Controllers;

use App\enter_Drop_statment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addDropStatment extends Controller
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
        $user=new enter_Drop_statment;
        $user->id=Input::get('IdStatmentNum');
        $user->text=Input::get('text');
        $user->hebrow_text=Input::get('hebrow_text');
        if($user->save()){
            session()->flash("notif","تم ادخال بيان الهبوط بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال بيان الهبوط لحدوث خطأ في الادخال");

        }
        return redirect()->to('dropStatment');
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


        enter_Drop_statment::where('id', '=', $lastnum)
            ->where('text','=',$lastname)
            ->update(array('id' =>$newnum , 'text'=>$newname ,'hebrow_text'=>$request->hebrow));

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
        enter_Drop_statment::where('id','=',$num)->where('text','=',$name)->delete();
        return response()->json();
    }
}
