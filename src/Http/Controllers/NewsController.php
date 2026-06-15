<?php

declare(strict_types=1);

namespace Molitor\News\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function homepage(): View
    {
        return view('news::homepage.index');
    }

    public function index(): View
    {
        return view('news::news.index');
    }

    public function show(): View
    {
        return view('news::article.show');
    }
}
