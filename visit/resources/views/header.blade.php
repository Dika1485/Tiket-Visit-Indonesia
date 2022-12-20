<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">

    <!-- Guest Navbar -->
    @guest
        <div class="container-fluid d-flex  justify-content-between navmargin" style="width:100%;padding: 0;">
            <a href="index" class="logo d-flex align-items-center">
                <h3 class="textlg">Visit </h3>
                <h3 class="textlg2"> &nbsp;Indonesia </h3>
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index" class="active">Beranda</a></li>
                    <li><a href="katalog-wisata" class="active">Katalog</a></li>
                    <li><a class="get-a-quote text-medium text-bold" href="" data-bs-target="#login"
                            data-bs-toggle="modal">Login</a></li>
                </ul>
            </nav>
        </div>
    @endguest
    <!-- End Guest Navbar -->

    <!-- Navbar If Login -->
    @auth

        <div class="container-fluid d-flex justify-content-between navmargin" style="width:100%;padding: 0;">
            <a href="index" class="logo d-flex align-items-center">
                <h3 class="textlg">Visit &nbsp; </h3>
                <h3 class="textlg2">Indonesia </h3>
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index" class="active">Beranda</a></li>
                    <li><a href="katalog-wisata" class="active">Katalog</a></li>
                    <li><a href="bantuan" class="active">Bantuan</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">{{ Auth::user()->email }}</a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item text-black" href="profil">Profil</a>
                            <a class="dropdown-item text-black" href="pesanan">Pesanan Saya</a>
                            @if (Auth::user()->ispenjual)
                                <a class="dropdown-item text-black" href="daftartransaksi">Daftar Transaksi</a>
                                <a class="dropdown-item text-black" href="viewmenu">Menu Saya</a>
                            @endif
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

<div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin: auto; width: 90%;">
                <h1 align="center" class="text-bold" style="margin-bottom: 12px;">Login</h1>
                {{-- <form action="" method="post" align="center">
                <input type="text" id="username" name="username" placeholder="Username"><br><br>
                <input type="password" id="password" name="password" placeholder="Password"><br><br>
                <p>Belum memiliki akun? <a href="#register" data-bs-toggle="modal"
                        data-bs-target="#register" data-bs-dismiss="modal">Daftar sekarang!</a></p>
                <button type="submit" class="get-a-quote login-register text-bold text-medium">Login</button>
            </form> --}}
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-4">{{ __('Username') }}</label>

                        <div class="col">
                            <input id="email" type="text"
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
                        <label for="password" class="col-md-4">{{ __('Password') }}</label>

                        <div class="col">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <p>Belum memiliki akun? <a href="#register" data-bs-toggle="modal"
                                        data-bs-target="#register">Daftar sekarang!</a></p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="login-register">
                        {{ __('Login') }}
                    </button>

                    <!-- @if (Route::has('password.request'))
<a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
@endif -->

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login End Modal -->

<!-- Register -->
<!-- Register Modal -->

<div class="modal fade" id="register">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin: 20px auto;">
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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 align="center" class="text-bold" style="margin-bottom: 12px;">Register</h1>
                    <div class="row mb-3">
                        <label for="username"
                            class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                        <div class="col">
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

                        <div class="col">
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

                        <div class="col">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

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

                        <div class="col">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Lengkap</label>

                        <div class="col">
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

                        <div class="col">
                            <input id="tanggal_lahir" type="date"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

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

                        <div class="col">
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
                        <label for="kota" class="col-md-4 col-form-label text-md-end">{{ __('Kota') }}</label>

                        <div class="col">
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

                        <div class="col">
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

                        <div class="col">
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
                        <label for="jalan" class="col-md-4 col-form-label text-md-end">{{ __('Jalan') }}</label>

                        <div class="col">
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
                    <div class="row mb-3">
                        <p>Sudah memiliki akun? <a href="#login" data-bs-target="#login"
                                data-bs-toggle="modal">Login sekarang!</a></p>
                    </div>


                    <div class="row mb-0">
                        <div class="col">
                            <button type="submit" class="login-register">
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
