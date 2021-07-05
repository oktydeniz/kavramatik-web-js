<?php

use App\Http\Controllers\APIController\AllColors;
use App\Http\Controllers\APIController\Categories;
use App\Http\Controllers\APIController\Colors;
use App\Http\Controllers\APIController\Dimensions;
use App\Http\Controllers\APIController\Directions;
use App\Http\Controllers\APIController\Emotions;
use App\Http\Controllers\APIController\Numbers;
use App\Http\Controllers\APIController\Opposites;
use App\Http\Controllers\APIController\Quantities;
use App\Http\Controllers\APIController\Senses;
use App\Http\Controllers\APIController\Shapes;
use App\Http\Controllers\AppUser\AppUserController;
use App\Http\Controllers\AuthController;
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
|  http://192.168.1.48:8000/api/categories?token_id=464685648465A468464qw8A544688648W6REEWT6V
*/ 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**Auth  */
Route::post('register',[AppUserController::class,'register']);
Route::post('login', [AppUserController::class, 'login']);
Route::post('setScore', [AppUserController::class, 'setScore']);
Route::get('sendMailForPassword', [AppUserController::class, 'sendMailForPassword']);
Route::post('formatPassword', [AppUserController::class, 'formatPassword']);
Route::get('showProfile',[AppUserController::class, 'showProfile']);

/**Caregories API */
Route::get('categories', Categories::class);

/**Education Categories API*/
Route::get('colors', Colors::class);
Route::get('dimensions', Dimensions::class);
Route::get('directions', Directions::class);
Route::get('emotions', Emotions::class);
Route::get('numbers', Numbers::class);
Route::get('shapes', Shapes::class);
Route::get('senses',Senses::class);
Route::get('opposites',Opposites::class);
Route::get('quantities',Quantities::class);
Route::get('allcolors',AllColors::class);

/**Games API  */
