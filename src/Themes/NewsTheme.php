<?php

namespace Molitor\News\Themes;

use Molitor\Theme\Services\Theme;

class NewsTheme extends Theme
{
    public function getName(): string
    {
        return 'News';
    }

    public function getSlug(): string
    {
        return 'news';
    }
    
    public function getPackage(): string
    {
        return 'news';
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/0369a1/ffffff?text=News';
    }
}
