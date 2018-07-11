<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class body_vehicle_work extends Model
{
    public function getTotalConsumAttribute(){
        return toPercentage($this->bo_consump_mech_rate) * $this->bo_bod_count * $this->partPrice;
    }

    public function bodyPart(){
        return $this->hasOne('App\enter_body_part','body_num','bo_part_num');
    }
}
