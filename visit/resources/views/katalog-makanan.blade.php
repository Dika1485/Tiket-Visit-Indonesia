<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Visit Indonesia - Bantuan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="css/main1.css" rel="stylesheet" />

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
                        <li><a href="index">Beranda</a></li>
                        <li><a href="katalog-wisata" class="active">Katalog</a></li>
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
                        <li><a href="index">Beranda</a></li>
                        <li><a href="katalog-wisata" class="active">Katalog</a></li>
                        <li><a href="bantuan">Bantuan</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ Auth::user()->email }}</a>
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
    <section id="hero" class="hero2">
        <div class="black-bg"></div>
        <div class="grey-bg">
            <h2 id="judul-halaman" class="text-white" align="center">
                Katalog
            </h2>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Section Katalog -->
    <div class="row white-bg">
        <div class="row g-2">
            <div class="col col-3">
                <div class="box-fitur" style="transform: rotate(0)">
                    <div class="row">
                        <div class="col col-lg-2" style="padding: 0px; text-align: center">
                            <i class="bi bi-strava"></i>
                        </div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px">Destinasi</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px; text-align: center">
                            {{ $iw }}
                        </div>
                        <a href="katalog-wisata" class="stretched-link"></a>
                    </div>
                </div>
                <div class="box-fitur" style="transform: rotate(0)">
                    <div class="row">
                        <div class="col col-lg-2" style="padding: 0px; text-align: center">
                            <i class="bi bi-box2-fill"></i>
                        </div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px">Produk</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px; text-align: center">
                            {{ $ip }}
                        </div>
                        <a href="katalog-produk" class="stretched-link"></a>
                    </div>
                </div>
                <div class="box-fitur-active">
                    <div class="row" style="transform: rotate(0)">
                        <div class="col col-lg-2" style="padding: 0px; text-align: center">
                            <i class="fas fa-drumstick-bite"></i>
                        </div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px">Makanan</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px; text-align: center">
                            {{ $im }}
                        </div>
                        <a href="katalog-makanan" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="vr"
                    style="
                            width: 2px;
                            height: 100%;
                            color: black;
                            margin: 12px 12px 0px 20px;
                        ">
                </div>
            </div>
            {{-- Box katalog --}}
            <div class="col d-flex">
                <div class="container px-6 text-center">
                    <div class="row gx-5 mb-3">
                        {{-- persatu awal --}}
                        @forelse ($makanans as $makanan)
                            <div class="col ">
                                <div class="box-katalog"
                                    style="background-image: url('img/curug.jpg'); background-size: cover;">
                                    <div class="row">
                                        <div class="col" align="left">
                                            <i class="bi bi-star-fill"style="color: yellow;"><span
                                                    style="color: white; font-weight: bold;">4.5/5</span></i>
                                        </div>
                                        <div class="col" align="right">
                                            <i class="bi bi-heart fa-lg" style="color: white;"></i>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 88px;">
                                        <div class="col" style="margin: auto;" align="left">
                                            <h4 style="color: white;">{{ $makanan->nama }}</h4>
                                            <h5 style="color: white;">{{ $makanan->harga }}</h5>
                                        </div>
                                        <div class="col" style="margin: auto;" align="right">
                                            <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                data-bs-target="#beli{{ $makanan->id }}">Beli</button>
                                        </div>
                                    </div>
                                    <!-- Modal Beli -->
                                    <div class="modal" id="beli{{ $makanan->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="margin-left: 16px;">
                                                        {{ $makanan->nama }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="padding: 12px;margin-bottom: 20px;">
                                                    <div class="row" style="height:100%;margin-top: 20px;">
                                                        <div class="col col-lg-5 align-middle" style="margin: auto;">
                                                            <!-- Carousel wrapper -->
                                                            <div id="carouselBasicExample"
                                                                class="carousel slide carousel-fade"
                                                                data-bs-ride="carousel">
                                                                <!-- Indicators -->
                                                                <div class="carousel-indicators">
                                                                    <button type="button"
                                                                        data-bs-target="#carouselBasicExample"
                                                                        data-bs-slide-to="0" class="active"
                                                                        aria-current="true"
                                                                        aria-label="Slide 1"></button>
                                                                    <button type="button"
                                                                        data-bs-target="#carouselBasicExample"
                                                                        data-bs-slide-to="1"
                                                                        aria-label="Slide 2"></button>
                                                                    <button type="button"
                                                                        data-bs-target="#carouselBasicExample"
                                                                        data-bs-slide-to="2"
                                                                        aria-label="Slide 3"></button>
                                                                </div>

                                                                <!-- Inner -->
                                                                <div class="carousel-inner" style="padding: 0;">
                                                                    <!-- Single item -->
                                                                    <div class="carousel-item active">
                                                                        <img src="img/goa-lawa.jpg"
                                                                            class="d-block w-100"
                                                                            alt="Sunset Over the City" />
                                                                    </div>

                                                                    <!-- Single item -->
                                                                    <div class="carousel-item">
                                                                        <img src="img/hero-bg.png"
                                                                            class="d-block w-100"
                                                                            alt="Canyon at Nigh" />
                                                                    </div>

                                                                    <!-- Single item -->
                                                                    <div class="carousel-item">
                                                                        <img src="img/sate-blater.jpg"
                                                                            class="d-block w-100"
                                                                            alt="Cliff Above a Stormy Sea" />
                                                                    </div>
                                                                </div>
                                                                <!-- Inner -->

                                                                <!-- Controls -->
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselBasicExample"
                                                                    data-bs-slide="prev" style="margin: 0px;">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselBasicExample"
                                                                    data-bs-slide="next" style="margin: 0px;">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <!-- Carousel wrapper -->
                                                            <!-- <img src="img/curug.jpg" alt="" style="border-radius: 12px;"> -->
                                                        </div>
                                                        <div class="col" style="margin: auto;">
                                                            <div class="row">
                                                                <b>Deskripsi</b>
                                                            </div>
                                                            <div class="row row-lg-6 overflow-auto"
                                                                style="height: 200px;text-align: justify;margin-bottom: 5px;">

                                                                <p>{{ $makanan->desc }}</p>
                                                            </div>
                                                            <div class="row" style="vertical-align: middle;">
                                                                <form>
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="left" colspan="2">
                                                                                    {{ "Harga : Rp $makanan->harga" . '/tiket' }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle"
                                                                                    style="width: 130px;"><input
                                                                                        type="date" value=""
                                                                                        style="width: 130px; height: 40px;"
                                                                                        name="tanggal">
                                                                                </td>
                                                                                <td class="align-middle"
                                                                                    style="width: 0px;">
                                                                                    Tiket: </td>
                                                                                <td class="align-middle"
                                                                                    style="width: 100px;">
                                                                                    <select name="jumlah_tiket"
                                                                                        id="jumlah_tiket">
                                                                                        <option value="1">1
                                                                                        </option>
                                                                                        <option value="2">2
                                                                                        </option>
                                                                                        <option value="3">3
                                                                                        </option>
                                                                                        <option value="4">4
                                                                                        </option>
                                                                                        <option value="5">5
                                                                                        </option>
                                                                                        <option value="6">6
                                                                                        </option>
                                                                                        <option value="7">7
                                                                                        </option>
                                                                                        <option value="8">8
                                                                                        </option>
                                                                                        <option value="9">9
                                                                                        </option>
                                                                                        <option value="10">10
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                                <td class="align-middle"> <button
                                                                                        class="btn btn-primary beli"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#beli"
                                                                                        type="submit"
                                                                                        style="width: 100%">Beli</button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Beli -->
                                </div>
                            </div>
                        @empty
                        @endforelse
                        {{-- End Perulangan --}}

                    </div>
                </div>

            </div>
            {{-- End Box Katalog --}}
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index" class="logo d-flex align-items-center">
                            <span>Carent</span>
                        </a>
                        <p>
                            Carent adalah platform perentalan mobil yang
                            beroperasi di Purbalingga. Kenyamanan pelanggan
                            juga merupakan kenyamanan kami.
                        </p>
                    </div>

                    <div class="col-lg-2 col-6 footer-links"></div>
                    <div class="col-lg-3 col-6 footer-links">
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Phone:</strong> +62 938 9283 3212<br />
                            <strong>Email:</strong> carent@gmail.com<br />
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                        <h4>Address</h4>
                        <p>
                            Kalimanah, Purbalingga <br />
                            Jawa Tengah 53371<br />
                            Indonesia<br /><br />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Carent2022</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Vendor JS Files -->
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
</body>

<>
