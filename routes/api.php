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

Route::group(['middleware' => 'api'], function ($router) {
    Route::controller(\App\Http\Controllers\ApiController::class)->group(function () {
        Route::post('/signup',  'signup');
        Route::post('/login',  'login');
        Route::post('/change-password',  'changePassword');
        Route::post('/update-profile',  'updateProfile');
        Route::get('/profile',  'profile');
        Route::get('/carrots',  'getCarrots');
        Route::get('/categories',  'getCategories');
        Route::get('/learn-categories',  'getLearnCategories');
        Route::post('/learn-subcategories',  'getLearnSubCategories');
        Route::post('/levels',  'getLevels');
        Route::post('/levels',  'getLevels');
        Route::post('/questions',  'getQuestions');
        Route::get('/gifs',  'getGifs');
        Route::post('/update-carrot-point',  'updateCarrotPoint');
        Route::post('/buy-carrot',  'buyCarrot');
        Route::get('/get-user-carrots',  'getUserCarrots');
        Route::post('/create-room',  'createRoom');
        Route::get('/rooms',  'getRooms');
        Route::post('/upgrade-membership',  'upgradeMembership');
        Route::get('/unsubscribe',  'upgradeMembership');
    });
});
