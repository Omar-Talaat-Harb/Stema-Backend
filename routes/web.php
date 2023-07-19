<?php

use App\Http\Controllers\Doctor\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\laboratoryController;
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


Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginAccess'])->name('postlogin');
Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){

    Route::middleware('admin')->group(function(){
        Route::resource('/admin/user',UserController::class);
    });


    Route::middleware('doctor')->group(function(){
        Route::get('/services',[DashboardController::class,'services'])->name('services');
        Route::get('/pending',[DashboardController::class,'pending'])->name('pending');
        Route::get('/statistics',[DashboardController::class,'statistics'])->name('statistics');
        //labratory
        Route::get('/laboratory1/{id}',[laboratoryController::class,'laboratory1'])->name('laboratory1');
        Route::post('/postlaboratory1',[laboratoryController::class,'postlaboratory1'])->name('postlaboratory1');
        Route::get('/laboratory2',[laboratoryController::class,'laboratory2'])->name('laboratory2');
        Route::post('/postlaboratory2',[laboratoryController::class,'postlaboratory2'])->name('postlaboratory2');
        Route::get('/laboratory3',[laboratoryController::class,'laboratory3'])->name('laboratory3');
        Route::post('/postlaboratory3',[laboratoryController::class,'postlaboratory3'])->name('postlaboratory3');
        Route::get('/laboratory4',[laboratoryController::class,'laboratory4'])->name('laboratory4');
        Route::post('/postlaboratory4',[laboratoryController::class,'postlaboratory4'])->name('postlaboratory4');
        //disabled pages
        Route::get('/disabledregstration/{id}',[DashboardController::class,'disabledregstration'])->name('disabledregstration');
        Route::get('/disablebcontactdata/{id}',[DashboardController::class,'disablebcontactdata'])->name('disabledcontactdata');
    //session
    });

    
    Route::get('/report', '\App\Http\Controllers\Nurse\PendingController@report')->name('report');
    Route::get('/final_report/{id}', '\App\Http\Controllers\Nurse\PendingController@show')->name('show');
    Route::get('/profile',[ProfileController::class,'showProfile'])->name('showProfile');
    Route::post('/profile-update',[ProfileController::class,'updateProfile'])->name('updateProfile');
    Route::post('/profile_pass_update',[ProfileController::class,'updatePassword'])->name('updatePassword');
    Route::get('cell',[DashboardController::class,'cell']);
   
    Route::group([ 'middleware' => ['check_nurse']], function () {
        Route::get('/service1', '\App\Http\Controllers\Nurse\DonarController@service')->name('service1');
        Route::get('/register', '\App\Http\Controllers\Nurse\DonarController@index')->name('register');
        Route::post('register/store', '\App\Http\Controllers\Nurse\DonarController@store')->name('register.store');
        Route::get('/cpu/{id}', '\App\Http\Controllers\Nurse\CpuController@index')->name('cbu');
        Route::post('cpu/store', '\App\Http\Controllers\Nurse\CpuController@store')->name('cbu.store');
        Route::get('/contact/{id}', '\App\Http\Controllers\Nurse\ContactController@index')->name('contact');
        Route::post('contact/store', '\App\Http\Controllers\Nurse\ContactController@store')->name('contact.store');
        Route::get('/pendings', '\App\Http\Controllers\Nurse\PendingController@index')->name('pendings');
        Route::get('/start/{id}', '\App\Http\Controllers\Nurse\PendingController@start')->name('start');
        Route::get('/collection/{id}', '\App\Http\Controllers\Nurse\CollectionController@index')->name('collection');
        Route::post('collection/store', '\App\Http\Controllers\Nurse\CollectionController@store')->name('collection.store');
    });
});

