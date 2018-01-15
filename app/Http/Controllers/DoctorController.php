<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Colour;
use App\Doctorprofile;
use App\Location;
use App\order;
use App\Product;
use App\Quantity;
use App\Size;
use App\Specification;
use App\Wishlist;
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
    public function getDoctorList($location, $specification){
        $location_id = Location::where('name', $location)->first()->id;
        $specification_id = Specification::where('name', $specification)->first()->id;
        $doctors = Doctorprofile::where('location_id', $location_id)
            ->where('specification_id', $specification_id)
            ->get();
        return $doctors;
    }


    public function getDoctorsList(Request $request){
        $location = $request->get('location');
        $specification = $request->get('specification');
        $location_id = Location::where('name', $location)->first()->id;
        $specification_id = Specification::where('name', $specification)->first()->id;
        $doctors = Doctorprofile::where('location_id', $location_id)
            ->where('specification_id', $specification_id)
            ->get();
        if(count($doctors)==0){
            return "Fuck";
        }

        return view ('Body.doctorlist', ['doctors'=>$doctors]);
//        return View::make('Body.doctorlist')->with('address', $doctors);
//        return $doctors;
    }
}
