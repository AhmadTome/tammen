<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_car_info extends Model
{
    protected $primaryKey = 'file_num';
    public $incrementing = false;

  
    public function maintenance(){
        return $this->hasMany('App\maintenance_vehicle_work','file_number','file_num');
    }

    public function getTotalMaintenanceAttribute(){
        return $this->maintenance->sum('mawo_cost');
    }

    public function bodyVehicleWork(){
        return $this->hasMany('App\body_vehicle_work','file_number','file_num');
    }

    public function getTotalBodyWorkAttribute(){
        $total = 0;
        
        foreach($this->bodyVehicleWork as $bd){
            $total += ($bd->partPrice * $bd->bo_bod_count);
        }

        return $total;
    }

    public function mechanic(){
        return $this->hasMany('App\mechanic_vehicle_work','filenumber','file_num');
    }

    public function getTotalMechanicAttribute(){
        $total = 0;
        foreach($this->mechanic as $m){
            $total += ($m->mech_price * $m->me_mech_count);
        }

        return $total;
    }

    public function drop(){
        return $this->hasMany('App\drop_car','filenumber','file_num');
    }

    public function getTotalDropAttribute(){
        return $this->drop->sum('percantige');
    }

    public function estimate(){
        return $this->hasMany('App\estimate_car','fileNumber','file_num');
    }

    public function cost(){
        return $this->hasOne('App\carcost','filrnumberhidden','file_num');
    }

    public function getFullTotalAttribute(){
        return $this->total_mechanic + $this->total_body_work + $this->total_body_work;
    }
}
