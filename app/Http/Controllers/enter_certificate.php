<?php

namespace App\Http\Controllers;

use App\add_certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class enter_certificate extends Controller
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


            $user = new add_certificate;
            $user->cer_text=Input::get('cert');
            $user->cer_hebrow_text=Input::get('cert_hebrow');

             if($user->save()){session()->flash("notif","تم ادخال الشهادات بنجاح");}

        return redirect()->to('/addCertification');
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
        $lastname=$request->lastname;


        $newname=$request->name;


        add_certificate::where('cer_text','=',$lastname)
            ->update(array('cer_text' =>$newname ,'cer_hebrow_text'=>$request->hebrow));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $name = $request->name;
        add_certificate::where('cer_text','=',$name)->delete();
        return response()->json();
    }
}
