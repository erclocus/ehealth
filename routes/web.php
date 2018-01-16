<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});


//Route::get('{location}/{specification}', [
//    'uses' => 'DoctorController@getDoctorList'
////    'as'=>'doctor.list'
//]);


Route::get('doctors', 'DoctorController@getDoctorsList')->name('doctor.list');



Route::get('doctor/{id}/{doctorname}','DoctorController@DoctorInfo')->name('doctor.info');

