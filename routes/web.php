<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('tasks',[TaskController::class,'index']);
Route::get('tasks/create',[TaskController::class,'create']);
Route::post('tasks',[TaskController::class,'store']);
Route::get('tasks/{id}',[TaskController::class,'show']);
Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
Route::put('tasks/{id}',[TaskController::class,'update']);
Route::delete('tasks/{id}',[TaskController::class,'update']);*/

/*Route::resource('tasks',TaskController::class)->only(['index','create']); 
Route::resource('tasks',TaskController::class)->except(['destroy']); */

// add method to resource Controller
Route::get('tasks/export',[TaskController::class,'export']); 
Route::resource('tasks',TaskController::class); 



//we want to use prefix for both user/task and admin/task
