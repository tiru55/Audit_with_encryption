<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('index');
});


Route::get("asset",[EmployeeController::class,"add_asset_data"]);

Route::post('save', [EmployeeController::class,"post_asset_data"]);

Route::get('response', [EmployeeController::class,"submitted_response"]);

Route::get('dashboard',[DashboardController::class,"index"]);