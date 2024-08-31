<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;



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


// Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
});

// Public routes
Route::get('blog', [PostController::class, 'showAll'])->name('blog.index');
Route::get('blog/{post}', [PostController::class, 'show'])->name('blog.show');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');
Route::post('blog/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('blog/{post}', [PostController::class, 'show'])->name('blog.show');
Route::get('/search', [PostController::class, 'search'])->name('posts.search');


Route::get('/blog', [PostController::class, 'showAll'])->name('blog.index');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('blog.show');
Route::get('/blog/tag/{tag}', [PostController::class, 'searchByTag'])->name('blog.tag');
Route::get('/posts/tag/{tag}', [PostController::class, 'searchByTag'])->name('posts.searchByTag');

Route::post('/contact', [ContactController::class, 'store']);


Route::get('/404', function () {
    abort(404);
})->name('404');



Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('portfolio.show');

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/projects', [ProjectController::class, 'adminIndex'])->name('admin.projects.index');
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/admin/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');  // Add this name
});
