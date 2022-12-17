<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Pesanan</title>
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
            <h2 id="judul-halaman" class="text-white" align="center">View Menu</h2>
        </div>

    </section><!-- End Hero Section -->

    <div class="container mt-5 mb-5">
        <a href="tambahmenu"><button class="btn btn-primary" style="width: 15%; margin-bottom:12px;">Tambah
                Menu</button></a>
        <table id="viewmenu" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Kota</th>
                    <th>Aksi</th>
                    <th style="display: none;">Modified</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menu as $menu)
                    <tr>
                        <td>{{ $menu->nama }}</td>
                        <td>{{ $menu->harga }}</td>
                        <td>{{ Str::limit($menu->desc, 100) }}</td>
                        <td>{{ $menu->kota }}</td>
                        <td>
                            <div align="center">
                                <a href="editmenu?id={{ $menu->id }}"><button class="btn btn-success"
                                        style="width: 30%; margin: 4px;"><i class="bi bi-pencil"></i></button></a>
                                <a href="hapusmenu?id={{ $menu->id }}"><button class="btn btn-danger"
                                        style="width: 30%; margin: 4px;"><i class="bi bi-trash"></i></button></a>
                            </div>

                        </td>
                        <td style="display : none;">{{ $menu->updated_at }}</td>


                    </tr>
                @empty
                @endforelse
            </tbody>

        </table>
    </div>



</body>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#viewmenu').removeAttr('width').DataTable({
            scrollY: false,
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            "columnDefs": [{
                "width": "150px",
                "targets": 4
            }],
            'order': [
                [5, 'desc']
            ],
            fixedColumns: true
        });


    });
</script>
</body>
@include('footer')

</html>
