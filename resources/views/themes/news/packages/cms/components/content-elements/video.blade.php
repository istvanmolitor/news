@php
    $url = $settings['url'] ?? '';
    $title = $settings['title'] ?? 'Beágyazott videó';
    // YouTube embed URL conversion
    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $url, $m)) {
        $url = 'https://www.youtube.com/embed/' . $m[1] . '?rel=0';
    }
@endphp

<figure class="content-element content-element-video my-8">
    <div class="relative overflow-hidden bg-slate-900 border border-slate-200" style="aspect-ratio: 16/9;">
        <iframe
            src="{{ $url }}"
            title="{{ $title }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            loading="lazy"
            class="absolute inset-0 w-full h-full"
        ></iframe>
    </div>
    @if($title)
        <figcaption class="mt-2 text-xs text-slate-500 text-center italic">{{ $title }}</figcaption>
    @endif
</figure>
