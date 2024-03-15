@extends('masterlayout')
@section('content')
    <div class="container-xl mt-4 pt-4">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center mb-4 mb-lg-0">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ratione mollitia molestias placeat saepe nemo tempora sit neque quo totam magni, dolor consequuntur similique optio!
                Aliquid, temporibus. Itaque eveniet nostrum quae, enim ipsa sit laboriosam sapiente voluptatibus, iure nemo soluta quam a quasi earum non porro sed commodi dicta facere atque, corrupti
                reiciendis accusamus optio pariatur! Illum magni dolorum, quis suscipit fuga repudiandae officia veniam, dolores
                architecto, eligendi aut soluta nemo mollitia ex sint. Quidem provident aperiam nihil nesciunt, corrupti illum tenetur molestias sequi architecto. Soluta corrupti deleniti consequuntur,
                quas tempora optio ea voluptatem rerum id sapiente repudiandae commodi officiis.
            </div>
            <div class="col-lg-6">
                {{-- <img class="rounded" src="{{ asset('img/smallest-dog-breeds-toy-poodle.webp') }}" alt="doggo" style="width: 100%;"> --}}
                <div class="carousel slide mb-4 w-100" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-4" style="max-height: 400px">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/smallest-dog-breeds-toy-poodle.jpg') }}" alt="labradoodle" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item " data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/orangecat.jpg') }}" alt="orangecat" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="d-block w-100" src="{{ asset('img/brownishcat.webp') }}" alt="brownishcat" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/smallest-dog-breeds-toy-poodle.webp') }}" alt="labradoodle">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/orangecat.jpg') }}" alt="orangecat">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/brownishcat.webp') }}" alt="brownishcat">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
