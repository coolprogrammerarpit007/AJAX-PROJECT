<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

// This line ensures that your ProjectController handles all the HTTP requests for the projects resource, providing a standard RESTful interface.

Route::get('/', function () {
    return view('projects');
});

Route::apiResource('projects', ProjectController::class);
