<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('login',\App\Http\Controllers\Auth\LoginController::class);
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('detail/{car:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');


Route::group(['middleware' => 'is_admin','prefix' => 'admin', 'as' => 'admin.'],function(){
    Route::resource('users',\App\Http\Controllers\Admin\UserController::class);

});

Route::group(['prefix' => 'admin', 'as' => 'admin.'],function(){
    Route::resource('cars',\App\Http\Controllers\Admin\CarController::class);
    Route::put('cars/update-image/{id}', [\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('cars.updateImage');

    Route::get('messages',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('messages.index');
    Route::delete('messages/{message}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('messages.destroy');

});

Auth::routes(['register'=>false]);
