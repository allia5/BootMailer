<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\put_mail;
use App\Http\Middleware\test_email;
use App\Http\Controllers\test_mail;



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
    return view("Principale.BootMailer_view");
});
Route::post('/test_email',[put_mail::class,'store'])->middleware('test_email');
