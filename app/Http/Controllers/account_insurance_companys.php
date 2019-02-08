<?php

namespace App\Http\Controllers;

use App\account_insurance_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class account_insurance_companys extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $select = Input::get('InsCompany');
        $user = new account_insurance_company;
        if ($select == 'main') {
            $ToCompany = account_insurance_company::where('accountNo', '=', Input::get('accountNoMain'))
                ->where('accountNoBranch', '=', 'x')->get();

            if (count($ToCompany) == 0) {
                $user->ToCompany = Input::get('ToMain');
                $user->accountNo = Input::get('accountNoMain');
                $user->accountNoBranch = 'x';
                $user->branchName = 'x';
                if($user->save()){
                    session()->flash("notif","تم ادخال كشف الحساب لشركة التأمين بنجاح ");
                }else{
                    session()->flash("notif","لم يتم ادخال كشف الحساب لشركة التأمين خطأ في الادخال");

                }

                return redirect()->back();
            } else {
                session()->flash("error","لم يتم ادخال كشف الحساب لشركة التأمين لأن رقم الحساب موجودة اصلا");

                return redirect()->back();

            }


        } elseif ($select == 'branch') {
            $user->ToCompany = Input::get('ToBranch');
            $user->accountNo = Input::get('accountNoBranch');
            $user->accountNoBranch = Input::get('accountNoBranchBranch');
            $user->branchName = Input::get('BranchName');

            if($user->save()){
                session()->flash("notif","تم ادخال كشف الحساب لشركة التأمين بنجاح ");
            }else{
                session()->flash("notif","لم يتم ادخال كشف الحساب لشركة التأمين خطأ في الادخال");

            }

            return redirect()->back();
        } else
            return 'nothing';
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function gerMainCompany(Request $request){
        return account_insurance_company::where('accountNoBranch','=','x')
            ->where('branchName','=','x')->get();
    }

    public function getallCompany(Request $request){
        return account_insurance_company::all();
    }
}
