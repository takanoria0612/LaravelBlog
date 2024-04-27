<?php

use App\Http\Controllers\Admin\AdminBlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::view('/', 'index');

//inquiery form
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact');

Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');
// Blog
Route::get('/admin/blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
Route::get('/admin/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
Route::post('/admin/blogs', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
Route::get('/admin/blogs/{blog}', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
Route::put('/admin/blogs/{blog}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
