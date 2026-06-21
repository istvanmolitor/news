<?php

declare(strict_types=1);

namespace Molitor\News\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Molitor\Cms\Models\Author;
use Molitor\Cms\Repositories\AuthorRepositoryInterface;

class AuthorController extends Controller
{
    public function __construct(
        private AuthorRepositoryInterface $authorRepository,
    ) {}

    public function index(): View
    {
        $authors = Author::withCount(['posts' => fn ($q) => $q->where('is_published', true)])
            ->orderBy('name')
            ->get();

        return view('news::pages.author.index', ['authors' => $authors]);
    }

    public function show(string $slug): View|Response
    {
        $author = $this->authorRepository->getBySlug($slug);

        if (! $author) {
            abort(404);
        }

        $posts = $author->posts()
            ->where('is_published', true)
            ->latest()
            ->paginate(12);

        return view('news::pages.author.show', [
            'author' => $author,
            'posts' => $posts,
        ]);
    }
}
