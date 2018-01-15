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

use App\Doctorprofile;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('location/specification', function(){

    $user = Doctorprofile::find(1);
return $user;

});
=======
Route::get('/users', function () {
    return view('welcome');
});
>>>>>>> 7ff814b79ea622d824b6fb75a7de58f99c0a5ed7
