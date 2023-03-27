<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// pagesd link 
Route::get('/shingles/asphalt', [PagesController::class, 'asphalt']);
// metal oage
Route::get('/shingles/metal', [PagesController::class, 'metal']);
// gutter oage
Route::get('/shingles/gutter', [PagesController::class, 'gutter']);

// solor oage
Route::get('/shingles/solor', [PagesController::class, 'solor']);
// solor/reviews
Route::get('/solor/reviews', [PagesController::class, 'solorReview']);

///shingles
Route::get('/shingles', [PagesController::class, 'shingles']);
///shinglesPrice
Route::get('/shinglesPrice', [PagesController::class, 'shinglesPrice']);
///shinglesRating
Route::get('/shinglesRating', [PagesController::class, 'shinglesRating']);
///shinglesReviews
Route::get('/shinglesReviews', [PagesController::class, 'shinglesReviews']);