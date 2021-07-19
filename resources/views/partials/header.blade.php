<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand ml-2" href="{{ route("home") }}">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a class="nav-link" aria-current="page" href="{{ route("home") }}">Home</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route("comics.index") }}">Comics</a>
                </li>
            </ul>
        </div>
      </nav>
</header>