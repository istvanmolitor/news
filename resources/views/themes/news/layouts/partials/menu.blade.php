<nav class="hidden lg:block" aria-label="Főmenü">
    <ul class="flex items-center m-0 p-0 list-none">
        @foreach(menu('main') as $item)
            @php($children = $item->getMenuItems())
            <li class="relative group">
                <a
                    href="{{ $item->getUrl() ?? '#' }}"
                    @if(count($children) > 0)
                        onclick="event.preventDefault(); this.parentElement.querySelector(':scope > ul')?.classList.toggle('hidden');"
                    @endif
                    class="flex items-center gap-1 px-4 py-3.5 text-sm font-semibold uppercase tracking-wide transition-colors
                        {{ $item->isActive()
                            ? 'text-white bg-red-600'
                            : 'text-slate-300 hover:text-white hover:bg-slate-700' }}"
                >
                    {{ $item->getLabel() }}
                    @if(count($children) > 0)
                        <svg class="w-3 h-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    @endif
                </a>

                @if(count($children) > 0)
                    <ul class="hidden group-hover:block group-focus-within:block absolute left-0 top-full z-50 w-56 bg-slate-800 border border-slate-700 shadow-xl list-none m-0 p-1">
                        @foreach($children as $child)
                            <li>
                                <a href="{{ $child->getUrl() ?? '#' }}"
                                   class="block px-4 py-2.5 text-sm transition-colors
                                       {{ $child->isActive()
                                           ? 'text-white bg-red-600'
                                           : 'text-slate-300 hover:text-white hover:bg-slate-700' }}">
                                    {{ $child->getLabel() }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach

        {{-- Live badge --}}
        <li class="ml-2">
            <a href="#" class="flex items-center gap-1.5 px-3 py-3.5 text-sm font-bold uppercase tracking-wide text-red-400 hover:text-red-300 transition-colors">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                Élő
            </a>
        </li>
    </ul>
</nav>
