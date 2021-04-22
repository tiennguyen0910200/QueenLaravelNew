<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    function products(){
        return $this->hasMany("App\Product","id","pro_id");
    }
    public function user(){
        return $this->hasOne("App\User","id","user_id");
    }
}
