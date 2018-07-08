<?php

namespace App\Http\Controllers;

use App\enter_structer_text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class addTextStructure extends Controller
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
        $user = new enter_structer_text;

        $user->str_num=Input::get('textNum');
        $user->str_name=Input::get('textName');
        $user->hebrow_txt=Input::get('hebrow_textName');
        if($user->save()){
            session()->flash("notif","تم ادخال نص التركيب بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال نص التركيب لحدوث خطأ في الادخال");

        }
        return redirect()->to('addTextStructure');

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


        enter_structer_text::where('str_num', '=', $lastnum)
            ->where('str_name','=',$lastname)
            ->update(array('str_num' =>$newnum , 'str_name'=>$newname ,'hebrow_txt'=>$request->hebrow));

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
        enter_structer_text::where('str_num','=',$num)->where('str_name','=',$name)->delete();
        return response()->json();
    }
}
