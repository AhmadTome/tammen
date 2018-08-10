<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_garage extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->gar_name;
        }else{
            if($this->gar_hebrow_name == null || $this->gar_hebrow_name == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->gar_hebrow_name;
            }
        }
    }
}
