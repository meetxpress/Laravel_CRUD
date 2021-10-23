<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentModelController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentModelController::class);