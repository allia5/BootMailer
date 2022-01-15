<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\put_mail;
use App\Http\Middleware\test_email;
use App\Http\Controllers\test_mail;
use App\Http\Controllers\riensialiser\cntr_riensialiser;
use GuzzleHttp\Middleware;
use App\Http\Controllers\sattistique_cntrler\cntrler_stat_info;

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
Route::post('/riensialiser/data',[cntr_riensialiser::class,'function_principale'])->middleware('test_riensialiser');
Route::get('/get_stat_of_data',[cntrler_stat_info::class,'stat_info']);