<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="../" class="navbar-brand">Bootswatch</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">@lang('Users')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="download">Darkly
                        <span class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="download">
                        <a class="dropdown-item" rel="noopener" target="_blank"
                            href="https://jsfiddle.net/bootswatch/zgm74cjw/">Open in JSFiddle</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../5/darkly/bootstrap.min.css" download>bootstrap.min.css</a>
                        <a class="dropdown-item" href="../5/darkly/bootstrap.css" download>bootstrap.css</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../5/darkly/_variables.scss" download>_variables.scss</a>
                        <a class="dropdown-item" href="../5/darkly/_bootswatch.scss" download>_bootswatch.scss</a>
                    </div>
                </li>

                <x-menu-top-pages />
            </ul>
            <ul class="navbar-nav ms-md-auto">
                <li class="nav-item">
                    <a target="_blank" rel="noopener" class="nav-link"
                        href="https://github.com/thomaspark/bootswatch/"><i class="fa fa-github"></i> GitHub</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" rel="noopener" class="nav-link" href="https://twitter.com/bootswatch"><i
                            class="fa fa-twitter"></i> Twitter</a>
                </li>
            </ul>
        </div>
    </div>
</div>
