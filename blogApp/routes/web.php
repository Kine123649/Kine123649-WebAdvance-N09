<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\BlogController;

Route::middleware('auth')->group(function () {
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index'); // List all posts
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create'); // Show create form
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store'); // Store new post
    Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show'); // Show single post
    Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit'); // Show edit form
    Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update'); // Update post
    Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy'); // Delete pos
    Route::get('/blog/user/{id}', [BlogController::class, 'userBlog'])->name('blog.user');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->prefix('api')->group(function () {
    Route::get('posts', [PostController::class, 'index']);
    Route::post('posts', [PostController::class, 'store'])->name('post.store');
    Route::get('posts/{id}', [PostController::class, 'show']);
    Route::put('posts/{id}', [PostController::class, 'update']);
    Route::delete('posts/{id}', [PostController::class, 'destroy']);
});