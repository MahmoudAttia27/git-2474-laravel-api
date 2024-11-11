<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('topics', TopicController::class);
Route::resource('languages', LanguageController::class);
Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
