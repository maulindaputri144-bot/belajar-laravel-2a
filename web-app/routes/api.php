<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::resource('/article', ArticleController::class);