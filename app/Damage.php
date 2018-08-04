<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->dam_name;
        }else{
            if($this->dam_hebrow == null || $this->dam_hebrow == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد اسم عبري</span>";
            }else{
                return $this->dam_hebrow;
            }
        }
    }
}
