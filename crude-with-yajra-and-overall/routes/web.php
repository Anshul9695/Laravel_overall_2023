<?php

use App\Http\Controllers\SimpleCrudeController;
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
Route::get('/insert',[SimpleCrudeController::class,'insert'])->name('insert');
Route::post('/insertRecourd',[SimpleCrudeController::class,'insertRecourd'])->name('insertRecourd');
