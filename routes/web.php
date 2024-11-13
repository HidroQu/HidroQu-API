<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
=======
Route::get(uri: '/', action: function () {
    return [
        'laravel' => app()->version(),
        'php' => PHP_VERSION,
    ];
>>>>>>> 1ed05d27a7cf184078f0999c715826d77a53e192
});
