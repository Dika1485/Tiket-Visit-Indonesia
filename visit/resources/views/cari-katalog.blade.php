<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Katalog</title>
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/main1.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    @if (isset($snapToken))
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ env('CLIENT_KEY') }}"></script>
        <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
        <script src="https://code.jquery.com/jquery-3.6.2.min.js"
            integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    @endif
</head>

<body>

    @include('header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero2">
        <div class="black-bg">
        </div>
        <div class="grey-bg">
            <h2 id="judul-halaman" class="text-white" align="center">Katalog</h2>
        </div>

    </section><!-- End Hero Section -->

    <!-- Section Katalog -->
    <div class="row white-bg">
        <div class="row g-2">
            <div class="col col-3 katalog-list">
                <div class="box-fitur" style="transform: rotate(0);">
                    <div class="row">
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;"><i class="bi bi-strava"></i>
                        </div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px;">Wisata</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;">{{ $iw }}</div>

                    </div>
                </div>
                <div class="box-fitur" style="transform: rotate(0);">
                    <div class="row">
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;"><i
                                class="bi bi-box2-fill"></i></div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px;">Produk</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;">{{ $ip }}</div>

                    </div>
                </div>
                <div class="box-fitur">
                    <div class="row" style="transform: rotate(0);">
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;"><i
                                class="fas fa-drumstick-bite"></i></div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px;">Makanan</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;">{{ $im }}</div>

                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="vr" style="width:2px ;height: 100%;color: black;margin: 12px 12px 0px 20px;">
                </div>
            </div>
            @php
                // dd($wisatas);
                // dd($produks);
                // dd($makanans);
            @endphp
            {{-- Box katalog --}}
            <div class="row d-flex">
                <div class="container px-6 text-center">
                    <div class="row gx-5 mb-3">
                        {{-- persatu awal --}}
                        @for ($i = 0; $i < $wisatas->count();)
                            @php
                                
                                $j = $i + 1;
                                $wisata = $wisatas[$i];
                                
                            @endphp
                            <div class="col katalog-content">
                                <div class="box-katalog"
                                    style="background-image: url('images/{{ $wisata->thumbnail }}'); background-size: cover;">
                                    <div class="row" style="margin-top: 120px;">
                                        <div class="col" style="margin: auto;" align="left">
                                            <h4 style="color: white;">{{ $wisata->nama }}</h4>
                                            <h5 style="color: white;">{{ $wisata->harga }}</h5>
                                        </div>
                                        <div class="col" style="margin: auto;" align="right">

                                            @auth
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#beli{{ $wisata->menu_id }}">Beli</button>
                                            @endauth
                                            @guest
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#login">Beli</button>
                                            @endguest
                                        </div>
                                    </div>
                                    <!-- Modal Beli -->

                                    <div class="modal" id="beli{{ $wisata->menu_id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="margin-left: 16px;">
                                                        {{ $wisata->nama }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body overflow-auto"
                                                    style="padding: 12px;margin-bottom: 20px;">
                                                    <div class="row" style="height:100%;margin-top: 20px;">
                                                        <div class="col col-lg-5 align-middle" style="margin: auto;">
                                                            <!-- Carousel wrapper -->
                                                            <div id="carouselBasicExample{{ $i }}"
                                                                class="carousel slide carousel-fade"
                                                                {{-- data-bs-ride="carousel" --}}>
                                                                <!-- Inner -->
                                                                <div class="carousel-inner" style="padding: 0;">
                                                                    <!-- Single item -->
                                                                    @php
                                                                        $ext = pathinfo($wisata->namefile, PATHINFO_EXTENSION);
                                                                        
                                                                    @endphp

                                                                    <div class="carousel-item active">
                                                                        @if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
                                                                            <img src="images/{{ $wisata->namefile }}"
                                                                                class="d-block w-100" alt=""
                                                                                style="width: 200px; height:200px;object-fit:cover;" />
                                                                        @endif
                                                                        @if ($ext == 'mp4' || $ext == 'gif' || $ext == 'mkv')
                                                                            <video
                                                                                src="images/{{ $wisata->namefile }}"
                                                                                controls class="d-block w-100"
                                                                                alt=""
                                                                                style="object-fit:cover;">
                                                                            </video>
                                                                        @endif

                                                                    </div>
                                                                    @if ($wisata->menu_id != null)
                                                                        @for (; $j < $wisatas->count(); $j++)
                                                                            @php
                                                                                if ($wisatas[$j]->menu_id != $wisata->menu_id) {
                                                                                    break;
                                                                                }
                                                                                
                                                                            @endphp
                                                                            @php
                                                                                $ext = pathinfo($wisatas[$j]->namefile, PATHINFO_EXTENSION);
                                                                                
                                                                            @endphp
                                                                            @if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
                                                                                <div class="carousel-item">

                                                                                    <img src="images/{{ $wisatas[$j]->namefile }}"
                                                                                        class="d-block w-100"
                                                                                        alt=""
                                                                                        style="width: 200px; height:200px;object-fit:cover;" />
                                                                                </div>
                                                                            @endif
                                                                            @if ($ext == 'mp4' || $ext == 'gif' || $ext == 'mkv')
                                                                                <div class="carousel-item">
                                                                                    <video
                                                                                        src="images/{{ $wisatas[$j]->namefile }}"
                                                                                        controls class="d-block w-100"
                                                                                        alt=""
                                                                                        style="object-fit:cover;">
                                                                                    </video>
                                                                                </div>
                                                                            @endif
                                                                        @endfor
                                                                    @endif
                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselBasicExample{{ $i }}"
                                                                    data-bs-slide="prev" style="margin: 0px;">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselBasicExample{{ $i }}"
                                                                    data-bs-slide="next" style="margin: 0px;">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <!-- Carousel wrapper -->
                                                            <!-- <img src="assets/img/curug.jpg" alt="" style="border-radius: 12px;"> -->
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <b>Deskripsi</b>
                                                        </div>
                                                        <div class="row row-lg-6"
                                                            style="height: 70px;text-align: justify;margin-bottom: 5px;">

                                                            <p>{!! $wisata->desc !!}</p>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="row">
                                                    <div class="col" style="margin: auto;">

                                                        <div class="row" style="vertical-align: middle;">
                                                            <form method="POST" action="{{ url('/belikatalog') }}">
                                                                @csrf
                                                                @auth
                                                                    <input type="hidden" name="id_beli"
                                                                        value="{{ $wisata->menu_id }}">
                                                                    <input type="hidden" name="kategori" value="a">
                                                                    <input type="hidden" name="user"
                                                                        value="{{ Auth::user()->id }}">
                                                                @endauth

                                                                <table style="width:100%;" cellpadding="8">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="left" colspan="2">
                                                                                {{ "Harga : Rp $wisata->harga" . '/tiket' }}
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="align-middle"
                                                                                style="width: 0px;" align="left"
                                                                                colspan="4">
                                                                                {!! $wisata->add_code !!}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>


                                                                            <td class="align-middle"
                                                                                style="width: 0px;" align="left">
                                                                                Tanggal: </td>
                                                                            <td class="align-middle date"
                                                                                align="left">
                                                                                <input type="date" value=""
                                                                                    name="tanggal" class="">
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

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="align-middle" colspan="4">
                                                                                @auth
                                                                                    <button id="pay-button"
                                                                                        class="btn btn-primary beli"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#beli"
                                                                                        type="submit">Beli</button>

                                                                                @endauth
                                                                                @guest

                                                                                @endguest

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

                                    <!-- End Modal Beli -->
                                </div>
                            </div>
                            @php
                                $i = $j;
                            @endphp
                        @endfor

                        {{-- End Perulangan --}}

                    </div>
                </div>
                <hr>
            </div>
            <div class="row d-flex">
                <div class="container px-6 text-center">
                    <div class="row gx-5 mb-3">
                        {{-- persatu awal --}}
                        @for ($i = 0; $i < $produks->count();)
                            @php
                                
                                $j = $i + 1;
                                $produk = $produks[$i];
                                
                            @endphp
                            <div class="col katalog-content">
                                <div class="box-katalog"
                                    style="background-image: url('images/{{ $produk->thumbnail }}'); background-size: cover;">
                                    <div class="row" style="margin-top: 120px;">
                                        <div class="col" style="margin: auto;" align="left">
                                            <h4 style="color: white;">{{ $produk->nama }}</h4>
                                            <h5 style="color: white;">{{ $produk->harga }}</h5>
                                        </div>
                                        <div class="col" style="margin: auto;" align="right">

                                            @auth
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#beli{{ $produk->menu_id }}">Beli</button>
                                            @endauth
                                            @guest
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#login">Beli</button>
                                            @endguest
                                        </div>
                                    </div>
                                    <!-- Modal Beli -->

                                    <div class="modal" id="beli{{ $produk->menu_id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="margin-left: 16px;">
                                                        {{ $produk->nama }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body overflow-auto"
                                                    style="padding: 12px;margin-bottom: 20px;">
                                                    <div class="row" style="height:100%;margin-top: 20px;">
                                                        <div class="col col-lg-5 align-middle" style="margin: auto;">
                                                            <!-- Carousel wrapper -->
                                                            <div id="carouselBasicExample{{ $i }}"
                                                                class="carousel slide carousel-fade"
                                                                {{-- data-bs-ride="carousel" --}}>
                                                                <!-- Inner -->
                                                                <div class="carousel-inner" style="padding: 0;">
                                                                    <!-- Single item -->
                                                                    @php
                                                                        $ext = pathinfo($produk->namefile, PATHINFO_EXTENSION);
                                                                        
                                                                    @endphp

                                                                    <div class="carousel-item active">
                                                                        @if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
                                                                            <img src="images/{{ $produk->namefile }}"
                                                                                class="d-block w-100" alt=""
                                                                                style="width: 200px; height:200px;object-fit:cover;" />
                                                                        @endif
                                                                        @if ($ext == 'mp4' || $ext == 'gif' || $ext == 'mkv')
                                                                            <video
                                                                                src="images/{{ $produk->namefile }}"
                                                                                controls class="d-block w-100"
                                                                                alt=""
                                                                                style="object-fit:cover;">
                                                                            </video>
                                                                        @endif

                                                                    </div>
                                                                    @if ($produk->menu_id != null)
                                                                        @for (; $j < $produks->count(); $j++)
                                                                            @php
                                                                                if ($produks[$j]->menu_id != $produk->menu_id) {
                                                                                    break;
                                                                                }
                                                                                
                                                                            @endphp
                                                                            @php
                                                                                $ext = pathinfo($produks[$j]->namefile, PATHINFO_EXTENSION);
                                                                                
                                                                            @endphp
                                                                            @if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
                                                                                <div class="carousel-item">

                                                                                    <img src="images/{{ $produks[$j]->namefile }}"
                                                                                        class="d-block w-100"
                                                                                        alt=""
                                                                                        style="width: 200px; height:200px;object-fit:cover;" />
                                                                                </div>
                                                                            @endif
                                                                            @if ($ext == 'mp4' || $ext == 'gif' || $ext == 'mkv')
                                                                                <div class="carousel-item">
                                                                                    <video
                                                                                        src="images/{{ $produks[$j]->namefile }}"
                                                                                        controls class="d-block w-100"
                                                                                        alt=""
                                                                                        style="object-fit:cover;">
                                                                                    </video>
                                                                                </div>
                                                                            @endif
                                                                        @endfor
                                                                    @endif
                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselBasicExample{{ $i }}"
                                                                    data-bs-slide="prev" style="margin: 0px;">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselBasicExample{{ $i }}"
                                                                    data-bs-slide="next" style="margin: 0px;">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <!-- Carousel wrapper -->
                                                            <!-- <img src="assets/img/curug.jpg" alt="" style="border-radius: 12px;"> -->
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <b>Deskripsi</b>
                                                        </div>
                                                        <div class="row row-lg-6"
                                                            style="height: 70px;text-align: justify;margin-bottom: 5px;">

                                                            <p>{!! $produk->desc !!}</p>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="row">
                                                    <div class="col" style="margin: auto;">

                                                        <div class="row" style="vertical-align: middle;">
                                                            <form method="POST" action="{{ url('/belikatalog') }}">
                                                                @csrf
                                                                @auth
                                                                    <input type="hidden" name="id_beli"
                                                                        value="{{ $produk->menu_id }}">
                                                                    <input type="hidden" name="kategori" value="a">
                                                                    <input type="hidden" name="user"
                                                                        value="{{ Auth::user()->id }}">
                                                                @endauth

                                                                <table style="width:100%;" cellpadding="8">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="left" colspan="2">
                                                                                {{ "Harga : Rp $produk->harga" . '/tiket' }}
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="align-middle"
                                                                                style="width: 0px;" align="left"
                                                                                colspan="4">
                                                                                {!! $produk->add_code !!}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>


                                                                            <td class="align-middle"
                                                                                style="width: 0px;" align="left">
                                                                                Tanggal: </td>
                                                                            <td class="align-middle date"
                                                                                align="left">
                                                                                <input type="date" value=""
                                                                                    name="tanggal" class="">
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

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="align-middle" colspan="4">
                                                                                @auth
                                                                                    <button id="pay-button"
                                                                                        class="btn btn-primary beli"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#beli"
                                                                                        type="submit">Beli</button>

                                                                                @endauth
                                                                                @guest

                                                                                @endguest

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

                                    <!-- End Modal Beli -->
                                </div>
                            </div>
                            @php
                                $i = $j;
                            @endphp
                        @endfor

                        {{-- End Perulangan --}}

                    </div>
                </div>
            </div>
            <hr>
            <div class="row d-flex">
                <div class="container px-6 text-center">
                    <div class="row gx-5 mb-3">
                        {{-- persatu awal --}}
                        @for ($i = 0; $i < $makanans->count();)
                            @php
                                
                                $j = $i + 1;
                                $makanan = $makanans[$i];
                                
                            @endphp
                            <div class="col katalog-content">
                                <div class="box-katalog"
                                    style="background-image: url('images/{{ $makanan->thumbnail }}'); background-size: cover;">
                                    <div class="row" style="margin-top: 120px;">
                                        <div class="col" style="margin: auto;" align="left">
                                            <h4 style="color: white;">{{ $makanan->nama }}</h4>
                                            <h5 style="color: white;">{{ $makanan->harga }}</h5>
                                        </div>
                                        <div class="col" style="margin: auto;" align="right">

                                            @auth
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#beli{{ $makanan->menu_id }}">Beli</button>
                                            @endauth
                                            @guest
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#login">Beli</button>
                                            @endguest
                                        </div>
                                    </div>
                                    <!-- Modal Beli -->

                                    <div class="modal" id="beli{{ $makanan->menu_id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="margin-left: 16px;">
                                                        {{ $makanan->nama }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body overflow-auto"
                                                    style="padding: 12px;margin-bottom: 20px;">
                                                    <div class="row" style="height:100%;margin-top: 20px;">
                                                        <div class="col col-lg-5 align-middle" style="margin: auto;">
                                                            <!-- Carousel wrapper -->
                                                            <div id="carouselBasicExample{{ $i }}"
                                                                class="carousel slide carousel-fade"
                                                                {{-- data-bs-ride="carousel" --}}>
                                                                <!-- Inner -->
                                                                <div class="carousel-inner" style="padding: 0;">
                                                                    <!-- Single item -->
                                                                    @php
                                                                        $ext = pathinfo($makanan->namefile, PATHINFO_EXTENSION);
                                                                        
                                                                    @endphp

                                                                    <div class="carousel-item active">
                                                                        @if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
                                                                            <img src="images/{{ $makanan->namefile }}"
                                                                                class="d-block w-100" alt=""
                                                                                style="width: 200px; height:200px;object-fit:cover;" />
                                                                        @endif
                                                                        @if ($ext == 'mp4' || $ext == 'gif' || $ext == 'mkv')
                                                                            <video
                                                                                src="images/{{ $makanan->namefile }}"
                                                                                controls class="d-block w-100"
                                                                                alt=""
                                                                                style="object-fit:cover;">
                                                                            </video>
                                                                        @endif

                                                                    </div>
                                                                    @if ($makanan->menu_id != null)
                                                                        @for (; $j < $makanans->count(); $j++)
                                                                            @php
                                                                                if ($makanans[$j]->menu_id != $makanan->menu_id) {
                                                                                    break;
                                                                                }
                                                                                
                                                                            @endphp
                                                                            @php
                                                                                $ext = pathinfo($makanans[$j]->namefile, PATHINFO_EXTENSION);
                                                                                
                                                                            @endphp
                                                                            @if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
                                                                                <div class="carousel-item">

                                                                                    <img src="images/{{ $makanans[$j]->namefile }}"
                                                                                        class="d-block w-100"
                                                                                        alt=""
                                                                                        style="width: 200px; height:200px;object-fit:cover;" />
                                                                                </div>
                                                                            @endif
                                                                            @if ($ext == 'mp4' || $ext == 'gif' || $ext == 'mkv')
                                                                                <div class="carousel-item">
                                                                                    <video
                                                                                        src="images/{{ $makanans[$j]->namefile }}"
                                                                                        controls class="d-block w-100"
                                                                                        alt=""
                                                                                        style="object-fit:cover;">
                                                                                    </video>
                                                                                </div>
                                                                            @endif
                                                                        @endfor
                                                                    @endif
                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselBasicExample{{ $i }}"
                                                                    data-bs-slide="prev" style="margin: 0px;">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselBasicExample{{ $i }}"
                                                                    data-bs-slide="next" style="margin: 0px;">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <!-- Carousel wrapper -->
                                                            <!-- <img src="assets/img/curug.jpg" alt="" style="border-radius: 12px;"> -->
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <b>Deskripsi</b>
                                                        </div>
                                                        <div class="row row-lg-6"
                                                            style="height: 70px;text-align: justify;margin-bottom: 5px;">

                                                            <p>{!! $makanan->desc !!}</p>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="row">
                                                    <div class="col" style="margin: auto;">

                                                        <div class="row" style="vertical-align: middle;">
                                                            <form method="POST" action="{{ url('/belikatalog') }}">
                                                                @csrf
                                                                @auth
                                                                    <input type="hidden" name="id_beli"
                                                                        value="{{ $makanan->menu_id }}">
                                                                    <input type="hidden" name="kategori" value="a">
                                                                    <input type="hidden" name="user"
                                                                        value="{{ Auth::user()->id }}">
                                                                @endauth

                                                                <table style="width:100%;" cellpadding="8">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="left" colspan="2">
                                                                                {{ "Harga : Rp $makanan->harga" . '/tiket' }}
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="align-middle"
                                                                                style="width: 0px;" align="left"
                                                                                colspan="4">
                                                                                {!! $produk->add_code !!}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>


                                                                            <td class="align-middle"
                                                                                style="width: 0px;" align="left">
                                                                                Tanggal: </td>
                                                                            <td class="align-middle date"
                                                                                align="left">
                                                                                <input type="date" value=""
                                                                                    name="tanggal" class="">
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

                                                                        </tr>
                                                                        <tr>
                                                                            <td class="align-middle" colspan="4">
                                                                                @auth
                                                                                    <button id="pay-button"
                                                                                        class="btn btn-primary beli"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#beli"
                                                                                        type="submit">Beli</button>

                                                                                @endauth
                                                                                @guest

                                                                                @endguest

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

                                    <!-- End Modal Beli -->
                                </div>
                            </div>
                            @php
                                $i = $j;
                            @endphp
                        @endfor

                        {{-- End Perulangan --}}

                    </div>
                </div>
            </div>
            <hr>
            {{-- End Box Katalog --}}
        </div>
    </div>
    {{-- Modal Midtrans
     --}}
    @if (isset($snapToken))
        <form id="submit_form" action="{{ url('/afterpaywis ata') }}" method="POST">
            @csrf
            <input type="hidden" name="json" id="json_callback">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="menu_id" value="{{ $menu_id }}">
            <input type="hidden" name="menu_id" value="{{ $menu_id }}">
            <input type="hidden" name="schedule" value="{{ $schedule }}">
            <input type="hidden" name="number" value="{{ $number }}">
        </form>
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need

            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert('transaksi berhasil');

                    send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");

                    send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");

                    send_response_to_form(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            });
            // customer will be redirected after completing payment pop-up
            function send_response_to_form(result) {
                document.getElementById('json_callback').value = JSON.stringify(result);
                $('#submit_form').submit();
            }
        </script>
    @endif
</body>

@include('footer')