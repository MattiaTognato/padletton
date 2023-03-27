<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/recents', function () {
    return view('recents');
});

Route::get('/dashboard/bookmarks', function () {
    return view('bookmarks');
});

Route::get('/dashboard/shared', function () {
    return view('shared');
});

Route::get('/dashboard/gallery', function () {
    return view('gallery');
});

Route::get('/team/create', function () {
    return view('createTeam');
});

Route::get('/creazione', function () {
    return view('creazionePadlet');
});
