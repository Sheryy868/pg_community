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
                    <ul class="list-unstyled mb-4">
                        <li class="hero-description">Use our <span>Data Driven</span></li>
                        <li class="hero-description">
                            insights to match your
                            <span>skill</span>,
                        </li>
                        <li class="hero-description"><span>language</span> and <span>play
                                style</span> now!</li>
                    </ul>
                    <a href="#" class="btn btn-outline-dark mt-4">JOIN OUR DISCORD</a>
                </div>
            </div>
        </div>
    </section>
    <!-- main1 Section -->
    <section class="main-section d-flex align-items-center">
        <div class="container-lg d-flex flex-column align-items-center">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('frontend/images/image1.png') }}" class="img-fluid" alt="Hero Image" />
                </div>
                <div class="col-md-6 mt-4">
                    <h2>FIND <span>YOUR</span> COMMUNITY</h2>
                    <ul>
                        <li><span>10,000</span> of the world's best PUBG players</li>
                        <li><span>200+</span> skilled squads per day</li>
                        <li><span>100+</span> professional PUBG Gamers</li>
                        <li><span>20+</span> Open Community Tier Tournaments</li>
                        <li>NOW! Expanding to <span>new</span> Esports Titles</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- main2 Section -->
    <section class="main-section d-flex align-items-center">
        <div class="container-lg d-flex flex-column align-items-center">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h2>THE WORLD’S <span>BEST</span> PLAYERS</h2>
                    <p class="main-description mb-4">
                        The <span> top 1%</span> players never match in-game. They use curated tools or form teams in
                        advance. This
                        took days before we brought it down to <span>5 minutes</span>.
                    </p>
                    <a href="#" class="btn btn-outline-dark mt-4 mb-4">JOIN THE COMMUNITY</a>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('frontend/images/image 4.png') }}" class="img-fluid" alt="Hero Image" />
                </div>
            </div>
        </div>
    </section>
    <!-- main3 Section -->
    <section class="main-section d-flex align-items-center">
        <div class="container-lg d-flex flex-column align-items-center">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('frontend/images/image 5.png') }}" class="img-fluid" alt="Hero Image" />
                </div>
                <div class="col-md-6 mt-4">
                    <h2>THE HIGHEST <span>PERFORMANCE</span> ENVIRONMENT</h2>
                    <p class="main-description mb-4">
                        The fastest way to drive your skills is to find <span>stronger</span> players, in a community
                        focused on
                        performance, that listens and exchanges effective <span>feedback</span>, and eliminates toxic
                        friction and
                        distracting behavior. The focus is building your competitive <span>resume</span>, and upskilling
                        your teammates
                        and community. Summon your <span>beast mode</span>!
                    </p>
                    <a href="#" class="btn btn-outline-dark mt-4">JOIN THE COMMUNITY</a>
                </div>

            </div>
        </div>
    </section>
    <!-- main3 Section -->
    <section class="main-section d-flex align-items-center">
        <div class="container-lg d-flex flex-column align-items-center">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 mb-4">
                    <h2>THE DEVIL IN THE <span>DETAIL</span>!</h2>
                    <p class="main-description mb-4">
                        Unlocking performance requires <span>aligning</span> every tumbler in the lock. Plausible solves the
                        details so
                        you can <span>focus</span> on your game.
                    </p>
                    <p class="main-description mb-4">
                        Match your <span>Language</span>, <span>Playstyle</span>, <span>Region</span>, <span>Game</span>,
                        Accurate <span>skill</span>
                        data, and <span>Time</span> preferences.
                    </p>
                    <p class="main-description mb-4">
                        This is your <span>hack</span> around days of waiting, 37 opens windows, and playing with randoms.
                    </p>
                    <a href="#" class="btn btn-outline-dark mt-4">JOIN THE COMMUNITY</a>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('frontend/images/image.png') }}" class="img-fluid" alt="Hero Image" />
                </div>
            </div>
        </div>
    </section>
    <!-- main4 Section -->
    <section class="main-section main4-section d-flex align-items-center">
        <div class="container-lg d-flex flex-column align-items-center">
            <div class="row d-flex align-items-center text-center text-md-left">
                <div class="col-md-6 d-flex flex-column align-items-center mb-4 mb-md-0">
                    <a href="https://discord.com/invite/plausible">
                        <span class="special-link mt-2" style="text-decoration: underline;">discord.gg/plausible</span>
                    </a>
                    <span class="special-link mt-2">
                        Connect accounts
                    </span><br>
                    <span class="special-link mt-2">“/”</span>
                </div>

                <div class="col-md-6">
                    <h2 class="text-uppercase">HOW IT <span>WORKS</span>!</h2>
                    <p class="main-description mb-4">
                        Join <a href="https://discord.com/invite/plausible"><span
                                style="text-decoration: underline;">discord.gg/plausible</span> </a> world’s
                        <span>strongest</span> players in an environment focused on learning and building skills.
                    </p>
                    <p class="main-description mb-4">
                        <span>Connect</span> your in-game accounts to your Discord account to ensure teams have
                        <span>validated</span> player information.
                    </p>
                    <p class="main-description mb-4">
                        Forward slash <span>“/”</span>— and the App provides everything you need to <span>launch</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="about-section d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <h2 class="about-title mb-4">ABOUT</h2>
            <p class="about-description mb-4">
                Plausible Gaming is a <span>community</span> of passionate gamers on a shared mission.
            </p>
            <p class="about-description mb-4">
                If you're <span>serious</span> about improving your skills, connecting with like-minded
                gamers, and thriving in a supportive, competitive environment, you're in the right place.
            </p>
            <p class="about-description mb-4">
                Plausible Gaming is the global <span>leader</span> in providing 'Looking for Group' (LFG)
                services for hardcore gamers. Whether you're a seasoned pro or an aspiring competitor, our community is
                built to find players that <span>match</span> your skill level, playstyle, language, and
                region.
            </p>
            <p class="about-description mb-4">
                Ready to <span>find</span> your dream team, compete at the <span>highest</span> level, and have a say in the
                <span>future</span> of
                esports?
            </p>
            <p class="about-description mb-4">
                Sign up for <span>FREE</span> and launch your competitive journey today!
            </p>
            <a href="#" class="btn btn-outline-dark mt-4">JOIN THE COMMUNITY</a>
        </div>
    </section>
@endsection
