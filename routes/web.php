<?php

use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: function () {
    return view('home');
})->name('home');
