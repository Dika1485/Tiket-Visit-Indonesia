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
            <h2 id="judul-halaman" class="text-white" align="center">Pesanan</h2>
        </div>

    </section><!-- End Hero Section -->

    <!-- Section Pesanan -->

    <div class="container mt-5 mb-5">
        <div class="">
            <table id="transaksi" class="display" style="width:100%; margin-bottom:20px;">

                <thead>
                    <tr border="1">
                        <th>Nama Pesanan</th>
                        <th>Kode Transaksi</th>
                        <th>Schedule</th>
                        <th>Status</th>
                        <th>Jumlah Tiket</th>
                        <th>Harga Total</th>
                        <th style="display: none;">Created</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pesanan as $pesanan)
                        <tr>
                            <td>{{ $pesanan->nama }}</td>
                            <td>{{ $pesanan->kode }}</td>
                            <td>{{ $pesanan->schedule }}</td>
                            <td>
                                @if ($pesanan->status == 'settlement')
                                    {{ 'Sukses' }}
                                @endif

                                @if ($pesanan->status == 'pending')
                                    {{ 'Pending' . ' ' }}
                                    <a href="{{ $pesanan->pdf_url }}" target="_blank">( Detail Tagihan )</a>
                                @endif
                            </td>
                            <td>{{ $pesanan->jumlah }}</td>
                            <td>{{ $pesanan->total }}</td>
                            <td style="display: none;">{{ $pesanan->created_by }}</td>

                        </tr>
                    @empty
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#transaksi').DataTable({

                scrollX: true,
                scrollCollapse: false,
                paging: true,
                order: [
                    [6, 'desc']
                ],
                fixedColumns: false
            });


        });
    </script>
</body>
@include('footer')

</html>





</body>



</html>
