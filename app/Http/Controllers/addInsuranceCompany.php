<?php

namespace App\Http\Controllers;

use App\enter_insurence_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use function MongoDB\BSON\toJSON;

class addInsuranceCompany extends Controller
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
      $user=new enter_insurence_company;
      $user->ins_num=Input::get('compNum');
      $user->ins_name=Input::get('compName');
      $user->ins_phone=Input::get('compTele');
        $user->ins_jawwalphone=Input::get('insPhoneNumber');
        $user->ins_email=Input::get('insemail');


        if($user->save()){
            session()->flash("notif","تم ادخال شركة التأمين بنجاح");
        }else{
            session()->flash("notif","لم يتم ادخال شركة التأمين لحدوث خطأ في الادخال");

        }
      return redirect()->to('addInsuranceCompany');
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
        $newtel=$request->tel;
        $newphone=$request->phone;
        $newemail=$request->email;

        enter_insurence_company::where('ins_num', '=', $lastnum)
            ->where('ins_name','=',$lastname)
            ->update(array('ins_num' =>$newnum , 'ins_name'=>$newname ,'ins_phone'=>$newtel , 'ins_jawwalphone'=>$newphone , 'ins_email'=>$newemail));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteCompany(){

    }



    public function destroy(Request $request)
    {
        $num = $request->num;
        $name = $request->name;
        enter_insurence_company::where('ins_num','=',$num)->where('ins_name','=',$name)->delete();
return response()->json();
    }
}
