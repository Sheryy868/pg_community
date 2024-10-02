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
                    <h2 class="hero-title">FIND A SKILLED SQUAD IN 5 MINUTES!</h2>
                    <p class="hero-description">Use our Data Driven insights to match your skill, language, and play style
                        now!</p>
                    <a href="#" class="btn btn-outline-dark mt-4">JOIN OUR DISCORD</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container my-5">
        <h2>About Us</h2>
        <p>Some content about your website...</p>
    </div>
@endsection
