<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//1. resource controller
/*Route::get('tasks',[TaskController::class,'index']);
Route::get('tasks/create',[TaskController::class,'create']);
Route::post('tasks',[TaskController::class,'store']);
Route::get('tasks/{id}',[TaskController::class,'show']);
Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
Route::put('tasks/{id}',[TaskController::class,'update']);
Route::delete('tasks/{id}',[TaskController::class,'update']);*/

//Route::resource('tasks',TaskController::class);

// 2. partial Resource Controller 

/*Route::resource('tasks',TaskController::class)->only(['index','create']); 
Route::resource('tasks',TaskController::class)->except(['destroy']); */

//3. Add method in resource Cotroller
// add method to resource Controller
/*Route::get('tasks/export',[TaskController::class,'export']); 
Route::resource('tasks',TaskController::class); */

//4. Route Grouping
//simple group middleware
/*Route::group(['middleware'=> 'auth'], function () {
   Route::resource('tasks',TaskController::class);
});*/

//5. Group with in a group
//group with in a group
/*Route::group(["middleware"=>"auth"],function(){
    Route::resource("tasks", TaskController::class);

    Route::group(['middleware'=>"admin"],function(){
        Route::resource('users',UserController::class);

    });
});*/

// 6. Url Prefix
//we want to add prefix for both user/task and admin/task

/*Route::group(["middleware"=>"Auth"],function(){
    //user/task user/task/create
    Route::group(["middleware"=>'user','prefix'=>'user'],function(){
         Route::resource("tasks", TaskController::class);
    });
   //admin/users
    Route::group(['middleware'=>"admin",'prefix'=>'admin'],function(){
        Route::resource('users',UserController::class);

    });
});*/

//7. Namespace for controller

/*Route::group(["middleware"=>"Auth"],function(){
    //user/task user/task/create
    Route::group(["middleware"=>'user','prefix'=>'user', "namespace"=>'user'],function(){
         Route::resource("tasks", TaskController::class);
         //Route::resource("project", ProjectController::class);
    });
   //admin/users
    Route::group(['middleware'=>"admin",'prefix'=>'admin','namespace'=>'admin'],function(){
        Route::resource('users',UserController::class);
        //Route::resource('project',ProjectController::class);

    });
});*/

//8. Route Names in Groups
// <a href="{{ route('user.task.index') }}">TaskList</a>

Route::group(["middleware"=>"Auth"],function(){
    //user/task user/task/create
    Route::group([
        "middleware"=>'user',
        'prefix'=>'user', 
        "namespace"=>'user',
        "as"=>'user'
    ], 
    function(){
         Route::resource("tasks", TaskController::class);
         //Route::resource("project", ProjectController::class);
    });
   //admin/users
    Route::group(['middleware'=>"admin",'prefix'=>'admin','namespace'=>'admin'],function(){
        Route::resource('users',UserController::class);
        //Route::resource('project',ProjectController::class);

    });
});