<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairJobController;
use App\Http\Controllers\AuthController;


Route::middleware(['auth:api','role:employee'])->group(function(){
    Route::post('/repair-jobs',[RepairJobController::class,'store']);
});

Route::middleware(['auth:api','role:owner'])->group(function(){
    Route::get('repair-jobs',[RepairJobController::class,'index']);

});

Route::middleware(['auth:api','role:employee'])->group(function(){
    Route::get('repair-jobs/assigend',[RepairJobController::class,'assignedJobs']);
    Route::put('repair-jobs/{id}/status',[RepairJobController::class,'updateStatus']);
});

Route::post('/register',[AuthController::class,'register']); 
Route::post('/login',[AuthController::class,'login']);  