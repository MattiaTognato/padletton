<?php

use App\Http\Controllers\OAuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/github/redirect', [OAuthController::class, 'githubRedirect']);
Route::get('/auth/github/callback', [OAuthController::class, 'githubCallback']);

Route::get('/auth/google/redirect', [OAuthController::class, 'googleRedirect']);
Route::get('/auth/google/callback', [OAuthController::class, 'googleCallback']);