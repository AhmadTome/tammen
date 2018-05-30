<?php

namespace App\Http\Controllers;

use App\carcost;
use App\getCarInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class carcosts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carInfo=getCarInfo::all();
        return view('MainInput.carCost')->with("carInfo",$carInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function calculate(Request $request){

        $this->validate($request,[
            'filrnumberhidden' => 'required|unique:carcosts,filrnumberhidden'
        ]);


        $orginalcost=Input::get('orginalPrice');

        $orginalcostforstore=$orginalcost;
        $percantige = Input::get('percantige');
        $sign = Input::get('sign');
        $name = Input::get('name');

        $postive=0;
        $negative =0;

        $causes=' ';

        for ($i =0;$i<count($percantige)-1;$i++){
            if($sign[$i]=='+'){
                $postive = $postive +($percantige[$i]/100);
                $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i].'/';
                // $orginalcost = $orginalcost +($orginalcost*($percantige[$i]/100));
            }
            else if($sign[$i]=='-'){
                $negative = $negative +($percantige[$i]/100);
                $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i].'/';
                //$orginalcost = $orginalcost -($orginalcost*($percantige[$i]/100));
            }
        }
        if($sign[count($percantige)-1]=='+'){
            $postive = $postive +($percantige[$i]/100);
            $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i];
            // $orginalcost = $orginalcost +($orginalcost*($percantige[$i]/100));
        }
        else if($sign[count($percantige)-1]=='-'){
            $negative = $negative +($percantige[$i]/100);
            $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i];
            //$orginalcost = $orginalcost -($orginalcost*($percantige[$i]/100));
        }

       if($postive > $negative){
           $finalsign = $postive - $negative ;
           $orginalcost = $orginalcost +($orginalcost*($finalsign));

       }else if($negative > $postive){
           $finalsign =$negative - $postive ;
           $orginalcost = $orginalcost -($orginalcost*($finalsign));
       }else{
           $finalsign =0;
           $orginalcost = $orginalcost ;
       }




        $user=new carcost;
        $user->filrnumberhidden=Input::get('filrnumberhidden');
        $user->finalcost=$orginalcost;
        $user->causes=$causes;
        $user->orginalcost=$orginalcostforstore;
        $user->save();

        return redirect()->to('/carCost');


    }


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
        //
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
        $orginalcost=Input::get('orginalPrice');
        $orginalcostforstore=$orginalcost;
        $percantige = Input::get('percantige');
        $sign = Input::get('sign');
        $name = Input::get('name');

        $postive=0;
        $negative =0;

        $causes=' ';

        for ($i =0;$i<count($percantige)-1;$i++){
            if($sign[$i]=='+'){
                $postive = $postive +($percantige[$i]/100);
                $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i].'/';
                // $orginalcost = $orginalcost +($orginalcost*($percantige[$i]/100));
            }
            else if($sign[$i]=='-'){
                $negative = $negative +($percantige[$i]/100);
                $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i].'/';
                //$orginalcost = $orginalcost -($orginalcost*($percantige[$i]/100));
            }
        }
        if($sign[count($percantige)-1]=='+'){
            $postive = $postive +($percantige[$i]/100);
            $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i];
            // $orginalcost = $orginalcost +($orginalcost*($percantige[$i]/100));
        }
        else if($sign[count($percantige)-1]=='-'){
            $negative = $negative +($percantige[$i]/100);
            $causes = $causes.$name[$i].'@'.$percantige[$i].'@'.$sign[$i];
            //$orginalcost = $orginalcost -($orginalcost*($percantige[$i]/100));
        }

        if($postive > $negative){
            $finalsign = $postive - $negative ;
            $orginalcost = $orginalcost +($orginalcost*($finalsign));

        }else if($negative > $postive){
            $finalsign =$negative - $postive ;
            $orginalcost = $orginalcost -($orginalcost*($finalsign));
        }else{
            $finalsign =0;
            $orginalcost = $orginalcost ;
        }

        $filrnumberhidden=Input::get('filrnumberhidden');
        $finalcost=$orginalcost;
        $causes=$causes;
        $orginalcost=$orginalcostforstore;


        carcost::where('filrnumberhidden', '=', $filrnumberhidden)
            ->update(array('finalcost' =>$finalcost , 'causes'=>$causes ,'orginalcost'=>$orginalcost ));
        return redirect()->to('/carcostTransaction');
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

        carcost::where('filrnumberhidden','=',$num)->delete();
        return response()->json();
    }
    public function getcarcostinfo(Request $request){
        $data=getCarInfo::select('ve_num','ve_used','ve_version','ve_produce_year','file_num','ve_license_end_date','ve_insurence_end_date','attachments','ve_note')->where('file_num',$request->id)->take(1500)->get();
        $data2=carcost::select('finalcost','causes','orginalcost')->where('filrnumberhidden',$request->id)->take(1500)->get();

if(count($data2) > 0){
        return response()->json(array('data' => $data, 'data2' => $data2));
}else{
    return "";
}
    }




}
