<?php

namespace App\Providers;

use Filament\Actions\ExportAction;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\Environment\Environment;

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
         if (app()->environment('production')) {
        URL::forceScheme('http');
    }
        // URL::forceScheme('https');
    }

    // ExportAction::configureUsing(fn (ExportAction $action) => $action->fileDisk('image'));
}
