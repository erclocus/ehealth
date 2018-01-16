<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsAvailableDate extends Model
{


    public function doctor_appointment_time(){
        return $this->hasMany('App\Doctor_appointment_time');
    }
    //
}
