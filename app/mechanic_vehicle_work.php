<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mechanic_vehicle_work extends Model
{
    public function getTotalConsumAttribute(){
        return toPercentage($this->me_consump_mech_rate) * $this->me_mech_count * $this->mech_price;
    }

    public function getTaxAttribute(){
        return toPercentage($this->me_consump_mech_rate) * $this->me_mech_count * $this->mech_price;
    }

    public function part(){
        return $this->hasOne('App\enter_mechanic_part','id','me_part_num');
    }
}
