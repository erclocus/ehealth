<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    public function doctorprofile(){


        return $this->hasMany('App\Doctorprofile');
    }

}
