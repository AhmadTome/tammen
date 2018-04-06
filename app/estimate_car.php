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
}
