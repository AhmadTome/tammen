<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estimate_car extends Model
{
    protected $appends = [
        'total'
    ];

    public function getTotalAttribute(){
        return $this->transport + $this->gelary + $this->officeCost;
    }
}
