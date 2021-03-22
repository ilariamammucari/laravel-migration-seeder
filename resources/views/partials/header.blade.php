<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="{{ (Request::route()->getName() == 'home-page') ? 'active' : '' }} nav-item">
                    <a class="nav-link" href="{{ route('home-page') }}">Home</a>
                </li>
                <li class="{{ (Request::route()->getName() == 'songs.index') ? 'active' : '' }} nav-item">
                    <a class="nav-link" href="{{ route('songs.index') }}">Brani</a>
                </li>
            </ul>
        </div>
    </div>
</nav>