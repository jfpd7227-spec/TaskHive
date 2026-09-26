<?php
namespace App\Providers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}
        public function boot(): void {
                if (env('APP_URL')) {
                            URL::forceRootUrl(env('APP_URL'));
                                        URL::forceScheme('https');
                                                }
                                                    }
                                                    }