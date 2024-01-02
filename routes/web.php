<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\backend\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix'=>"admin"],function(){
    
    
    
    
    
    
    
    
    
    Route::group(['middleware'=>'checkAdmin'],function (){
        
        Route::get('login/from',[AdminLoginController::class ,'login_from'])->name('admin.from');









        Route::get('/dashbord', [AdminController::class, 'dashbord'])->name('dashbord');
    });













    
    
    Route::group(['middleware'=>'adminLogin'], function(){

    });
});
