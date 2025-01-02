<?php

use App\Http\Controllers\ShortenedUrlController;
use Illuminate\Support\Facades\Route;

Route::post('/shorten', ShortenedUrlController::class);
