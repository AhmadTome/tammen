<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_certificate extends Model
{
    public function getText($lang = 'AR'){
        if($lang == 'AR'){
            return $this->cer_text;
        }else{
            if($this->cer_hebrow_text == null || $this->cer_hebrow_text == ""){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>لا يوجد نص عبري</span>";
            }else{
                return $this->cer_hebrow_text;
            }
        }
    }
}
