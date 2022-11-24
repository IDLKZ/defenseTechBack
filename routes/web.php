<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('information', App\Http\Controllers\InformationController::class);


Route::resource('announcements', App\Http\Controllers\AnnouncementController::class);


Route::resource('newsCategories', App\Http\Controllers\NewsCategoryController::class);


Route::resource('news', App\Http\Controllers\NewsController::class);




Route::resource('tags', App\Http\Controllers\TagController::class);


Route::resource('companies', App\Http\Controllers\CompanyController::class);


Route::resource('awards', App\Http\Controllers\AwardController::class);


Route::resource('vacancies', App\Http\Controllers\VacancyController::class);


Route::resource('categories', App\Http\Controllers\CategoryController::class);
