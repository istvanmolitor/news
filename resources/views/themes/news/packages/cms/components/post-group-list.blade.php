<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200">
    @foreach($postGroups as $postGroup)
        <x-cms::post-group-card :post-group="$postGroup" />
    @endforeach
</div>
