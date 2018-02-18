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
  // Route::post('goal/{id}','\App\Http\Controllers\GoalController@show');
    // Route::resource('goal/list','\App\Http\Controllers\GoalController@list');
  Route::get('goal/{id}/delete','\App\Http\Controllers\GoalController@destroy');
  Route::get('goal/{id}/deleteMsg','\App\Http\Controllers\GoalController@DeleteMsg');
  Route::post('goal/addUserGoals','\App\Http\Controllers\GoalController@addUserGoals');
  Route::get('goal/removeUserGoals/{user_id}/{goal_id}','\App\Http\Controllers\GoalController@removeUserGoals');
});

//project Routes
Route::group(['middleware'=> 'web'],function(){
  // Route::get('project','\App\Http\Controllers\ProjectController@index');
  Route::resource('project','\App\Http\Controllers\ProjectController');
  Route::get('project/list/{id}', '\App\Http\Controllers\ProjectController@list');
  // Route::get('project/create', '\App\Http\Controllers\ProjectController@create');
  // Route::post('project', '\App\Http\Controllers\ProjectController@store');
  Route::get('project/{id}', '\App\Http\Controllers\ProjectController@show');
  Route::get('project/{id}/edit', '\App\Http\Controllers\ProjectController@edit');
  Route::post('project/{id}/update','\App\Http\Controllers\ProjectController@update');
  Route::get('project/{id}/delete','\App\Http\Controllers\ProjectController@destroy');
  Route::get('project/{id}/deleteMsg','\App\Http\Controllers\ProjectController@DeleteMsg');
  Route::post('project/addUserProjects','\App\Http\Controllers\ProjectController@addUserProjects');
  Route::get('project/removeUserProjects/{user_id}/{project_id}','\App\Http\Controllers\ProjectController@removeUserProjects');
});

Route::group(['middleware'=> 'web'],function(){
});
//initiative Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('initiative','\App\Http\Controllers\InitiativeController');
  Route::get('initiative/list/{id}', '\App\Http\Controllers\InitiativeController@list');
  Route::post('initiative/{id}/update','\App\Http\Controllers\InitiativeController@update');
  Route::get('initiative/{id}/delete','\App\Http\Controllers\InitiativeController@destroy');
  Route::get('initiative/{id}/deleteMsg','\App\Http\Controllers\InitiativeController@DeleteMsg');
  Route::post('initiative/addInitiativeFile','\App\Http\Controllers\InitiativeController@addInitiativeFile');
});

//action_plan Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('action_plan','\App\Http\Controllers\Action_planController');
  Route::post('action_plan/{id}/update','\App\Http\Controllers\Action_planController@update');
  Route::get('action_plan/{id}/delete','\App\Http\Controllers\Action_planController@destroy');
  Route::get('action_plan/{id}/deleteMsg','\App\Http\Controllers\Action_planController@DeleteMsg');
  Route::post('action_plan/addActionplanFile','\App\Http\Controllers\Action_planController@addActionplanFile');
  Route::post('action_plan/ApproveActionplan','\App\Http\Controllers\Action_planController@ApproveActionplan');
});

//action_plan_attachment Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('action_plan_attachment','\App\Http\Controllers\Action_plan_attachmentController');
  Route::post('action_plan_attachment/{id}/update','\App\Http\Controllers\Action_plan_attachmentController@update');
  Route::get('action_plan_attachment/{id}/delete','\App\Http\Controllers\Action_plan_attachmentController@destroy');
  Route::get('action_plan_attachment/{id}/deleteMsg','\App\Http\Controllers\Action_plan_attachmentController@DeleteMsg');
});

//initiative_attachment Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('initiative_attachment','\App\Http\Controllers\Initiative_attachmentController');
  Route::post('initiative_attachment/{id}/update','\App\Http\Controllers\Initiative_attachmentController@update');
  Route::get('initiative_attachment/{id}/delete','\App\Http\Controllers\Initiative_attachmentController@destroy');
  Route::get('initiative_attachment/{id}/deleteMsg','\App\Http\Controllers\Initiative_attachmentController@DeleteMsg');
});

//roles has permissions Routes
Route::group(['middleware'=> 'web'],function(){
  Route::post('scaffold-roles/addPermission','\App\Http\Controllers\ScaffoldInterface\RoleController@addPermission');
  Route::get('scaffold-roles/removePermission/{permission}/{role_id}','\App\Http\Controllers\ScaffoldInterface\RoleController@revokePermission');
});

//admin Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('admin','\App\Http\Controllers\AdminController');
  Route::post('admin/create','\App\Http\Controllers\AdminController@create');
  Route::post('admin/store','\App\Http\Controllers\AdminController@store');
  Route::post('admin/{id}/update','\App\Http\Controllers\AdminController@update');
  Route::get('admin/{id}/delete','\App\Http\Controllers\AdminController@destroy');
  Route::get('admin/{id}/deleteMsg','\App\Http\Controllers\AdminController@DeleteMsg');
  Route::post('admin/addRole','\App\Http\Controllers\AdminController@addRole');
  Route::get('admin/removeRole','\App\Http\Controllers\AdminController@revokeRole');
});

//Activitylog
Route::group(['middleware'=> 'web'],function(){
  Route::resource('activity','\App\Http\Controllers\ActivityController');
  });
