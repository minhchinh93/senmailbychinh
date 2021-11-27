<?php

use App\Http\Controllers\regiterContronller;
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
    return view('welcome');
});

Route::get('login/show',[regiterContronller::class,'show']);
Route::post('login/show1',[regiterContronller::class,'create'])->name('login.show');
Route::get('login/show/{remember_token}',[regiterContronller::class,'update'])->name('login.update');
// ddoi pass
//blade mail
Route::get('login/forgot',[regiterContronller::class,'showforgot'])->name('login.forgot');
//check mail co ton tai
Route::post('login/check',[regiterContronller::class,'check'])->name('login.check');
//hien thi giao dien nhap pass
Route::get('login/change/{email}',[regiterContronller::class,'changepasss'])->name('login.forgotpass');
// thuc hien doi pax
Route::post('login/change1/{email}',[regiterContronller::class,'changepasssdb'])->name('login.changepasss');

