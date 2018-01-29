<?php

namespace App\Http\Controllers;

use App\crossoff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addcrossoff extends Controller
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

        $user=new crossoff;
        $user->scr_num=Input::get('CrossNum');
        $user->scr_name=Input::get('txtCroosOff');
        if($user->save()){
            session()->flash("notif","تم ادخال نص الشطب بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال نص الشطب لحدوث خطأ في الادخال");

        }
        return redirect()->to('crossOff');
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
        $lastname=$request->lastname;


        $newname=$request->name;


        crossoff::where('scr_name','=',$lastname)
            ->update(array('scr_name' =>$newname ));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $name = $request->name;
        crossoff::where('scr_name','=',$name)->delete();
        return response()->json();
    }
}
