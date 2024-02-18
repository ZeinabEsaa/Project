<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\TestController;
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
    return view('welcome');
});
Route::get('index', function () {
    return view('testHome');
});
Route::get('test', function () {
    return view('login');
});
Route::get('/testHome', [TestController::class, 'testHome'])->name('testHome');
Route::get('/Blog', [TestController::class, 'Blog'])->name('Blog');
Route::get('/Listing', [TestController::class, 'Listing'])->name('Listing');
Route::get('/about', [TestController::class, 'about'])->name('about');
Route::get('/contact', [TestController::class, 'contact'])->name('contact');
Route::get('/testimonial', [TestController::class, 'testimonial'])->name('testimonial');
// User
Route::get('login',[TestController::class,'create'])->name('login');
Route::post('insert',[TestController::class,'store'])->name('insert');
