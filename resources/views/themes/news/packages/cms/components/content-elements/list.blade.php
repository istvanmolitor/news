@php
    $items = $settings['items'] ?? [];
@endphp

@if(!empty($items))
<div class="content-element content-element-list my-5">
    <ul class="space-y-2">
        @foreach($items as $item)
            <li class="flex items-start gap-3 text-slate-700 text-base leading-relaxed">
                <span class="mt-1.5 w-2 h-2 rounded-full bg-red-600 shrink-0"></span>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</div>
@endif
