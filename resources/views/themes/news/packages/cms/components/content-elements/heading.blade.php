@php
    $text  = $settings['text']  ?? '';
    $level = (int)($settings['level'] ?? 2);

    $classes = match($level) {
        1 => 'text-3xl lg:text-4xl font-black text-slate-900 mt-12 mb-5 first:mt-0 leading-tight',
        2 => 'text-2xl lg:text-3xl font-black text-slate-900 mt-10 mb-4 first:mt-0 leading-tight border-b-2 border-red-600 pb-2 inline-block',
        3 => 'text-xl lg:text-2xl font-bold text-slate-900 mt-8 mb-3 first:mt-0 leading-snug',
        4 => 'text-lg font-bold text-slate-800 mt-6 mb-2 first:mt-0 uppercase tracking-wide',
        default => 'text-base font-bold text-slate-700 mt-4 mb-2 first:mt-0',
    };
@endphp

<div class="content-element content-element-heading mb-4">
    <h{{ $level }} class="{{ $classes }}">{{ $text }}</h{{ $level }}>
</div>
