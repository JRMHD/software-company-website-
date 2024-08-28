<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::view('/404', '404')->name('404');
Route::view('/about', 'about')->name('about');
Route::view('/blog-single', 'blog-single')->name('blog-single');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/portfolio-single', 'portfolio-single')->name('portfolio-single');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::view('/service-single', 'service-single')->name('service-single');
Route::view('/services', 'services')->name('services');
Route::view('/terms-of-use', 'terms-of-use')->name('terms-of-use');
Route::view('/welcome', 'welcome')->name('welcome');
