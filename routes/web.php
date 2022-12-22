<?php

use App\Http\Controllers\ReviewsController;
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
    $review = new ReviewsController;
    //    $count = $review->countReview();
    return view('welcome');
});
Route::resource('review', ReviewsController::class);
