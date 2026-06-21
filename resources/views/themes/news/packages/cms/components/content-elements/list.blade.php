@php
    $items = $settings['items'] ?? [];
@endphp

<div class="border-l-4 border-blue-500 bg-blue-50 rounded-r-2xl p-5 my-6">
  <div class="flex items-start gap-3">
    <div>
      <ul class="text-blue-800 text-sm space-y-1.5">
        @foreach($items as $item)
          <li class="flex items-start gap-2"><svg class="w-3.5 h-3.5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>{{ $item }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>