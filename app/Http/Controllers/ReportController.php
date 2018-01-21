<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enter_car_info;

class ReportController extends Controller
{
    public function CarInfo($fileId){
        $car = enter_car_info::find($fileId);
        

        return view('report.carInfo',compact($car));
    }
}