@if ($item['subItems'] ?? [])
    @php
        $menuLabel = $item['label'] ?? null;
        $items = $item['subItems'] ?? [];
    @endphp
    <x-menu-top-dropdown :menuItems="$items" :menuLabel="$menuLabel" />
@else
    @unless(!\Auth::user() && ($item['show_if_auth_is'] ?? 'both') == 'auth')
        <li class="nav-item">
            <a class="nav-link" href="{{ $item['route'] ?? null ? route($item['route']) : $item['url'] ?? '#!' }}"
                {!! $item['attributes'] !!}>

                <i class="{{ $item['icon'] ?? null }}"></i>
                {{ $item['title'] ?? ($item['label'] ?? null) }}
            </a>
        </li>
    @endunless
@endif
