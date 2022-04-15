<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pontano+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/library/owlcarousel/dist/assets/owl.carousel.min.css">

    <title>Khas Indonesia</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg  sticky-top navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="index.html">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <select class="form-select" aria-label="Default select example"
                            onchange="location = this.value;">
                            <option value="#">Cari Kategori Produk</option>
                            <option value="pakaian.html">Pakaian</option>
                            <option value="kuliner.html">Kuliner</option>
                            <option value="kerajinan.html">Kerajinan</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        <select class="form-select" aria-label="Default select example"
                            onchange="location = this.value;">
                            <option value="#">Cari Sesuai Daerah</option>
                            <option value="solo.html">Solo</option>
                            <option value="toko.html">Karawang</option>
                            <option value="#">Surabaya</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari">
                            <button class="btn btn-outline-warning" type="submit">Cari</button>
                        </form>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="" style="color: black;">
                        <i class="fas fa-cart-plus" style=" padding-right: 10px; font-size: 130%; margin: 7px;"></i>
                    </a>
                    <a href="" style="color: black;">
                        <i class="far fa-user-circle" style=" padding-right: 10px; font-size: 130%; margin: 7px;"></i>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!--Navbar-->
    @yield('body')
    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4">
                <div class="col kapro">
                    <h3>Kategori Produk</h3>
                    <a href="pakaian.html">Pakaian</a><br>
                    <a href="kerajinan.html">Kerajinan</a><br>
                    <a href="batik.html">Batik</a><br>
                    <a href="kuliner.html">Kuliner</a><br>
                </div>
                <div class="col kapro">
                    <h3>Menu Lainnya</h3>
                    <a href="bantuan.html">Cara Pemesanan</a><br>
                    <a href="bantuan.html">Ketentuan Pemesanan</a><br>
                    <a href="bantuan.html">Proses Pemesanan</a><br>
                    <a href="bantuan.html">Pengembalian Pemesanan</a><br>
                    <a href="bantuan.html">Tentang Kami</a><br>

                </div>
                <div class="col">
                    <h3>Ikuti Kami</h3>
                    <a class="btn btn-primary"
                        style="background-color: #3b5998; border-radius: 40px; border:none; margin: 5px;" href="#!"
                        role="button"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a class="btn btn-primary"
                        style="background-color: #ac2bac; border-radius: 40px; border:none; margin: 5px;" href="#!"
                        role="button"><i class="fab fa-instagram"></i> Instagram</a><br>
                    <a class="btn btn-primary"
                        style="background-color: #25d366; border-radius: 40px; border:none; margin: 5px;" href="#!"
                        role="button"><i class="fab fa-whatsapp"></i> Whatsapp</a><br>
                </div>

                <div class="col mepe">
                    <h3>Metode Pembayaran</h3>
                    <img src="assets/img/transaksi/bca.jpg">
                    <img src="assets/img/transaksi/bni.png">
                    <img src="assets/img/transaksi/atmbersama.jpg">
                    <img src="assets/img/transaksi/mandiri.jpg">
                    <img src="assets/img/transaksi/alfamart.png">
                    <img src="assets/img/transaksi/alfamidi.jpg">
                    <img src="assets/img/transaksi/indomaret.png"><br>
                    <h3>Metode Pengiriman</h3>
                    <img src="assets/img/transaksi/jne.jpg">
                    <img src="assets/img/transaksi/jnt.jpg">
                    <img src="assets/img/transaksi/tiki.jpg">
                    <img src="assets/img/transaksi/sicepat.jpg">
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright" align="center">
        <h3>Created By : www.janeTech.com <i class="far fa-copyright">2021</i></h3>
    </div>
    <!--Footer-->

    <!--Jquery JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>

    <!--LIbrary-->
    <script type="text/javascript" src="assets/library/owlcarousel/dist/owl.carousel.min.js"></script>



    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>