<?php

use App\Http\Controllers\Api\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/contacts', [ContactController::class, 'index']);