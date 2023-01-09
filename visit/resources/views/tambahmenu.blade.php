<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Tambah Menu</title>
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
    <!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>

    @include('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero2">
        <div class="black-bg">
        </div>
        <div class="grey-bg">
            <h2 id="judul-halaman" class="text-white" align="center">Tambah Menu</h2>
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
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        autocomplete="off" placeholder="Nama Menu" required>
                                                    <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label>Harga</label>
                                                    <input type="number" class="form-control" name="harga"
                                                        autocomplete="off" required>
                                                    <div class="invalid-feedback">Harga tidak boleh kosong.
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label>Deskripsi</label>
                                                    {{-- <textarea name="desc" id="deskripsi" cols="30" rows="10"></textarea> --}}
                                                    <input id="desc" type="hidden" name="desc">
                                                    <trix-editor input="desc"></trix-editor>
                                                    <div class="invalid-feedback">Deskripsi tidak boleh kosong.
                                                    </div>

                                                </div>
                                                <div class="col-md-12 hidden" style="display: none">
                                                    <label>Kode HTML tambahan</label>
                                                    <textarea name="add_code" id="add_code" cols="30" rows="10"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label>Kategori Menu</label>
                                                    <select class="form-control" name="kategori_id" required>
                                                        <option value="">
                                                        </option>

                                                        <option value="{{ $wisata[0]->id }}">Wisata
                                                        </option>
                                                        <option value="{{ $produk[0]->id }}">Produk
                                                        </option>
                                                        <option value="{{ $makanan[0]->id }}">Makanan
                                                        </option>


                                                    </select>
                                                    <div class="invalid-feedback">Kategori harus diisi.
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col">

                                                <div class="form-group col-md-12">
                                                    <label>Provinsi</label>
                                                    <input type="text" class="form-control" name="provinsi"
                                                        autocomplete="off" required>

                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kota</label>
                                                    <input type="text" class="form-control" name="kota"
                                                        autocomplete="off" required>

                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Kecamatan</label>
                                                    <input type="text" class="form-control" name="kecamatan"
                                                        autocomplete="off" required>

                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Desa</label>
                                                    <input type="text" class="form-control" name="desa"
                                                        autocomplete="off" required>

                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Jalan</label>
                                                    <input type="text" class="form-control" name="jalan"
                                                        autocomplete="off" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Thumbnail</label>
                                                    <input type="file" class="form-control" name="thumb[]"
                                                        required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Media Promosi</label>
                                                    <input type="file" class="form-control" name="filename[]"
                                                        required multiple>
                                                </div>


                                            </div>


                                        </div>

                                        <div class="my-md-4 pt-md-1 border-top"> </div>

                                        <div class="form-group col-md-12 right">
                                            <input type="submit" class="btn btn-success" name="simpan"
                                                value="Simpan"><br><br>
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
