<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    
    public function comment(){
    	return $this->belongsTo("App\Comment","user_id","vendor_id","content");
    }
}
