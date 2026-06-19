<?php

declare(strict_types=1);

namespace Molitor\News\Providers;

use Illuminate\Support\ServiceProvider;
use Molitor\Theme\Services\ThemeRegistry;
use Molitor\News\Themes\NewsTheme;

class NewsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'news');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/news'),
        ], 'news-views');

        $registry = $this->app->make(ThemeRegistry::class);
        $registry->register(NewsTheme::class);
    }

    public function register(): void {}
}
