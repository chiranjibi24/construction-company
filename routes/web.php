<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home.index');

Route::view('/about', 'about.index');

Route::view('/services', 'services.index');

Route::view('/projects', 'projects.index');

Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');

Route::get('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');

Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');