<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController ;
use App\Http\Controllers\ActviteController ;
use App\Http\Controllers\ClubController ;



Route::resource('eleves', EleveController::class);

Route::resource('activities', ActviteController::class);

Route::resource('clubs', ClubController::class);





