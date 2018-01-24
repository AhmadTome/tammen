<?php

namespace App\Http\Controllers;

use App\enter_insurence_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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


      $user->save();
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteCompany(){
      return 'Hello';
    }



    public function destroy(Request $request)
    {
        $num = $request->num;
        $name = $request->name;
       // enter_insurence_company::where('ins_num','=',$num)->where('ins_name','=',$name)->delete();
        return $name ;
    }
}
