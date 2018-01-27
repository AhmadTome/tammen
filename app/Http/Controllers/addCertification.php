<?php

namespace App\Http\Controllers;

use App\Estimater;
use App\enter_certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addCertification extends Controller
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
        $user =new enter_certificate;
        $user->filenumber=Input::get('filenumber');
        $user->limit=Input::get('limit');
        $user->date=Input::get('date');
        $user->estimater_number=Input::get('estimaternumber');
        $user->cert=Input::get('cert');
        $user->note=Input::get('note');
        $user->save();
        return redirect()->to('/CertificationInput');






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


    public function estimaterinfo(Request $request){
        $data=Estimater::select('nes_num','nes_name','nes_authorization_num','nes_signature')->where('nes_authorization_num',$request->id)->take(1500)->get();
        return response()->json($data);


    }
}
