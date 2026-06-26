@php
    $alignment = $settings['alignment'] ?? 'center';
    $caption   = $settings['caption']   ?? ($settings['alt'] ?? null);
    $wrapClass = match($alignment) {
        'left'  => 'float-left mr-6 mb-4 max-w-xs clear-left',
        'right' => 'float-right ml-6 mb-4 max-w-xs clear-right',
        default => 'my-6 clear-both',
    };
    $imgClass = match($alignment) {
        'left', 'right' => 'w-full',
        default         => 'mx-auto max-w-full',
    };
@endphp

<figure class="content-element content-element-image {{ $wrapClass }}">
    <img
        src="{{ $settings['src'] }}"
        alt="{{ $settings['alt'] ?? '' }}"
        @isset($settings['width']) width="{{ $settings['width'] }}" @endisset
        @isset($settings['height']) height="{{ $settings['height'] }}" @endisset
        loading="lazy"
        class="{{ $imgClass }} block border border-slate-200"
    >
    @if($caption)
        <figcaption class="mt-2 text-xs text-slate-500 text-center leading-relaxed px-2 italic border-t border-slate-100 pt-2">
            {{ $caption }}
        </figcaption>
    @endif
</figure>
