<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClusterCtrl;

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
    return view('dashboard');
});

Route::get('/cluster', [ClusterCtrl::class,'index']);
Route::get('/cluster/save', [ClusterCtrl::class,'save']);
Route::get('/cluster/delete/{id}', [ClusterCtrl::class,'delete']);
