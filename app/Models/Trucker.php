<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;
    public function packages(){
        
        return $this->hasOne('App\Models\package');
    }

    public function trucks(){

        return $this->belongsToMany('App\Models\Trucks');
    }


}
