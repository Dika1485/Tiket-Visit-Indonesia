<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia</title>
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
<script>
    $(document).ready(function() {
        $("#login").modal('show');
    });
</script>

<body>

    @include('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Holiday Every Weekend Happiness Never End</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Nikmati rekreasi bersama orang favoritmu, dan buatlah
                        memori di Purbalingga!</p>

                    <!--<form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Cari destinasi menarik di sekitar anda">
                        <button type="submit" class="btn btn-primary search">Search</button>
                    </form>-->
                </div>


                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="img/multiple.png" class="img-fluid mb-3 mb-lg-0 multiple" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">
        <section class="services">
            <!-- ======= Fitur Section ======= -->

            <div class="icon-boxes position-relative">
                <div class="row gy-2 mt-5" style="width: 80%; margin:auto">
                    <table cellpadding="10">
                        <tr>
                            <td colspan="2">
                                <div class="col box" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bi bi-strava"></i></div>
                                        <h4 class="title"><a href="katalog-wisata" class="stretched-link">Wisata</a>
                                        </h4>
                                    </div>
                                </div>
                                <!--End Icon Box -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col box" data-aos="fade-up" data-aos-delay="500">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bi bi-box2-fill"></i></div>
                                            <h4 class="title"><a href="katalog-produk"
                                                    class="stretched-link">Produk</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <!--End Icon Box -->
                                    <div class="col box" data-aos="fade-up" data-aos-delay="500">
                                        <div class="icon-box">
                                            <div class="icon"><i class="fas fa-drumstick-bite"></i></div>
                                            <h4 class="title"><a href="katalog-makanan"
                                                    class="stretched-link">Makanan</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <!--End Icon Box -->
                                </div>

                            </td>
                        </tr>
                    </table>



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
                            @forelse ($wisatas as $wisata)
                                <div class="card">
                                    <img src="img/goa-lawa.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $wisata->nama }}</h5>
                                        <p class="card-text">{{ strip_tags(Str::limit($wisata->desc, 100)) }}</p>
                                        <a href="/katalog-wisata" id="go-smw" class="btn btn-primary">Wisata
                                            Lainnya</a>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            @forelse ($makanans as $makanan)
                                <div class="card">
                                    <img src="img/goa-lawa.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $makanan->nama }}</h5>
                                        <p class="card-text">{{ Str::limit($makanan->desc, 100) }}</p>
                                        <a href="/katalog-makanan" id="go-smw" class="btn btn-primary">Makanan
                                            Lainnya</a>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            @forelse ($produks as $produk)
                                <div class="card">
                                    <img src="img/goa-lawa.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $produk->nama }}</h5>
                                        <p class="card-text">{{ Str::limit($produk->desc, 100) }}</p>
                                        <a href="/katalog-produk" id="go-smw" class="btn btn-primary">Produk
                                            Lainnya</a>
                                    </div>
                                </div>
                            @empty
                            @endforelse
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

            <!-- Mobile trending -->



            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq">
                <div class="container" data-aos="fade-up" style="margin-bottom:5%;">

                    <div class="section-header">

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
</body>
@include('footer')
