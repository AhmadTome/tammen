<?php

namespace App\Http\Controllers;

use App\bankinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addbankinfo extends Controller
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
        $status=Input::get('status');
        $name=Input::get('name');
        $output='';
        for($i=0 ;$i < count($name) ; $i++){
            $output = $output.$name[$i].'-'.$status[$i].'/';
        }





        $user=new bankinfo;
        $user->filenumber =Input::get('filenumber');
        $user->bankfilenumber =Input::get('bankfilenumber');
        $user->personname =Input::get('personName');
        $user->personowner =Input::get('personownercar');
        $user->idpersonowner =Input::get('idpersonownercar');
        $user->limit =Input::get('limit');
        $user->date =Input::get('dateregister');
        $user->estimatorvalue =Input::get('estimatevalue');
        $user->banknote =Input::get('banknote');
        $user->checking =$output;
        $user->save();
        return redirect()->to('/BankDisclosure');
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
