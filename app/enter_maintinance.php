<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_maintinance extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->mai_name;
        }else{
            if($this->mai_hebrow_name == null || $this->mai_hebrow_name == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->mai_hebrow_name;
            }
        }
    }   
}
