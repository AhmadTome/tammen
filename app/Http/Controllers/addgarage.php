<?php

namespace App\Http\Controllers;

use App\enter_garage;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class addgarage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('garage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "Record inserted successfully.<br/>";
$user=new enter_garage;
$user->gar_num=Input::get('garNum');
$user->gar_name=Input::get('garName');
$user->save();
session()->flash("notif","تم ادخال الكراج بنجاح");

return redirect()->to('garage');

        //$num = $request->input('garNum');
        //$nam = $request->input('garName');
        //DB::insert('insert into enter_garage (gar_num,gar_name) values(?,?)',[$num,$nam]);


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
    public function destroy($id)
    {
        //
    }
}
