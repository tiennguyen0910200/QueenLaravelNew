<?php

namespace App\Models;
use App\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function vendor(){
        return $this->hasMany("App\Vendor","id","new_id");
     }
      function uses(){
        return $this->hasMany("App\Users","id","user_id");
     }
}
