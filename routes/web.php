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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
//goal Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('goal','\App\Http\Controllers\GoalController');
  Route::post('goal/{id}/update','\App\Http\Controllers\GoalController@update');
  Route::get('goal/{id}/delete','\App\Http\Controllers\GoalController@destroy');
  Route::get('goal/{id}/deleteMsg','\App\Http\Controllers\GoalController@DeleteMsg');
});

//project Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('project','\App\Http\Controllers\ProjectController');
  Route::post('project/{id}/update','\App\Http\Controllers\ProjectController@update');
  Route::get('project/{id}/delete','\App\Http\Controllers\ProjectController@destroy');
  Route::get('project/{id}/deleteMsg','\App\Http\Controllers\ProjectController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
//initiative Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('initiative','\App\Http\Controllers\InitiativeController');
  Route::post('initiative/{id}/update','\App\Http\Controllers\InitiativeController@update');
  Route::get('initiative/{id}/delete','\App\Http\Controllers\InitiativeController@destroy');
  Route::get('initiative/{id}/deleteMsg','\App\Http\Controllers\InitiativeController@DeleteMsg');
});

//action_plan Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('action_plan','\App\Http\Controllers\Action_planController');
  Route::post('action_plan/{id}/update','\App\Http\Controllers\Action_planController@update');
  Route::get('action_plan/{id}/delete','\App\Http\Controllers\Action_planController@destroy');
  Route::get('action_plan/{id}/deleteMsg','\App\Http\Controllers\Action_planController@DeleteMsg');
});

//action_plan_attachment Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('action_plan_attachment','\App\Http\Controllers\Action_plan_attachmentController');
  Route::post('action_plan_attachment/{id}/update','\App\Http\Controllers\Action_plan_attachmentController@update');
  Route::get('action_plan_attachment/{id}/delete','\App\Http\Controllers\Action_plan_attachmentController@destroy');
  Route::get('action_plan_attachment/{id}/deleteMsg','\App\Http\Controllers\Action_plan_attachmentController@DeleteMsg');
});
