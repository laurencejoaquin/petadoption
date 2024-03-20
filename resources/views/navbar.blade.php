<nav class="navbar navbar-expand-lg fixed-top border-end" style="background-color: var(--white); border-bottom: 1px solid #ebebeb;">
    <div class="container-fluid w-100 d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img class="main-logo" src="{{ asset('img/PawLogoBeige.png') }}" alt="Paw" height="40" width="40">
            <span class="gochi-hand-regular" style="font-size: 25px;">
                Paw Buddies
            </span>
        </a>
        <button class="navbar-toggler d-lg-none" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Our Animals</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Contact Us</a>
                </li>
                <!-- Add more navigation items here -->
                <hr>
                <li class="nav-item d-lg-none mb-2">
                    <div class="d-flex">
                        <div>
                            <button class="btn von-login d-block" type="button">Log In</button>
                        </div>
                        <div>
                            <button class="btn von-signup d-block" type="submit">Sign Up</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block"> <!-- Hide the buttons on mobile screens -->
            <button class="btn von-login" type="button">Log In</button>
            <button class="btn von-signup" type="submit">Sign Up</button>
        </div>
    </div>
</nav>
