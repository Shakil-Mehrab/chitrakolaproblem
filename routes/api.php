<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/news', [App\Http\Controllers\Layout\ArtNewsController::class, 'index']);
Route::get('/news/detail/{news}', [App\Http\Controllers\Layout\ArtNewsController::class, 'show']);
Route::get('/art', [App\Http\Controllers\Layout\ArtController::class, 'index']);
Route::get('/art/detail/{art}', [App\Http\Controllers\Layout\ArtController::class, 'show']);
Route::get('/slides', [App\Http\Controllers\Layout\SlideController::class, 'index']);
Route::get('/virtual', [App\Http\Controllers\Layout\SlideController::class, 'virtual']);
Route::get('/exibitions', [App\Http\Controllers\Layout\ExibitionController::class, 'index']);
Route::get('/upcoming/exibitions', [App\Http\Controllers\Layout\ExibitionController::class, 'upcommingIndex']);
Route::get('/exibition/{category}', [App\Http\Controllers\Layout\ExibitionController::class, 'show']);
Route::get('/artists', [App\Http\Controllers\Layout\ArtistController::class, 'index']);
Route::get('/artist/{artist}', [App\Http\Controllers\Layout\ArtistController::class, 'show']);
Route::post('/client/store', [App\Http\Controllers\Layouts\BuyersController::class, 'store']);
