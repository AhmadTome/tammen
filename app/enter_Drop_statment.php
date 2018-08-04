<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_Drop_statment extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->text;
        }else{
            if($this->hebrow_text == null || $this->hebrow_text == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->hebrow_text;
            }
        }
    }
}
