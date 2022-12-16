<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Edit Profil</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
</head>

<body>

    @include('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero2">
        <div class="black-bg">
        </div>
        <div class="grey-bg">
            <h2 id="judul-halaman" class="text-white" align="center">Edit Profil</h2>
        </div>

    </section><!-- End Hero Section -->

    <!-- Katalog -->

    <!-- Card Profile -->

    <div class="card-profile">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0" id="editData">

                            <div class="row">
                                <div class="col-md-12">


                                    <!-- formubah data siswa -->
                                    <form class="needs-validation" action="" method="post"
                                        enctype="multipart/form-data" novalidate>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="username"
                                                        autocomplete="off" placeholder="Nama Anda" required>
                                                    <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        autocomplete="off" value="" required>
                                                    <div class="invalid-feedback">Username tidak boleh kosong.
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email1"
                                                        autocomplete="off" value="" required>
                                                    <div class="invalid-feedback">Email tidak boleh kosong.
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label>Jenis Bank</label>
                                                    <select class="form-control" name="jenis_bank" required>
                                                        <option value="">
                                                        </option>
                                                        <option value="bri">BRI</option>
                                                        <option value="bca">BCA
                                                        <option value="bni">BNI
                                                        </option>
                                                        <option value="bankjateng">Bank Jateng</option>
                                                        <option value="mandiri">Mandiri</option>
                                                    </select>
                                                    <div class="invalid-feedback">Jenis pembayaran harus diisi.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" rows="2" name="alamat" autocomplete="off" required></textarea>
                                                    <div class="invalid-feedback">Alamat lahir tidak boleh
                                                        kosong.</div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>No. Rekening</label>
                                                    <input type="text" class="form-control"name="no_rekening"
                                                        maxlength="13" autocomplete="off" value="" required>

                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Foto Siswa</label>
                                                    <input type="file" class="form-control-file mb-3"
                                                        id="foto" name="foto" autocomplete="off"
                                                        value="">
                                                    <div id="imagePreview"><img class="foto-preview"
                                                            src="foto/" /></div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-md-4 pt-md-1 border-top"> </div>

                                        <div class="form-group col-md-12 right">
                                            <a href=""><input type="submit" class="btn btn-success"
                                                    name="simpan" value="Simpan"></a><br><br>

                                            <a href="profil"><input type="submit" class="btn btn-danger"
                                                    name="batal" value="Batal"></a><br><br>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
@include('footer')

</html>
