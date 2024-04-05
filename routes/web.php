<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;




Route:: view("","welcome")-> name ("home");
Route:: view("/contacto","contacto")-> name ("contacto");
Route::get("/blog", [PostController::class, 'index'])->name("posts.index");
Route::get("/blog/create", [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get("/blog/{post}", [PostController::class, 'show'])->name('posts.show');
Route::get("/blog/{post}/edit", [PostController::class, 'edit'])->name('posts.edit');
Route::patch("/blog/{post}", [PostController::class, 'update'])->name('posts.update');
Route:: view("about","about")-> name ("about");


