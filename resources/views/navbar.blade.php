<nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #561C24;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img alt="Paw" height="24" src="{{ asset('img/PawLogo.png') }}" width="30">
            Paw Buddies
        </a>
        <button class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>