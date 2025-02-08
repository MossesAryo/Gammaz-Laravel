<?php

use App\Http\Controllers\back\UniversalController;
use App\Http\Controllers\back\PhotoController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('back.index');
// });
Route::get('/', [UniversalController::class, 'index']);
Route::post('/photo', [UniversalController::class, 'store'])->name('uploadPhoto');
Route::post('/album', [UniversalController::class, 'store2'])->name('uploadAlbum');


