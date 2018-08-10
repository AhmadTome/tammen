<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estimate_car extends Model
{
    public function getTotalAttribute(){
        return $this->transport + $this->gelary + $this->officeCost;
    }

    public function carInfo(){
        return $this->belongsTo('App\enter_car_info','fileNumber','file_num');
    }

    public function getEstimaterCostAttribute(){
        return $this->total * $this->estimatePercantige;
    }

    public function getNetTotalAttribute(){
        return $this->total + $this->estimater_cost;
    }

    public function insCompany(){
        return $this->belongsTo('App\enter_insurence_company','insurance_company','ins_name');
    }

    public function damage(){
        return $this->belongsTo('App\Damage','DamageType','dam_name');
    }

    public function cityObject(){
        return $this->belongsTo('App\enter_city','city','city_name');
    }

    public function garageObject(){
        return $this->belongsTo('App\enter_garage','Garage','gar_name');
    }
}
