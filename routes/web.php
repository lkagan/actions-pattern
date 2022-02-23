<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Create a  todo list in the session
// Add an invokable class that adds a task
