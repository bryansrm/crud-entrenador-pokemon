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
    return view('welcome');
});

//Route::get('trainers/create', 'TrainerController@create');
// Route::get('/trainers/create', function(){
//     return view('trainers.create');
// });
Route::resource('trainers', 'TrainerController');