<nav class="navbar navbar-expand-lg fixed-top border-end" style="background-color: var(--white); border-bottom: 1px solid #ebebeb;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/PawLogo.png') }}" alt="Paw" height="24" width="30">
            Paw Buddies
        </a>
        <button class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" aria-label="Search" placeholder="Search">
                <button class="btn vonton" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
