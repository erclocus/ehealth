<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorprofile extends Model
{
    public function location(){


        return $this->belongsTo('App\Location');
    }


    //
}

//$user = Doctorprofile::find(1);
//return $user->location;

