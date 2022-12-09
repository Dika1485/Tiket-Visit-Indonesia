<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Bantuan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('css/main1.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">

        <!-- Guest Navbar -->
        @guest
            <div class="container-fluid d-flex  justify-content-between"
                style="margin-left: 40px;margin-right:40px;width:100%;padding: 0;">
                <a href="index" class="logo d-flex align-items-center">
                    <h3 class="textlg">Visit </h3>
                    <h3 class="textlg2"> &nbsp;Indonesia </h3>
                </a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="index" class="active">Beranda</a></li>
                        <li><a href="katalog">Katalog</a></li>
                        <li><a href="bantuan">Bantuan</a></li>
                        <li><a class="get-a-quote text-medium text-bold" href="" data-bs-target="#login"
                                data-bs-toggle="modal">Login</a></li>
                    </ul>
                </nav>
            </div>
        @endguest
        <!-- End Guest Navbar -->

        <!-- Navbar If Login -->
        @auth
            <div class="container-fluid d-flex  justify-content-between"
                style="margin-left: 40px;margin-right:40px;width:100%;padding: 0;">
                <a href="index" class="logo d-flex align-items-center">
                    <h3 class="textlg">Visit &nbsp; </h3>
                    <h3 class="textlg2">Indonesia </h3>
                </a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="index" class="active">Beranda</a></li>
                        <li><a href="katalog-wisata">Katalog</a></li>
                        <li><a href="bantuan">Bantuan</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ Auth::user()->username }}</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-black" href="notifikasi">Notifikasi</a>
                                <a class="dropdown-item text-black" href="pesanan">Pesanan Saya</a>
                                <a class="dropdown-item text-black" href="favorit">Favorit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        @endauth
        <!-- End Navbar if Login -->

    </header>
    <!-- End Header -->

    <!-- Login -->
    <!-- Login Modal -->
    <div class="modal" tabindex="-1" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="margin: auto;">
                    <h1 align="center" class="text-bold">Login</h1>
                    {{-- <form action="" method="post" align="center">
                        <input type="text" id="username" name="username" placeholder="Username"><br><br>
                        <input type="password" id="password" name="password" placeholder="Password"><br><br>
                        <p>Belum memiliki akun? <a href="#register" data-bs-toggle="modal"
                                data-bs-target="#register">Daftar sekarang!</a></p>
                        <button type="submit" class="get-a-quote login-register text-bold text-medium">Login</button>
                    </form> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <p>Belum memiliki akun? <a href="#register" data-bs-toggle="modal"
                                    data-bs-target="#register">Daftar sekarang!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End Modal -->

    <!-- Register -->
    <!-- Register Modal -->
    <div class="modal" tabindex="-1" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="margin: auto;">
                    {{-- <form action="" method="post" align="center">
                        <h1 align="center">Register</h1>
                        <input type="text" id="username" name="username" placeholder="Username"><br><br>
                        <input type="password" id="password" name="password" placeholder="Password"><i
                            class="bi bi-eye-slash" id="togglePassword"></i><br><br>
                        <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
                        <input type="text" id="nama_lkp" name="nama_lkp" placeholder="Nama Lengkap"><br><br>
                        <script>
                            const togglePassword = document
                                .querySelector('#togglePassword');

                            const password = document.querySelector('#password');

                            togglePassword.addEventListener('click', () => {

                                // Toggle the type attribute using
                                // getAttribure() method
                                const type = password
                                    .getAttribute('type') === 'password' ?
                                    'text' : 'password';

                                password.setAttribute('type', type);

                                // Toggle the eye and bi-eye icon
                                this.classList.toggle('bi-eye');
                            });
                        </script>

                        <p>Sudah memiliki akun? <a href="#register" data-bs-toggle="modal"
                                data-bs-target="#register">Login sekarang!</a></p>
                        <button type="submit"
                            class="get-a-quote login-register text-bold text-medium">Register</button>
                    </form> --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username"
                                class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="nama" type="text"
                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir"
                                class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required
                                    autocomplete="tanggal_lahir" autofocus>

                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="provinsi"
                                class="col-md-4 col-form-label text-md-end">{{ __('Provinsi') }}</label>

                            <div class="col-md-6">
                                <input id="provinsi" type="text"
                                    class="form-control @error('provinsi') is-invalid @enderror" name="provinsi"
                                    value="{{ old('provinsi') }}" required autocomplete="provinsi" autofocus>

                                @error('provinsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kota"
                                class="col-md-4 col-form-label text-md-end">{{ __('Kota') }}</label>

                            <div class="col-md-6">
                                <input id="kota" type="text"
                                    class="form-control @error('kota') is-invalid @enderror" name="kota"
                                    value="{{ old('kota') }}" required autocomplete="kota" autofocus>

                                @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan"
                                class="col-md-4 col-form-label text-md-end">{{ __('Kecamatan') }}</label>

                            <div class="col-md-6">
                                <input id="kecamatan" type="text"
                                    class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan"
                                    value="{{ old('kecamatan') }}" autocomplete="kecamatan" autofocus>

                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="desa"
                                class="col-md-4 col-form-label text-md-end">{{ __('Desa/Kelurahan') }}</label>

                            <div class="col-md-6">
                                <input id="desa" type="text"
                                    class="form-control @error('desa') is-invalid @enderror" name="desa"
                                    value="{{ old('desa') }}" required autocomplete="desa" autofocus>

                                @error('desa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jalan"
                                class="col-md-4 col-form-label text-md-end">{{ __('Jalan') }}</label>

                            <div class="col-md-6">
                                <input id="jalan" type="text"
                                    class="form-control @error('jalan') is-invalid @enderror" name="jalan"
                                    value="{{ old('jalan') }}" required autocomplete="jalan" autofocus>

                                @error('jalan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End Modal -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Holiday Every Weekend Happiness Never End</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Nikmati rekreasi bersama orang favoritmu, dan buatlah
                        memori di Purbalingga!</p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control"
                            placeholder="Cari destinasi menarik di sekitar anda">
                        <button type="submit" class="btn btn-primary" style="width: 20%;">Search</button>
                    </form>
                </div>


                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="img/multiple.png" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">
        <section class="services">
            <!-- ======= Fitur Section ======= -->

            <div class="icon-boxes position-relative">
                <div class="row gy-2 mt-5" style="width: 80%; margin:auto">
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-strava"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Destinasi</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-box2-fill"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Produk</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->
                    <div class="col" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-drumstick-bite"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Makanan</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->
                </div>
            </div>
            <!-- End Fitur Section -->

            <!-- Gallery Section -->
            <div class="section-header">
                <span>Paling dicari</span>
                <h2>Paling dicari</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="img/goa-lawa.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="img/curug.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="img/sate-blater.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="img/knalpot.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="img/sate-blater.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="img/curug.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="img/knalpot.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="img/curug.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="img/knalpot.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#carouselExampleControls" type="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselExampleControls" type="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>


            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <span>Frequently Asked Questions</span>
                        <h2>Frequently Asked Questions</h2>

                    </div>

                    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-10">

                            <div class="accordion accordion-flush" id="faqlist">

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            Non consectetur a erat nam at lectus urna duis?
                                        </button>
                                    </h3>
                                    <div id="faq-content-1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor rhoncus dolor purus non.
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                        </button>
                                    </h3>
                                    <div id="faq-content-2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                        </button>
                                    </h3>
                                    <div id="faq-content-3" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                            nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                            convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                            morbi quis
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                        </button>
                                    </h3>
                                    <div id="faq-content-4" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                            <i class="bi bi-question-circle question-icon"></i>
                                            Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                        </button>
                                    </h3>
                                    <div id="faq-content-5" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                            suspendisse in est ante in. Nunc vel risus commodo viverra maecenas
                                            accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
                                            blandit turpis cursus in
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <h3 class="textlg">Visit </h3>
                    <h3 class="textlg2"> &nbsp;Indonesia </h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

<>
