<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_mechanic_part extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->mec_name;
        }else{
            if($this->mec_hebrow == null || $this->mec_hebrow == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->mec_hebrow;
            }
        }
    }   
}
