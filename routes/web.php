<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\EmployeController;
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

Route::controller(EmployeController::class)->group(function () {
    Route::get('/employe', 'index');
    Route::get('/employe/create', 'create');
    Route::get('/employe/{id}', 'show');
    Route::get('/employe/{id}/edit', 'edit');
    


    Route::post('/employe', 'store');
    Route::patch('/employe/{id}', 'update');
    Route::delete('/employe/{id}', 'destroy');
});
Route::get('/INDEX', function(){return 'You are 9assir, this website is only for +18 >:)';})->middleware('testM');