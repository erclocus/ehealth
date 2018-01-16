<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorprofile extends Model
{
    public function location(){
        return $this->belongsTo('App\Location');
    }
    public function specification(){
        return $this->belongsTo('App\Specification');
    }
    public function doctor_appointment_time(){
        return $this->belongsTo('App\Doctor_appointment_time');
    }

    //
}

//$user = Doctorprofile::find(1);
//return $user->location;

