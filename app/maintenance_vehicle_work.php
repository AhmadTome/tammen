<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintenance_vehicle_work extends Model
{
    protected $table ="maintenance_vehicle_work";

    public function getTotalAttribute(){
        return toPercentage($this->mawo_rate) * $this->mawo_cost;
    }
    
    public function getTaxAttribute(){
        return toPercentage($this->mawo_rate) * $this->mawo_cost;
    }

    public function maintianace(){
        return $this->hasOne('App\enter_maintinance','id','mawo_work_num');
    }
}
