<?php

use App\Http\Controllers\Frontend\Activity\PackageController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\News\BlogController;
use App\Http\Controllers\Frontend\Page\PageController;
use App\Http\Controllers\Frontend\Service\ServiceController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomePageController::class, 'index'])->name('home');


Route::any('/register', function() {
    abort(404);
});


Route::get('/contact-us', [HomePageController::class, 'contact'])->name('contact-us');
Route::post('/contact/message', [HomePageController::class, 'contactStore'])->name('contact-us.store');

Route::get('/get-fields', [HomePageController::class, 'getFieldType'])->name('flight-field');
Route::post('/book-flight', [HomePageController::class, 'storeFlightBookInfo'])->name('book-flight');

Route::get('/activity', [PackageController::class, 'index'])->name('activity.index');
Route::post('/activity/search', [PackageController::class, 'search'])->name('activity.search');
Route::get('/activity/{slug}', [PackageController::class, 'show'])->name('activity.show');
Route::get('/activity/category/{slug}', [PackageController::class, 'category'])->name('activity.category');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/search/', [BlogController::class, 'search'])->name('blog.search');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/{slug}', [PageController::class, 'index'])->name('page.index');



