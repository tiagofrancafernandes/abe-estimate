<li class="nav-item dropdown" data-menu-id="menu-top-{{ $menuRandomId }}">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="menu-top-{{ $menuRandomId }}">
        {{ __($menuLabel) ?? $slot ?? null }}
        <span class="caret"></span>
    </a>

    <div class="dropdown-menu" aria-labelledby="menu-top-{{ $menuRandomId }}">
        @php
            $incrcement = 0;
        @endphp
        @foreach ($links as $link)

            @unless (!\Auth::user() && $link->get('show_if_auth_is', 'both') == 'auth')
                @if ($incrcement++ > 0)
                    <div class="dropdown-divider"></div>
                @endif

                <a class="dropdown-item"
                    href="{{ $link->get('route') ? route($link->get('route')) : $link->get('url', '#!') }}"
                    {!! $link->get('attributes') !!}>
                    {{ $link->get('title') }}
                </a>
            @endunless

        @endforeach
    </div>
</li>
