<?php

declare(strict_types=1);

namespace Molitor\News\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Molitor\Cms\Repositories\PostRepositoryInterface;
use Molitor\Theme\Services\LayoutService;

class NewsController extends Controller
{
    public function __construct(
        private PostRepositoryInterface $postRepository,
        private LayoutService $layoutService,
    ) {}

    public function homepage(): View
    {
        return view('news::pages.index');
    }

    public function index(): View
    {
        return view('news::pages.article.index');
    }

    public function show(string $slug): View|Response
    {
        $post = $this->postRepository->getBySlug($slug);

        if (! $post) {
            abort(404);
        }
        
        $post->load(['content.contentElements', 'authors', 'postGroups']);

        $layout = $this->layoutService->getLayoutTemplate($post->layout);

        return view('news::pages.article.show', [
            'layout' => $layout,
            'post' => $post,
        ]);
    }
}
