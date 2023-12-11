<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a style="margin-right: 260px;" class="navbar-brand" href="#">5026221111 - Kayla Kirani Kusnadi</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="keranjangbelanja">Keranjang Belanja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nilaikuliah">Nilai Kuliah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kopi">Kopi - Pra EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="karyawan">Karyawan</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Link lainnya
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/" target="_blank">Halaman Utama</a>
                    <a class="dropdown-item" href="P1" target="_blank">Pertemuan 1</a>
                    <a class="dropdown-item" href="P2-1" target="_blank">Pertemuan 2'1</a>
                    <a class="dropdown-item" href="P2-2" target="_blank">Pertemuan 2'2</a>
                    <a class="dropdown-item" href="P2-3" target="_blank">Pertemuan 2'3</a>
                    <a class="dropdown-item" href="P3" target="_blank">Pertemuan 3</a>
                    <a class="dropdown-item" href="P4" target="_blank">Pertemuan 4</a>
                    <a class="dropdown-item" href="P5-1" target="_blank">Pertemuan 5'1</a>
                    <a class="dropdown-item" href="P5-2" target="_blank">Pertemuan 5'2</a>
                    <a class="dropdown-item" href="P6" target="_blank">Pertemuan 6</a>
                    <a class="dropdown-item" href="perkalian" target="_blank">Perkalian</a>
                    <a class="dropdown-item" href="biodata" target="_blank">Biodata</a>
                    <a class="dropdown-item" href="formulir" target="_blank">Formulir</a>
                    <a class="dropdown-item" href="halo" target="_blank">Halo 1</a>
                    <a class="dropdown-item" href="halo2" target="_blank">Halo 2</a>
                    <a class="dropdown-item" href="blog" target="_blank">Blog</a>
                </div>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container">
        @yield('konten')
    </div>

    @include('footer')
</body>

</html>