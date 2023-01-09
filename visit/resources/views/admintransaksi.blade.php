<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visit Indonesia - Daftar Transaksi</title>
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
            <h2 id="judul-halaman" class="text-white" align="center">Daftar Transaksi</h2>
        </div>

    </section><!-- End Hero Section -->
    <div class="container mt-5 mb-5">

        <table id="daftar" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Nama Menu</th>
                    <th>Pembeli</th>
                    <th>Jadwal</th>
                    <th>Jumlah Tiket</th>
                    <th>Status</th>
                    <th>Pendapatan</th>
                    <th>Midtrans ID</th>
                    <th>Payment Code</th>
                    <th>Metode Bayar</th>

                </tr>
            </thead>
            <tbody>
                @forelse($transaksi as $transaksi)
                    <tr>
                        <td>{{ $transaksi->kode }}</td>
                        <td>{{ $transaksi->namamenu }}</td>
                        <td>{{ $transaksi->nama }}</td>
                        <td>{{ $transaksi->schedule }}</td>
                        <td>{{ $transaksi->jumlah }}</td>
                        <td>
                            @if ($transaksi->status == 'settlement')
                                {{ 'Sukses' }}
                            @endif

                            @if ($transaksi->status == 'pending')
                                {{ 'Pending' . ' ' }}
                                <a href="{{ $transaksi->pdf_url }}" target="_blank">( Detail Tagihan )</a>
                            @endif
                            @if ($transaksi->status != 'settlement' && $transaksi->status != 'pending')
                                {{ 'Cancel or Error' }}
                            @endif
                        </td>
                        <td>{{ $transaksi->total }}</td>
                        <td>{{ $transaksi->midtrans_id }}</td>
                        <td>{{ $transaksi->payment_code }}</td>
                        <td>{{ $transaksi->metode }}</td>
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
        $('#daftar').DataTable({
            scrollX: true,
            scrollCollapse: false,
            paging: true,
            order: [
                [8, 'desc']
            ],
        });

    });
</script>
</body>
@include('footer')

</html>
