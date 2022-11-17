<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projek Tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('/css/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top py-3" data-bs-spy="scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="color: #d8e72a;font-family: Inter, sans-serif;--bs-body-font-weight: 600;letter-spacing: 2px;">Visit&nbsp;</span><span style="color: rgb(255,255,255);font-family: Inter, sans-serif;letter-spacing: 1px;">Indonesia&nbsp;</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 20px;line-height: 24px;font-family: Inter, sans-serif;color: #ffffff;">Notifikasi</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 20px;line-height: 24px;font-family: Inter, sans-serif;color: #ffffff;">Favorit</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 20px;line-height: 24px;font-family: Inter, sans-serif;color: #ffffff;">Pesanan Saya</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 20px;line-height: 24px;font-family: Inter, sans-serif;color: #ffffff;">Bantuan</a></li>
                </ul><a class="btn btn-primary ms-md-2 navlink1" role="button" href="#" style="font-size: 20px;line-height: 24px;font-family: Inter, sans-serif;color: rgb(255, 255, 255);">Login</a>
            </div>
        </div>
    </nav>
    <section>
        <div data-bss-parallax-bg="true" style="height: 100vh;background-image: url({{ asset('/img/Bg.png') }});background-position: center;background-size: cover;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;">
                            <h1 class="text-uppercase fw-bold"><span style="color: rgb(255, 255, 255);">Holiday Every Weekend</span><br><span style="color: rgb(255, 255, 255);">Happiness Never End</span><br></h1>
                            <div style="--bs-body-bg: #ffffff;background: #ffffff;padding: 2px;width: 351.5px;height: 42px;border-radius: 9px;padding-top: 6px;"><input type="search" style="width: 259px;height: 33px;margin: 0;border-radius: 12px;margin-top: 0px;border-style: solid;"><button class="btn btn-primary" type="button" style="width: 78.5px;height: 30px;padding: 1px 12px;border-radius: 12px;margin-top: -9px;font-family: Inter, sans-serif;">Cari</button></div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;"><img src="{{ asset('/img/Multiple%20Img.png') }}" style="width: 285px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("/js/bs-init.js") }}"></script>
</body>

</html>