<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_city extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->city_name;
        }else{
            if($this->city_hebrow_name == null || $this->city_hebrow_name == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->city_hebrow_name;
            }
        }
    }
}
