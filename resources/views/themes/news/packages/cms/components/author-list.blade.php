<div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-200 border border-slate-200">
    @foreach($authors as $author)
        <x-cms::author-card :author="$author" />
    @endforeach
</div>
