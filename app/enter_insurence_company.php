<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enter_insurence_company extends Model
{
    protected $primaryKey = 'ins_num';

    public function getName($lang = 'AR'){
        if($lang == 'AR'){
            return $this->ins_name;
        }else{
            if($this->ins_hebrow == null || $this->ins_hebrow == ''){
                return "<span class='show-print'>-</span><span class='hide-print text-danger'>ﻻ يوجد نص عبري</span>";
            }else{
                return $this->ins_hebrow;
            }
        }
    }
}
