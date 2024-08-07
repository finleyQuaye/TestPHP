<?php

use App\Http\Controllers\ProfileController; 
use Illuminate\Support\Facades\Route; Route::middleware('auth:sanctum')->group(function () { 

Route::post('/profiles', [ProfileController::class, 'store']); Route::put('/profiles/{profile}',

[ProfileController::class, 'update']); Route::delete('/profiles/{profile}', 
[ProfileController::class, 'destroy']); }); 

Route::get('/profiles', [ProfileController::class, 'index']); 

?>