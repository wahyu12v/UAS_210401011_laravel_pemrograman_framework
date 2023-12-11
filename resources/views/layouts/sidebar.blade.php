{{-- <style>
    /* Styling for the header */

    /* Adjusting content position to avoid overlap */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 17px;
        height: 100vh;
        z-index: 1;
        overflow-x: hidden;
        transition: all 0.3s;
    }

    .sidebar ul.nav.flex-column {
        padding-left: 0;
    }

    .sidebar .nav-link {
        padding: 15px 40px;
        color: white;
        text-decoration: none;
        display: block;
        transition: background-color 0.3s ease;
    }

    .sidebar .nav-link:hover {
        background-color: #427D9D;
    }

    .company-logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .company-logo img {
        width: 100px; /* Adjust the width of the logo */
        height: auto;
        margin-right: 10px;
    }

    .company-name {
        color: white;
        margin: 0;
    }
</style> --}}

{{--
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" style="color: white;" href="{{ route('welcome') }}">Home</a>
            <a class="nav-link active" style="color: white;" href="{{ route('merek.index') }}">Merek</a>
            <a class="nav-link active" style="color: white;" href="{{ route('kategori.index') }}">Kategori</a>
            <a class="nav-link active" style="color: white;" href="{{ route('produk.index') }}">Produk</a>
          </div>
        </div>
      </div>

</nav> --}}

{{--
<div class="container-fluid">
<div class="row">
    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block sidebar" style="background-color: #164863;">
        <div class="position-sticky">
            <div class="company-logo">
                <img src="/logo.png" style="   max-width: 80px; /* Adjust the maximum width of the logo */
                height: auto;
                margin-right: 10px;" alt="Company Logo">
                <h5 class="company-name">Ardian Technologi</h5>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('merek.index') }}">Merek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('kategori.index') }}">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" href="{{ route('produk.index') }}">Produk</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div> --}}

<style>
    .navbar-toggler-white {
        background-color: white;
        border-color: white;
    }

    .navbar-toggler-white .navbar-toggler-icon {
        background-color: white; /* Ubah warna ikon agar terlihat */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#164863;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.png') }}" alt="Nama Logo" width="50" height="50">
        </a>
        <button class="navbar-toggler navbar-toggler-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:17px; color: white;" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:17px; color: white;" href="{{ route('merek.index') }}">Merek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:17px; color: white;" href="{{ route('kategori.index') }}">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:17px; color: white;" href="{{ route('produk.index') }}">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

