<div class="flex flex-col gap-3">
    @foreach($pages as $page)
        <x-cms::page-card :page="$page" />
    @endforeach
</div>
