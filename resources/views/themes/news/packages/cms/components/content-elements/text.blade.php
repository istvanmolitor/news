@php
    $text  = $settings['text']  ?? '';
    $align = $settings['align'] ?? 'left';
    $alignClass = match($align) {
        'center'  => 'text-center',
        'right'   => 'text-right',
        'justify' => 'text-justify',
        default   => 'text-left',
    };
@endphp

<div class="news-body-text mb-5 {{ $alignClass }}">
    <p class="text-slate-700 text-base md:text-[1.0625rem] leading-[1.75] tracking-[0.01em]">
        {!! $text !!}
    </p>
</div>
