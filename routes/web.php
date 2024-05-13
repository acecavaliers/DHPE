<?php

use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\IllnessGroupController;
use App\Http\Controllers\SymptomController;
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
});

Route::get('/crud',[AccountTypeController::class,'index']);
Route::get('/getList',[AccountTypeController::class,'getList']);

Route::post('/adddAcct',[AccountTypeController::class,'store']);


Route::get('/illness',[IllnessGroupController::class,'index']);
Route::post('/addillness',[IllnessGroupController::class,'store']);


Route::get('/symptoms',[SymptomController::class,'index']);
Route::post('/addsypmtoms',[SymptomController::class,'store']);
