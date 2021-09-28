<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainees extends Model
{
    use HasFactory;
    public function trainess(){
        return $this->hasMany('App\Models\Trainees');
    }
}
