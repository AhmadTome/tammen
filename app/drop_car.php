<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drop_car extends Model
{
    // public function part(){
    //     return $this->hasOne('App\enter_Drop_statment','dropStatment','id');
    // }

    public function bodyPart(){
        return $this->hasOne('App\enter_body_part','body_num','part');
    }

    public function maintPart(){
        return $this->hasOne('App\enter_maintinance','mai_num','maintinance');
    }
}
