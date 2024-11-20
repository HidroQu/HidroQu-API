<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: function () {
    return [
        'laravel' => app()->version(),
        'php' => PHP_VERSION,
    ];
});

Route::get(uri: '/reset', action: function () {
    Artisan::call('migrate:fresh --seed');

    return [
        'message' => 'success reset data',
    ];
});

require __DIR__.'/auth.php';
require __DIR__.'/hidroqu.php';
