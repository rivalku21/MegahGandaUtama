<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>

    <nav class="fixed-top">
        <div class="brand">
            <h4>PT. Megah Ganda Utama</h4>
        </div>

        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentangKami">Tentang Kami</a></li>
            <li><a href="/produkLayanan">Produk & Layanan</a></li>
            <li><a href="/struktur">Struktur</a></li>
            <li><a href="/hubungiKami">Hubungi Kami</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    @yield('container')

    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Hubungi Kami :</h5>
                    <p>WhatsApp : +62 82208280110
                    WhatsApp : +62 82208280110
                    WhatsApp : +62 82208280110
                    WhatsApp : +62 82208280110
                    WhatsApp : +62 82208280110</p>
                </div>
                <div class="col-sm-4">
                    <h5>Alamat</h5>
                    <p>Bandung Techno Park
                    Kawasan Pendidikan Telkom, Bandung Techno Park Jl. Telekomunikasi No.1, Terusan Buah Batu, Bojongsoang – Kabupaten Bandung
                    Kantor Pemasaran
                    Komplek Permata Buah Batu B-65, Jl. Bojongsoang Terusan Buah Batu – Kabupaten Bandung
                    Kawasan  Riset &  Produksi
                    Kampung Ciruum, RT.04/ RW.006, Desa Wargaluyu, Kecamatan Arjasari Kabupaten Bandung</p>
                </div>
                <div class="col-sm-4">
                    <h5>Follow Kami</h5>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>