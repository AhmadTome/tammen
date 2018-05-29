<?php

namespace App\Http\Controllers;

use App\enter_personalinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class addpersonalInformation extends Controller
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
            'ID' => 'required|unique:enter_personal_infos,id'
        ]);


        $user=new enter_personalinfo;

        $user->name=Input::get('name');
        $user->id=Input::get('ID');
        $user->address=Input::get('address');
        $user->phone_num=Input::get('phoneNumber');
        $user->tel_num=Input::get('homeNumber');
        $user->email=Input::get('email');
        $user->note=Input::get('note');
        $user->save();

return redirect()->to('/addpersonalInformation');
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
        $lastid=Input::get('person_select');


        $newid=Input::get('ID');
        $newname=Input::get('name');
        $newaddress=Input::get('address');
        $newphone=Input::get('phoneNumber');
        $newtel=Input::get('homeNumber');
        $newemail=Input::get('email');
        $newnote=Input::get('note');

        enter_personalinfo::where('id', '=', $lastid)
            ->update(array('id' =>$newid , 'name'=>$newname ,'address'=>$newaddress , 'phone_num'=>$newphone , 'tel_num'=>$newtel,'email'=>$newemail,'note'=>$newnote));
        return redirect()->to('/personalinformationTransaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $num = $request->id;

        enter_personalinfo::where('id','=',$num)->delete();
        return response()->json();
    }

    public function findinfo(Request $request){
        $data=enter_personalinfo::select('id','name','address','phone_num','tel_num','email','note')->where('id',$request->id)->take(1500)->get();
        return response()->json($data);
    }
}
