<?php

use App\Http\Controllers\articalesController;
use App\Http\Controllers\postController;
use App\Http\Controllers\settingController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('post.index');
});


Route::resource('post' , postController::class);
Route::get('post/archive/{id}' , [postController::class,'restore'])->name('post.restore');
Route::get('post/forcedelete/{id}' , [postController::class,'forcedelete'])->name('post.forcedelete');


