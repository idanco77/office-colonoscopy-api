<?php

use App\Http\Controllers\GameLinkController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AuthMiddleware;
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

Route::get('gameLink', [GameLinkController::class, 'index']);
Route::post('auth/login', [GameLinkController::class, 'login']);
Route::put('gameLink/increase/{gameLink}', [GameLinkController::class, 'increaseClickCount']);
Route::put('gameLink/increaseByCategory', [GameLinkController::class, 'increaseClickCountByCategory']);

Route::resource('gameLink', GameLinkController::class)
    ->except(['index'])
    ->middleware(AuthMiddleware::class);

