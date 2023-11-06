<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shree;

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

Route::get('/',[shree::class,'index']);
Route::post('/create',[shree::class,'details']);
Route::get('/view-record',[shree::class,'user']);
