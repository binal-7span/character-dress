<?php

use App\Http\Controllers\Api\V1;
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

Route::post('characters/{character}/dress', [V1\CharacterController::class, 'attachDresses']);
Route::delete('characters/{character}/dress', [V1\CharacterController::class, 'detachDresses']);
