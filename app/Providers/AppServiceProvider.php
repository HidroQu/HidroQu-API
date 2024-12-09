<?php

namespace App\Providers;

//use Filament\Support\Facades\FilamentView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        FilamentView::registerRenderHook(
//            'panels::head.start',
//            fn (): string => '<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">',
//        );
    }
}
