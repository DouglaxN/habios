<?php

use app\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// MVC 
// Model-View-Controller pattern
// Model -> Database interaction
// View -> User Interface
// Controller -> Business logic

Route::get('/', [SiteController::class, 'index']);