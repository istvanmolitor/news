@if(isset($postGroup))
<div class="bg-slate-900 border-b-4 border-red-600">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3">
            <div>
                <span class="text-xs text-red-400 font-bold uppercase tracking-widest">Rovat</span>
                <h1 class="text-2xl md:text-3xl font-black text-white mt-1 uppercase tracking-tight">
                    {{ $postGroup->name }}
                </h1>
                @if($postGroup->description ?? false)
                    <p class="text-slate-400 text-sm mt-2 max-w-lg">{{ $postGroup->description }}</p>
                @endif
            </div>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                <span class="text-slate-400 text-xs">Folyamatosan frissülő hírfolyam</span>
            </div>
        </div>
    </div>
</div>
@endif