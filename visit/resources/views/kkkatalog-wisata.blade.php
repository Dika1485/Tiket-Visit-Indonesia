<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Katalog Wisata</title>
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
                <div class="box-fitur-active" style="transform: rotate(0);">
                    <div class="row">
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;"><i class="bi bi-strava"></i>
                        </div>
                        <div class="col">
                            <h6 style="margin-bottom: 0px;">Wisata</h6>
                        </div>
                        <div class="col col-lg-2" style="padding: 0px;text-align: center;">{{ $iw }}</div>
                        <a href="katalog-wisata" class="stretched-link"></a>
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
                        <a href="katalog-produk" class="stretched-link"></a>
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
                        <a href="katalog-makanan" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="vr" style="width:2px ;height: 100%;color: black;margin: 12px 12px 0px 20px;">
                </div>
            </div>

            {{-- Box katalog --}}
            <div class="col d-flex">
                <div class="container px-6 text-center">
                    <div class="row gx-5 mb-3">
                        {{-- persatu awal --}}
                        @php
                            $menu_id_old = 0;
                            
                        @endphp
                        @foreach ($wisatas as $wisata)
                            @if ($wisata->menu_id == $menu_id_old)
                                @php
                                    goto a;
                                    
                                @endphp
                            @else
                                @php
                                    goto awal;
                                @endphp
                            @endif
                            @php
                                awal:
                            @endphp
                            <div class="col katalog-content">
                                <div class="box-katalog"
                                    style="background-image: url('images/{{ $wisata->namefile }}'); background-size: cover;">
                                    <div class="row" style="margin-top: 120px;">
                                        <div class="col" style="margin: auto;" align="left">
                                            <h4 style="color: white;">{{ $wisata->nama }}</h4>
                                            <h5 style="color: white;">{{ $wisata->harga }}</h5>
                                        </div>
                                        <div class="col" style="margin: auto;" align="right">
                                            @auth
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#beli{{ $wisata->id }}">Beli</button>
                                            @endauth
                                            @guest
                                                <button class="btn btn-primary beli" data-bs-toggle="modal"
                                                    data-bs-target="#login">Beli</button>
                                            @endguest
                                        </div>
                                    </div>
                                    <!-- Modal Beli -->
                                    @auth
                                        <div class="modal" id="beli{{ $wisata->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content ">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="margin-left: 16px;">
                                                            {{ $wisata->nama }}
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
                                                                    <!-- Inner -->
                                                                    <div class="carousel-inner" style="padding: 0;">
                                                                        <div class="carousel-item active">
                                                                            <img src="images/{{ $wisata->namefile }}"
                                                                                class="d-block w-100" alt="" />
                                                                        </div>
                                                                        @php
                                                                            $menu_id_old = $wisata->menu_id;
                                                                            goto c;
                                                                        @endphp

                                                                        @php
                                                                            a:
                                                                            
                                                                        @endphp

                                                                        <!-- Single item -->
                                                                        <div class="carousel-item ">
                                                                            <img src="images/{{ $wisata->namefile }}"
                                                                                class="d-block w-100" alt="" />
                                                                        </div>

                                                                        @php
                                                                            c:
                                                                            if ($wisata->menu_id == $menu_id_old) {
                                                                                continue;
                                                                            } else {
                                                                                goto b;
                                                                            }
                                                                        @endphp

                                                                        <!-- Inner -->
                                                                        <!-- Controls -->
                                                                        @php
                                                                            if ($wisata->menu_id == $menu_id_old) {
                                                                            }
                                                                            b:
                                                                        @endphp
                                                                    </div>
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
                                                                <!-- <img src="assets/img/curug.jpg" alt="" style="border-radius: 12px;"> -->
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col" style="margin: auto;">
                                                                <div class="row">
                                                                    <b>Deskripsi</b>
                                                                </div>
                                                                <div class="row row-lg-6 overflow-auto"
                                                                    style="height: 70px;text-align: justify;margin-bottom: 5px;">

                                                                    <p>{{ $wisata->desc }}</p>
                                                                </div>
                                                                <div class="row" style="vertical-align: middle;">
                                                                    <form method="POST"
                                                                        action="{{ url('/beliwisata') }}">
                                                                        @csrf
                                                                        <input type="hidden" name="id_beli"
                                                                            value="{{ $wisata->id }}">
                                                                        <input type="hidden" name="kategori"
                                                                            value="wisata">
                                                                        <input type="hidden" name="user"
                                                                            value="{{ Auth::user()->id }}">
                                                                        <table style="width:100%;" cellpadding="8">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" colspan="2">
                                                                                        {{ "Harga : Rp $wisata->harga" . '/tiket' }}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="align-middle"
                                                                                        style="width: 0px;"
                                                                                        align="left">
                                                                                        Tanggal: </td>
                                                                                    <td class="align-middle date"
                                                                                        align="left">
                                                                                        <input type="date"
                                                                                            value="" name="tanggal"
                                                                                            class="">
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
                                                                                    <td class="align-middle"
                                                                                        colspan="4">
                                                                                        <button id="pay-button"
                                                                                            class="btn btn-primary beli"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#beli"
                                                                                            type="submit">Beli</button>
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
                                    @endauth
                                    <!-- End Modal Beli -->
                                </div>
                            </div>


                            @php
                                
                                $menu_id_old = $wisata->menu_id;
                            @endphp
                        @endforeach

                        {{-- End Perulangan --}}

                    </div>
                </div>

            </div>
            {{-- End Box Katalog --}}
        </div>
    </div>
    {{-- Modal Midtrans
     --}}
    @if (isset($snapToken))
        <form id="submit_form" action="{{ url('/afterpaywisata') }}" method="POST">
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
