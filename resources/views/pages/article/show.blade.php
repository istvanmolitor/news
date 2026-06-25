@extends($layout)

@section('top')
    @include('news::partials.article.hero')
@endsection

@section('content')

<article>

    {{-- CIKK SZÖVEG --}}
    <div class="text-slate-700 leading-relaxed space-y-6">

        <p class="text-lg sm:text-xl font-medium text-slate-800 leading-relaxed pl-5 border-l-4 border-red-600 bg-red-50/50 py-3 pr-4 rounded-r-xl">
            {{ $post->lead }}
        </p>
        <x-cms::content :content="$post->content" />

        @include('news::partials.article.content-key-facts')

        @include('news::partials.article.content-pull-quote')

        <figure class="my-8">
            <div class="grid grid-cols-2 gap-3">
                <div class="relative h-52 rounded-xl overflow-hidden bg-gradient-to-br from-emerald-700 to-teal-900">
                    <div class="absolute inset-0 opacity-70" style="background: url('https://picsum.photos/seed/article-img2/400/300') center/cover;"></div>
                </div>
                <div class="relative h-52 rounded-xl overflow-hidden bg-gradient-to-br from-blue-700 to-indigo-900">
                    <div class="absolute inset-0 opacity-70" style="background: url('https://picsum.photos/seed/article-img3/400/300') center/cover;"></div>
                </div>
            </div>
            <figcaption class="mt-2 text-xs text-slate-500 text-center">
                Balra: az újonnan átadott debreceni kórházi szárny. Jobbra: az energiaügyi minisztérium épülete Budapesten. (Fotók: MTI)
            </figcaption>
        </figure>

    </div>

    @include('news::partials.article.tags')
    @include('news::partials.article.reactions')
    @include('news::partials.article.author-bio')
    @include('news::partials.article.comments')
    @include('news::partials.article.meta-bar')
</article>

@endsection

@section('sidebar')
<div class="sticky top-20">
    @include('news::partials.article.sidebar-stats')
    @include('news::partials.article.sidebar-related')
    @include('news::partials.sidebar.ad')
    @include('news::partials.sidebar.trending')
</div>
@endsection

@section('content-bottom')
@include('news::partials.article.related-grid')
@endsection

@section('script')
<script>
    window.addEventListener('scroll', function() {
        const article = document.querySelector('article');
        if (!article) return;
        const rect = article.getBoundingClientRect();
        const total = article.offsetHeight;
        const scrolled = Math.max(0, -rect.top);
        const progress = Math.min(100, (scrolled / total) * 100);
        const bar = document.getElementById('reading-progress');
        if (bar) bar.style.width = progress + '%';
    });
</script>
@endsection
