<?php

use App\Http\Controllers\CarrotController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/storage-link', function() {
    $output = [];
    Artisan::call('storage:link', $output);
    dd(Artisan::output());
});
Route::get('/clear', function() {
    $output = [];
    Artisan::call('optimize:clear', $output);
    dd(Artisan::output());
});
Route::get('/migrate', function() {
    $output = [];
    Artisan::call('migrate', $output);
    dd(Artisan::output());
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin-logout', [App\Http\Controllers\UserController::class, 'logout'])->name('admin.logout');
Route::group(['middleware' => ['admin']], function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user/add-new', 'addForm')->name('user.add');
        Route::post('/user/store',  'store')->name('user.store');
        Route::get('/user/all', 'all')->name('user.all');
        Route::get('/user/edit/{id}', 'edit')->name('user.edit');
        Route::post('/user/update', 'update')->name('user.update');
        Route::get('/user/free', 'free')->name('user.free');
        Route::get('/user/premium', 'premium')->name('user.premium');
        Route::get('/user/delete/{id}', 'delete')->name('user.delete');
        Route::get('/user/export', 'exportUsers')->name('user.export');
    });

    Route::controller(CarrotController::class)->group(function () {
        Route::get('/carrot/add-new', 'addForm')->name('carrot.add');
        Route::post('/carrot/store',  'store')->name('carrot.store');
        Route::get('/carrot/all', 'all')->name('carrot.all');
        Route::get('/carrot/edit/{id}', 'edit')->name('carrot.edit');
        Route::post('/carrot/update', 'update')->name('carrot.update');
        Route::get('/carrot/delete/{id}', 'delete')->name('carrot.delete');
    });

    Route::controller(\App\Http\Controllers\CategoryController::class)->group(function () {
        Route::get('/category/add-new', 'addForm')->name('category.add');
        Route::post('/category/store',  'store')->name('category.store');
        Route::get('/category/all', 'all')->name('category.all');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::post('/category/update', 'update')->name('category.update');
        Route::get('/category/delete/{id}', 'delete')->name('category.delete');
    });

    Route::controller(\App\Http\Controllers\GifController::class)->group(function () {
        Route::get('/gif/add-new', 'addForm')->name('gif.add');
        Route::post('/gif/store',  'store')->name('gif.store');
        Route::get('/gif/all', 'all')->name('gif.all');
        Route::get('/gif/edit/{id}', 'edit')->name('gif.edit');
        Route::post('/gif/update', 'update')->name('gif.update');
        Route::get('/gif/delete/{id}', 'delete')->name('gif.delete');
    });

    Route::controller(\App\Http\Controllers\LifeAndJobController::class)->group(function () {
        Route::get('/life-and-job/add-new', 'addForm')->name('life-and-job.add');
        Route::post('/life-and-job/store',  'store')->name('life-and-job.store');
        Route::get('/life-and-job/all', 'all')->name('life-and-job.all');
        Route::get('/life-and-job/edit/{id}', 'edit')->name('life-and-job.edit');
        Route::post('/life-and-job/update', 'update')->name('life-and-job.update');
        Route::get('/life-and-job/delete/{id}', 'delete')->name('life-and-job.delete');
    });

    Route::controller(\App\Http\Controllers\BenefitController::class)->group(function () {
        Route::get('/benefit/add-new', 'addForm')->name('benefit.add');
        Route::post('/benefit/store',  'store')->name('benefit.store');
        Route::get('/benefit/all', 'all')->name('benefit.all');
        Route::get('/benefit/edit/{id}', 'edit')->name('benefit.edit');
        Route::post('/benefit/update', 'update')->name('benefit.update');
        Route::get('/benefit/delete/{id}', 'delete')->name('benefit.delete');
    });

    Route::controller(\App\Http\Controllers\LevelController::class)->group(function () {
        Route::get('/level/add-new', 'addForm')->name('level.add');
        Route::post('/level/store',  'store')->name('level.store');
        Route::get('/level/all', 'all')->name('level.all');
        Route::get('/level/edit/{id}', 'edit')->name('level.edit');
        Route::post('/level/update', 'update')->name('level.update');
        Route::get('/level/delete/{id}', 'delete')->name('level.delete');
    });

    Route::controller(\App\Http\Controllers\QuestionController::class)->group(function () {
        Route::get('/question/{id}/add-new', 'addForm')->name('question.add');
        Route::post('/question/store',  'store')->name('question.store');
        Route::get('/question/{id}/all', 'all')->name('question.all');
        Route::get('/question/edit/{id}', 'edit')->name('question.edit');
        Route::post('/question/update', 'update')->name('question.update');
        Route::get('/question/delete/{id}', 'delete')->name('question.delete');
    });

    Route::controller(\App\Http\Controllers\LearnCategoryController::class)->group(function () {
        Route::get('/learn-category/add-new', 'addForm')->name('learn-category.add');
        Route::post('/learn-category/store',  'store')->name('learn-category.store');
        Route::get('/learn-category/all', 'all')->name('learn-category.all');
        Route::get('/learn-category/edit/{id}', 'edit')->name('learn-category.edit');
        Route::post('/learn-category/update', 'update')->name('learn-category.update');
        Route::get('/learn-category/delete/{id}', 'delete')->name('learn-category.delete');
    });

    Route::controller(\App\Http\Controllers\LearnSubcategoryController::class)->group(function () {
        Route::get('/learn-subcategory/{id}/add-new', 'addForm')->name('learn-subcategory.add');
        Route::post('/learn-subcategory/store',  'store')->name('learn-subcategory.store');
        Route::get('/learn-subcategory/{id}/all', 'all')->name('learn-subcategory.all');
        Route::get('/learn-subcategory/edit/{id}', 'edit')->name('learn-subcategory.edit');
        Route::post('/learn-subcategory/update', 'update')->name('learn-subcategory.update');
        Route::get('/learn-subcategory/delete/{id}', 'delete')->name('learn-subcategory.delete');
    });

    Route::controller(\App\Http\Controllers\ContentController::class)->group(function () {
        Route::get('/privacy', 'privacy')->name('privacy.edit');
        Route::post('/privacy/update',  'updatePrivacy')->name('privacy.update');

        Route::get('/terms', 'terms')->name('terms.edit');
        Route::post('/terms/update',  'updateTerms')->name('terms.update');
    });

    Route::controller(\App\Http\Controllers\LearnContentController::class)->group(function () {
        Route::get('/learn-content/{id}/add-new', 'addForm')->name('learn-content.add');
        Route::post('/learn-content/store',  'store')->name('learn-content.store');
        Route::get('/learn-content/{id}/all', 'all')->name('learn-content.all');
        Route::get('/learn-content/edit/{id}', 'edit')->name('learn-content.edit');
        Route::post('/learn-content/update', 'update')->name('learn-content.update');
        Route::get('/learn-content/delete/{id}', 'delete')->name('learn-content.delete');
    });
});
Auth::routes();

