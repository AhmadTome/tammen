<?php

namespace App\Http\Controllers;

use App\letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class saveletterConreoller extends Controller
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

        $user = new letter;
        $user->subject = Input::get('subject');
        $user->destination = Input::get('destination');
        $user->msg = Input::get('msg');
        $user->sender = Input::get('sender');
        $user->sign = Input::get('sign');

        $user->msgDate = Input::get('msgDate');
        $user->sendNum = Input::get('sendNumber');

        if ($user->save()) {
            session()->flash("notif", "تم حفظ الرسالة بنجاح ");
        } else {
            session()->flash("notif", "لم يتم حفظ الرسالة لحدوث خطأ في الادخال");
        }
        return redirect()->to('/SaveLetter');
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
