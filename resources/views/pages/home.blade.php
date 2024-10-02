@extends('welcome') <!-- Extending the main layout -->
@section('head')
    <link href="{{ asset('frontend/css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="hero-title mb-4">FIND A SKILLED SQUAD IN <span>5 MINUTES!</span></h2>
                    <p class="hero-description mb-4">Use our <span>Data Driven</span> insights to match your
                        <span>skill</span>,<br>
                        <span>language</span>, and <span>play style</span> now!
                    </p>
                    <a href="#" class="btn btn-outline-dark mt-4">JOIN OUR DISCORD</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container-lg d-flex flex-column align-items-center" style="height: auto;">
        <div class="row w-100 mb-5">
            <div class="col-md-4 d-flex justify-content-center">
                <img src="{{ asset('frontend/images/image1.png') }}" class="img-fluid" alt="Hero Image" />
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center">
                <h2 class="hero-title mb-4">FIND <span>YOUR</span> COMMUNITY</h2>
                <p class="hero-description mb-4">10,000 of the world’s best PUBG players, 200+ skilled squads per day, 100+
                    professional PUBG Gamers, 20+ Open Community Tier Tournaments.</p>
                <p class="hero-description mb-4">NOW! Expanding to new Esports Titles.</p>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section d-flex align-items-center justify-content-center text-white">
        <div class="container text-center">
            <h2 class="about-title mb-4">About Us</h2>
            <p class="about-description mb-4">We are dedicated to delivering the best service to our customers, ensuring
                quality and excellence at every step.</p>
            <a href="#" class="btn btn-outline-light">Learn More</a>
        </div>
    </section>
@endsection
