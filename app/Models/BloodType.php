<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    //Relación 1:n
    public function patients(){
        return $this->hasMany(Patient::class);
    }
}
