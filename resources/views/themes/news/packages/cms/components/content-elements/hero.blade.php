@php
    $title = $settings['title'] ?? '';
    $lead  = $settings['lead']  ?? '';
    $src   = $settings['image_src'] ?? null;
@endphp

<div class="content-element content-element-hero relative overflow-hidden bg-slate-900 my-8" style="min-height: 400px;">
    @if($src)
        <img src="{{ $src }}" alt="{{ $title }}"
             class="absolute inset-0 w-full h-full object-cover opacity-50">
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>

    <div class="relative z-10 flex flex-col justify-end px-6 md:px-10 py-10" style="min-height: 400px;">
        @if($title)
            <h2 class="text-3xl md:text-4xl font-black text-white leading-tight mb-3">{{ $title }}</h2>
        @endif
        @if($lead)
            <p class="text-slate-300 text-lg leading-relaxed max-w-2xl">{{ $lead }}</p>
        @endif
    </div>
</div>
