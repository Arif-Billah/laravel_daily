<?php 
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*Route::group(['middleware'=>"admin",'prefix'=>'admin','namespace'=>'admin'],function(){
    Route::resource('users',UserController::class);
    //Route::resource('project',ProjectController::class);

});*/

//Route::resource('users',UserController::class);
Route::get('users',function(){
    dd('in a index');
});




