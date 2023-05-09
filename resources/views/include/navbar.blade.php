<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if (request()->is('projects/index')) active @endif">
                    <a class="nav-link"  href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item @if (request()->is('/')) active @endif">
                    <a class="nav-link" href="{{ route('home') }}">Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
