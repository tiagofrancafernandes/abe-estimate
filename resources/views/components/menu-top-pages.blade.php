<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="menu-top-pages">
        Pages
        <span class="caret"></span></a>
    <div class="dropdown-menu" aria-labelledby="menu-top-pages">
        @foreach ($pages as $page)
        <a class="dropdown-item" href="#{{ $page->slug }}" download>{{ $page->title }}</a>
        <div class="dropdown-divider"></div>
        @endforeach
    </div>
</li>
