<?php

namespace App\Http\Controllers;

use App\enter_body_part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addBodyPart extends Controller
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
        $user=new enter_body_part;
        $user->body_num=Input::get('idBodyNum');
        $user->body_name=Input::get('Bodyname');
        if($user->save()){
            session()->flash("notif","تم ادخال قطعة الهيكل بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال قطعة الهيكل لحدوث خطأ في الادخال");

        }
        return redirect()->to('addBodyParts');
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


        enter_body_part::where('body_num', '=', $lastnum)
            ->where('body_name','=',$lastname)
            ->update(array('body_num' =>$newnum , 'body_name'=>$newname ));

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
        enter_body_part::where('body_num','=',$num)->where('body_name','=',$name)->delete();
        return response()->json();
    }
}
