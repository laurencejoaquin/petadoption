@extends('masterlayout')
@section('content')
    <div class="container-xl mt-4 pt-4 mb-5">
        <div class="row d-flex align-items-center mb-4 mb-lg-0">
            <div class="col-lg-6">
                <h1 class="pacifico-regular">Find Your Forever Friend</h1>

                Welcome to Paw Buddies, where we connect hearts and homes with furry, or feathery friend! We are a dedicated individual pet lovers committed in helping you to find the perfect companion who will steal your
                heart and enrich your life. Whether you're searching for a loyal canine companion or a cuddly feline friend, we have a wide range of animals eagerly waiting to meet you. Each one comes with a unique story and
                a desire to find a loving home. Join us in making a difference by adopting a pet in need. <br>Start your journey to finding your forever friend today with Paw Buddies Pet Adoption!
            </div>
            <div class="col-lg-6">
                {{-- <img class="rounded" src="{{ asset('img/smallest-dog-breeds-toy-poodle.webp') }}" alt="doggo" style="width: 100%;"> --}}
                <div class="carousel slide mb-4 w-100" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-4" style="max-height: 350px">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/smallest-dog-breeds-toy-poodle.jpg') }}" alt="poodle" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item " data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/orangecat.jpg') }}" alt="orangecat" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/shihtzu.webp') }}" alt="tom" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/Japanese-spitz-puppy1.webp') }}" alt="tom" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5" style="background-color: var(--khaki)">
        <div class="container-xl">
            <h1 class="our-name pacifico-regular pb-4">
                Get to know more about them!
            </h1>
            <div class="row row-cols-1 row-cols-md-3 gx-4">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/smallest-dog-breeds-toy-poodle.jpg') }}" alt="poodle" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Cooper</h5>
                            <p class="card-text">Know more about me!</p>
                            <a class="btn vonton" data-bs-toggle="modal" data-bs-target="#coopermodal" href="#">About me</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/Moji.jpg') }}" alt="shihtzu" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Moji</h5>
                            <p class="card-text">Know more about me!</p>
                            <a class="btn vonton" data-bs-toggle="modal" data-bs-target="#mojimodal" href="#">About me</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/shihtzu.webp') }}" alt="shihtzu" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Tom</h5>
                            <p class="card-text">Know more about me!</p>
                            <a class="btn vonton" data-bs-toggle="modal" data-bs-target="#tommodal" href="#">About me</a>
                        </div>
                    </div>
                </div>
                {{-- 2nd column --}}
                <div class="col mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/Luna.webp') }}" alt="shihtzu" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Luna</h5>
                            <p class="card-text">Know more about me!</p>
                            <a class="btn vonton" data-bs-toggle="modal" data-bs-target="#lunamodal" href="#">About me</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/orangecat.jpg') }}" alt="orangecat" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Leo</h5>
                            <p class="card-text">Know more about me!</p>
                            <a class="btn vonton" data-bs-toggle="modal" data-bs-target="#leomodal" href="#">About me</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/Oliver.webp') }}" alt="shihtzu" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Oliver</h5>
                            <p class="card-text">Know more about me!</p>
                            <a class="btn vonton" data-bs-toggle="modal" data-bs-target="#olivermodal" href="#">About me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Cooper Modal --}}
        <div class="modal" id="coopermodal" tabindex="-1">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cooper</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Meet Cooper!</b>
                            <br><b>Breed:</b> Poodle
                            <br><b>Age:</b> 3 years
                            <br><b>Size:</b> Medium
                            <br><b>Coat:</b> Fluffy and curly
                            <br><b>Personality:</b><br> Cooper is a bundle of joy wrapped in a curly coat! He's a playful and affectionate poodle who loves nothing more than to cuddle up with his favorite humans. Cooper
                            enjoys
                            going
                            for walks and exploring the outdoors but is just as content lounging by your side indoors. He gets along well with other dogs and would make a great companion for a family looking for a loving
                            and loyal pet.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn close-modal" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn adopt-modal" type="button">Adopt Me 🥺</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Moji Modal --}}
        <div class="modal" id="mojimodal" tabindex="-1">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Moji</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <b>Meet Moji!</b>
                            <br><b>Breed:</b> Shih Tzu
                            <br><b>Age:</b> 4 years
                            <br><b>Size:</b> Small
                            <br><b>Coat:</b> Long and Flowing
                            <br><b>Personality:</b><br>Moji is a charming and lovable Shih Tzu with a fluffy white coat that's as soft as a cloud! He has a playful nature and enjoys chasing after toys and playing with his
                            human companions. Moji is also a cuddle bug and loves nothing more than curling up in your lap for some quality snuggle time. He gets along well with other dogs and would make a delightful
                            addition to any family looking for a small, affectionate companion.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn close-modal" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn adopt-modal" type="button">Adopt Me 🥺</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tom Modal --}}
        <div class="modal" id="tommodal" tabindex="-1">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tom</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <b>Meet Tom!</b>
                            <br><b>Breed:</b> Shih Tzu
                            <br><b>Age:</b> 4 years
                            <br><b>Size:</b> Small
                            <br><b>Coat:</b> Long and silky
                            <br><b>Personality:</b><br>Tom is a charming and affectionate Shih Tzu with a heart as big as his fluffy coat! He loves to be around people and is always eager to make new friends.
                            Tom enjoys going for leisurely walks and exploring his surroundings, but he's also content to cuddle up on the couch with his favorite humans. He gets along well with other dogs and would make a
                            wonderful companion for a family looking for a loving and loyal pet.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn close-modal" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn adopt-modal" type="button">Adopt Me 🥺</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Luna Modal --}}
        <div class="modal" id="lunamodal" tabindex="-1">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Luna</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><b> Meet Luna!</b>
                            <br><b>Breed:</b> Siamese
                            <br><b>Age:</b> 2 years
                            <br><b>Size:</b> Small
                            <br><b>Coat:</b> Short
                            <br><b>Personality:</b><br> Luna is a beautiful Siamese cat with striking blue eyes and a sweet disposition. She is affectionate and loves to be the center of attention. Luna enjoys playing with
                            toys and is known for her vocal nature, often "talking" to her human companions. She is looking for a home where she can receive lots of love and attention.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn close-modal" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn adopt-modal" type="button">Adopt Me 🥺</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Leo Modal --}}
        <div class="modal" id="leomodal" tabindex="-1">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Leo</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><b> Meet Leo!</b>
                            <br><b>Breed:</b> Domestic Shorthair
                            <br><b>Age:</b> 4 months
                            <br><b>Size:</b> Small
                            <br><b>Coat:</b> Short
                            <br><b>Personality:</b><br> Leo is an adorable orange tabby kitten full of curiosity and energy! He loves to play with toys, especially ones that jingle or crinkle. Leo is also very affectionate
                            and
                            enjoys
                            snuggling up in cozy spots for a nap. He's a social kitten who gets along well with people of all ages and is sure to bring lots of joy and laughter to his new home.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn close-modal" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn adopt-modal" type="button">Adopt Me 🥺</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Oliver Modal --}}
        <div class="modal" id="olivermodal" tabindex="-1">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Oliver</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><b> Meet Oliver!</b>
                            <br><b>Breed:</b> Maine Coon
                            <br><b>Age:</b> 3 years
                            <br><b>Size:</b> Medium
                            <br><b>Coat:</b> Long and fluffy
                            <br><b>Personality:</b><br> Oliver is a majestic Maine Coon with a playful and friendly personality. He enjoys exploring his surroundings and is known for his intelligence and gentle nature.
                            Oliver gets along well with children and other pets, making him an ideal companion for a family looking for a loving cat with a big heart.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn close-modal" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn adopt-modal" type="button">Adopt Me 🥺</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
