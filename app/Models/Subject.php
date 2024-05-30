<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    use HasFactory;
    public function Teacher(){
        return $this->belongsTo('App\Models\Teacher');
    
}

    public function Student(){
        return $this->hasMany('App\Models\Student');
    }  

}
