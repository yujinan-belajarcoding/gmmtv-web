<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agency | {{ $title ?? 'Home' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
  </head>
  <body>
    <!-- Navbar Start-->
    <section class="bg-silver-cstm">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                <div class="col-md-3 mb-2 mb-md-0">
                  <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="/build/assets/img/gmmtv.jpg" alt="gmmtv" class="img-fluid" style="max-width: 120px; height: auto;">
                  </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 gap-3">
                  <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
                  <li><a href="#" class="nav-link px-2 link-secondary">Artist</a></li>
                  <li><a href="#" class="nav-link px-2 link-secondary">Schedule</a></li>
                  <li><a href="#" class="nav-link px-2 link-secondary">Event</a></li>
                  <li><a href="#" class="nav-link px-2 link-secondary">Shop</a></li>
                  <li><a href="#" class="nav-link px-2 link-secondary">Achivement</a></li>
                </ul>

                <div class="col-md-3 text-end">
                  <button type="button" class="btn border-0 text-primary btn-sm me-2">Login</button>
                  <button type="button" class="btn btn-primary btn-sm text-light">Sign-up</button>
                </div>
            </header>
        </div>
    </section>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero bg-silver-cstm">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                  <img src="/build/assets/img/hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="391" height="407" loading="lazy">
                </div>
                <div class="col-lg-6">
                  <h1 class="display-5 fw-bold text-grey-dark-cstm lh-1 mb-3">WELCOME TO GMMTV <p class="fw-bold text-success-cstm">Official Global Website</p></h1>
                  <p class="text-grey-cstm">Ready for something even more exciting?</p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary text-light px-4 me-md-2">Register</button>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Client Start -->
    <section class="client">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-grey-dark-cstm fw-semibold">Our Clients</h1>
                    <p class="text-grey-cstm">We have been working with some Fortune 500+ clients</p>
                </div>
                <div class="col-12">
                    <div class="row text-center mt-2">
                        @foreach($clients as $client)
                        <div class="col-4 col-md-2">
                            <img src="/build/assets/img/{{ basename($client['image']) }}" alt="{{ $client['name'] }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client End -->

    <!-- Manage Start -->
    <section class="manage">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-grey-dark-cstm fw-semibold text-center">Manage your entire community <br> in a single system</h1>
                    <p class="text-grey-cstm text-center">Who is Nextcent suitable for?</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        @foreach($features as $feature)
                        <div class="col-12 col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <img src="/build/assets/img/{{ basename($feature['icon']) }}" alt="feature" class="img-fluid bg-green-cstm rounded-3" width="48" height="48">
                                    <h5 class="text-grey-dark-cstm fw-semibold mt-3">{{ $feature['title'] }}</h5>
                                    <p class="text-grey-cstm">{{ $feature['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Manage End -->

    <!-- Learn Start -->
    <section class="learn">
        <div class="container">
            <div class="row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-5">
                  <img src="/build/assets/img/learn.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="391" height="407" loading="lazy">
                </div>
                <div class="col-lg-7">
                  <h5 class="display-5 fw-semibold text-grey-dark-cstm mb-3">The unseen of spending three years at Pixelgrade</h5>
                  <p class="text-grey-cstm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere obcaecati vel veniam, voluptate architecto animi nesciunt consectetur harum delectus expedita ad impedit molestiae repudiandae excepturi, culpa vero cum! Illum odio sunt soluta dicta atque! Facere?</p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary text-light px-4 me-md-2">Learn More</button>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Learn End -->

    <!-- Summary Start -->
    <section class="summary bg-silver-cstm">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5 class="display-5 fw-semibold text-grey-dark-cstm">Helping a local <br> <p class="fw-bold text-success-cstm">business reinvent it self</p></h5>
                    <p class="text-grey-cstm">We reached here with our hard work and dedication</p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-6 pb-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/build/assets/img/ic_green_1.png" alt="ic_green_1" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <h5 class="text-grey-dark-cstm fw-semibold">{{ number_format($totalMembers) }}</h5>
                                    <p class="text-grey-cstm">Members</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/build/assets/img/ic_green_2.png" alt="ic_green_2" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <h5 class="text-grey-dark-cstm fw-semibold">{{ number_format($totalClubs) }}</h5>
                                    <p class="text-grey-cstm">Clubs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/build/assets/img/ic_green_3.png" alt="ic_green_3" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <h5 class="text-grey-dark-cstm fw-semibold">{{ number_format($totalEvents) }}</h5>
                                    <p class="text-grey-cstm">Event Bookings</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/build/assets/img/ic_green_4.png" alt="ic_green_4" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <h5 class="text-grey-dark-cstm fw-semibold">{{ number_format($totalPayments) }}</h5>
                                    <p class="text-grey-cstm">Payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Summary End -->

    <!-- Learn 2 Start -->
    <section class="learn">
        <div class="container">
            <div class="row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-5">
                  <img src="/build/assets/img/learn2.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="391" height="407" loading="lazy">
                </div>
                <div class="col-lg-7">
                  <h5 class="display-5 fw-semibold text-grey-dark-cstm mb-3">How to design your site footer like we did</h5>
                  <p class="text-grey-cstm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea necessitatibus repudiandae et dicta at, cum doloribus officia id sed, veritatis velit in dolorum non recusandae similique adipisci beatae iure quidem officiis optio magni libero! Perspiciatis officiis non eaque perferendis doloribus.</p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary text-light px-4 me-md-2">Learn More</button>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Learn 2 End -->

    <!-- Get Start -->
    <section class="get bg-silver-cstm">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1>Make your business <br> great and growth.</h1>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary text-light">Get a Demo <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- Get End -->

    <!-- Footer Start -->
    <section class="footer bg-netral-black-cstm">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 text-light">
                <div class="col mb-3">
                  <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img src="/build/assets/img/gmmtv.jpg" alt="gmmtv" class="img-fluid" style="max-width: 120px; height: auto;">
                  </a>
                  <p class="text-black">Copyright GMMTV © 2026</p>
                  <div class="row">
                        <div class="col-2">
                            <i class="bi bi-instagram bg-secondary rounded-5 p-1"></i>
                        </div>
                        <div class="col-2">
                            <i class="bi bi-facebook bg-secondary rounded-5 p-1"></i>
                        </div>
                        <div class="col-2">
                            <i class="bi bi-twitter bg-secondary rounded-5 p-1"></i>
                        </div>
                  </div>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col-12 mb-3">
                  <h5 class="text-black">Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Artist</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Schedule</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Shop</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">About</a></li>
                  </ul>
                </div>

                <div class="col mb-3">
                  <h5 class="text-success-cstm"></h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">About</a></li>
                  </ul>
                </div>

                <div class="col mb-3">
                  <h5 class="text-success-cstm">Section</h5>
                  <div class="input-group">
                    <input type="search" class="form-control" placeholder="Your email..." aria-label="Search">
                    <span class="input-group-text">
                      <i class="bi bi-send"></i>
                    </span>
                  </div>
                </div>
            </footer>
        </div>
    </section>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
