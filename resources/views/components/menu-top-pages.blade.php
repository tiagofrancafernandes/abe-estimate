<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="menu-top-pages">
        Pages
        <span class="caret"></span></a>
    <div class="dropdown-menu" aria-labelledby="menu-top-pages">
        @foreach ($pages as $page)
            @if ($loop->index > 0)
                <div class="dropdown-divider"></div>
            @endif

            <a class="dropdown-item" href="#{{ $page->slug }}">{{ $page->title }}</a>
        @endforeach
    </div>
</li>
