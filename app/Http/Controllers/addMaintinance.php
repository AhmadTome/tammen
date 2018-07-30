<?php

namespace App\Http\Controllers;

use App\enter_maintinance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addMaintinance extends Controller
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
     $user=new enter_maintinance;
     $user->mai_num=Input::get('mainNum');
     $user->mai_name=Input::get('mainName');
     $user->mai_hebrow_name=Input::get('hebrow_mainName');
        if($user->save()){
            session()->flash("notif","تم ادخال الصيانة بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال الصيانة لحدوث خطأ في الادخال");

        }
     return redirect()->to('addMaintinance');




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


        enter_maintinance::where('mai_num', '=', $lastnum)
            ->where('mai_name','=',$lastname)
            ->update(array('mai_num' =>$newnum , 'mai_name'=>$newname ,'mai_hebrow_name'=>$request->hebrow));

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
        enter_maintinance::where('mai_num','=',$num)->where('mai_name','=',$name)->delete();
        return response()->json();
    }
}
