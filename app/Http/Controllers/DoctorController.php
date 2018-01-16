<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Colour;
use App\Doctor_appointment_time;
use App\Doctorprofile;
use App\DoctorsAvailableDate;
use App\DoctorSchedule;
use App\Location;
use App\order;
use App\Product;
use App\Quantity;
use App\Size;
use App\Specification;
use App\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function getDoctorsList(Request $request){
        $location = $request->get('location');
        $specification = $request->get('specification');
        $location_id = Location::where('name', $location)->first()->id;
        $specification_id = Specification::where('name', $specification)->first()->id;
        $doctors = Doctorprofile::where('location_id', $location_id)
            ->where('specification_id', $specification_id)
            ->get();
        if(count($doctors)==0){
            return "Sorry No Doctors are Available";
        }

        return view ('Body.doctorlist', ['doctors'=>$doctors]);
    }
    public function DoctorInfo($id, $doctorname){
        $date = Carbon::now()->toDateString();

        $doctorinfo = Doctorprofile::find($id);

//        $datelist = DoctorsAvailableDate::where('doctor_id', $id)->select()->get();


        $slot = DoctorSchedule::where('doctor_id', $id)
            ->where('day', 1)
            ->first();

//        $diff_in_minutes = $slot->EndTime->diffInMinutes($slot->StartTime);

//        return $diff_in_minutes;
        $timelist = Doctor_appointment_time::where('doctor_id', $id)
            ->where('date', $date)
            ->get();

        return view ('Body.doctorinfo', ['doctorinfo'=>$doctorinfo, 'timelist'=>$timelist, 'slot'=>$slot]);
    }


}
