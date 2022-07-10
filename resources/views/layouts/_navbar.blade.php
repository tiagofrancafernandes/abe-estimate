<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                @if (in_array(config('app.env'), ['local', 'dev', 'demo']))
                    <x-bootswatch-menu-dropdown-demo />
                @endif

                <x-menu-top-pages />

                @foreach (config('app-menu.left') as $item)
                    @if (
                        (!\Auth::user() && ($item['show_if_auth_is'] ?? 'both') == 'auth') ||
                        (!($item['subItems'] ?? null) && !($item['route'] ?? ($item['url'] ?? null)))
                    )
                        @continue
                    @endif

                    <x-navbar-items :item="$item"/>
                @endforeach
            </ul>

            <ul class="navbar-nav ms-md-auto">
                @foreach (config('app-menu.right') as $item)
                    @if (
                        (!\Auth::user() && ($item['show_if_auth_is'] ?? 'both') == 'auth') ||
                        (!($item['subItems'] ?? null) && !($item['route'] ?? ($item['url'] ?? null)))
                    )
                        @continue
                    @endif

                    <x-navbar-items :item="$item"/>
                @endforeach
            </ul>
        </div>
    </div>
</div>
