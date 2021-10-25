<?php

use App\Http\Controllers\StudentModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentModelController::class, 'index']);
Route::resource('students', StudentModelController::class);