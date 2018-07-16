<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_body_part extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->body_name;
        }else{
            if($this->body_hebrow == null || $this->body_hebrow == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->body_hebrow;
            }
        }
    }
}
