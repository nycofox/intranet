<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Nyheter
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Support</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('support.create') }}">Meld ny sak</a>
                        <a class="dropdown-item" href="#">Mine saker</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vis alle saker</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Booking</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">NAVN</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Min profil</a>
                        <a class="dropdown-item" href="#">Innstillinger</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="sub">Logg ut</a>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Administrasjon</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Dashbord</a>
                        <a class="dropdown-item" href="#">Brukere</a>
                        <a class="dropdown-item" href="#">Meldinger</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Søk">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Søk</button>
            </form>
        </div>
    </div>
</nav>
