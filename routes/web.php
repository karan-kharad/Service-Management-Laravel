<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairJobController;

Route::get('/', function () {
    return view('welcome');
});
