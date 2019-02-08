<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\accountstatments;


class accountstatment extends Controller
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
        $this->validate($request,[
            'filenumber' => 'required|unique:accountstatment,filenumber'
        ]);

        $user = new accountstatments;
        $user->receiptNo = Input::get('receiptNo');
        $user->receiptVal = Input::get('receiptVal');
        $user->CheckNo = Input::get('CheckNo');
        $user->CheckVal = Input::get('CheckVal');
        $user->filenumber = Input::get('filenumber');

        if($user->save()){
            session()->flash("notif","تم ادخال كشف الحساب بنجاح ");
        }else{
            session()->flash("notif","لم يتم ادخال كشف الحساب خطأ في الادخال");

        }

        return redirect()->back();
    }

    public function getData(Request $request){
      return  accountstatments::where('filenumber','=',$request->id)->get();
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
        $receiptNo = Input::get('receiptNo');
        $receiptVal = Input::get('receiptVal');
        $CheckNo = Input::get('CheckNo');
        $CheckVal = Input::get('CheckVal');
        $filenumber = Input::get('filenumber');

        accountstatments::where('filenumber','=',$filenumber)->update(
            array('receiptNo'=>$receiptNo , 'receiptVal'=>$receiptVal,'CheckNo'=>$CheckNo,'CheckVal'=>$CheckVal)
        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        accountstatments::where('filenumber','=',$request->id)->delete();
        return redirect()->back();
    }
}
