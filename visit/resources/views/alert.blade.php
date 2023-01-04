@if ($warning == 1)
    <script>
        alert(
            "Maaf, anda tidak bisa membeli tiket karena tidak memenuhi persyaratan yang ditentukan, silahkan baca persyaratan yang tertera di deskripsi"
        );
        window.location.assign('/katalog-wisata');
    </script>
@endif
