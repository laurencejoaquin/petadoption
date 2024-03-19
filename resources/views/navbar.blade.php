<nav class="navbar navbar-expand-lg fixed-top border-end" style="background-color: var(--white); border-bottom: 1px solid #ebebeb;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="main-logo" src="{{ asset('img/PawLogoBeige.png') }}" alt="Paw" height="40" width="40">
            <span class="gochi-hand-regular" style="font-size: 25px;">
                Paw Buddies
            </span>
        </a>
        <button class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                {{-- <button class="btn vonton" type="submit">Login</button> --}}
                {{-- <a class="btn" data-bs-toggle="button" href="#" role="button">Login</a> --}}
                <button class="btn von-login" type="button">Log In</button>
                {{-- <button class="btn btn-link" type="button">Log In</button> --}}
            </form>
            <form class="d-flex ms-1" role="search">
                <button class="btn von-signup" type="submit">Sign Up</button>
            </form>

        </div>
    </div>
</nav>
