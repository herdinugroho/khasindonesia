<!--Navbar-->
<nav class="navbar navbar-expand-lg  sticky-top navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="index.html">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                        <option value="#">Cari Kategori Produk</option>
                        <option value="pakaian.html">Pakaian</option>
                        <option value="kuliner.html">Kuliner</option>
                        <option value="kerajinan.html">Kerajinan</option>
                    </select>
                </li>
                <li class="nav-item">
                    <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
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