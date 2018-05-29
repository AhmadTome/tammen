<?php

namespace App\Http\Controllers;

use App\bankinfo;
use App\getCarInfo;
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

        $this->validate($request,[
            'bankfilenumber' => 'required|unique:bankinfos,bankfilenumber'
        ]);


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
    public function update(Request $request)
    {
        $status=Input::get('status');
        $name=Input::get('name');
        $output='';
        for($i=0 ;$i < count($name) ; $i++){
            $output = $output.$name[$i].'-'.$status[$i].'/';
        }


        $filenumber =Input::get('filenumber');
        $bankfilenumber =Input::get('filebank_select');
        $personname =Input::get('personName');
        $personowner =Input::get('personownercar');
        $idpersonowner =Input::get('idpersonownercar');
        $limit =Input::get('limit');
        $date =Input::get('dateregister');
        $estimatorvalue =Input::get('estimatevalue');
        $banknote =Input::get('banknote');
        $checking =$output;


        bankinfo::where('bankfilenumber', '=', $bankfilenumber)
            ->update(array('personname' =>$personname , 'personowner'=>$personowner ,'idpersonowner'=>$idpersonowner , 'limit'=>$limit ,
                'date'=>$date,'estimatorvalue'=>$estimatorvalue,'banknote'=>$banknote,'checking'=>$checking));
        return redirect()->to('/BankTransaction');
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

        bankinfo::where('bankfilenumber','=',$num)->delete();
        return response()->json();
    }
    public function findbankinfo(Request $request){
        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_license_end_date','ve_insurence_end_date','attachments','ve_note')->where('file_num',$request->id)->take(1500)->get();
        $data2=bankinfo::select('bankfilenumber')->where('filenumber',$request->id)->take(1500)->get();
        if(count($data2)>0) {
            return response()->json(array('data' => $data, 'data2' => $data2));
        }else{
            return "";
        }
    }

    public function findallbankinfo(Request $request){
        $data=bankinfo::select('personname','personowner','idpersonowner','limit','date','estimatorvalue','banknote','checking')->where('bankfilenumber',$request->id)->take(1500)->get();

            return response()->json($data);


    }
}
