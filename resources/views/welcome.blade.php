<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="row w-100">
                <!-- Logo -->
                <div class="col-1 col-md-3">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('Logo kelas for business_landscape 2 2.png') }}" alt="">
                    </a>
                </div>

                <!-- Menu -->
                <div class="col-9 col-md-6">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Benefit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Paket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kelas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="col-3 col-md-3 text-right">
                    <a class="btn btn-ajukan-demo" href="#">Ajukan Demo</a>
                    <a class="btn btn-login" href="#">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section
        class="jumbotron jumbotron-fluid text-white text-center bg-dark bg-opacity-50 d-flex align-items-center mb-0"
        style="background-image: url('{{ asset('image 45.png') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Tingkatkan Performa Bisnis Anda</h1>
            <p class="lead">Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>
            <p>
                <a href="#" class="btn btn-ajukan-demo my-2">Ajukan Demo</a>
            </p>
        </div>
    </section>

    <!-- Trusted By Section -->
    <div class="container-fluid partner-wrapper text-center pt-5 pb-3">
        <h2>Telah Dipercaya oleh 10.000+ Profesional User dari</h2>
        <div class="row justify-content-center my-5">
            <div class="col-auto">
                <img src="{{ asset('image 20.png') }}" alt="Logo 1" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('image 24.png') }}" alt="Logo 2" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('image 23.png') }}" alt="Logo 3" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('image 22.png') }}" alt="Logo 4" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('image 27.png') }}" alt="Logo 5" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('image 26.png') }}" alt="Logo 6" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('image 28.png') }}" alt="Logo 7" class="img-fluid">
            </div>
            <div class="col-auto">
                <img src="{{ asset('FA_Logo Volta Motor__new tagline-10 1.png') }}" alt="Logo 8" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- How We Help Section -->
    <div class="container text-center my-5">
        <h2>Bagaimana Kelas Center Membantu Anda?</h2>
        <p class="lead text-muted">Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan
            karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
        @livewire('benefit')
    </div>

    <div class="container">
        <h2 class="text-center mt-4 mb-5">Pilihan Paket Untuk Perusahaan di Kelas Center</h2>
        @livewire('package-price')
    </div>

    <div class="container text-center my-5">
        <h2>Lebih dari 2000+ Learning Video</h2>
        <p>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum
            profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>
        @livewire('video')
    </div>

    <div class="jumbotron jumbotron-fluid text-black text-center d-flex align-items-center mb-0"
        style="background: #c19d6c; background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Tingkatkan Kualitas Perusahaan Anda</h1>
            <p class="lead">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam
                mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Ajukan Demo</a>
            </p>
        </div>
    </div>

    <footer class="footer bg-dark text-light pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('Logo kelas for business_landscape 4 1.png') }}" alt="Your Logo"
                        class="img-fluid">
                    <p>&copy; 2021 Landify UI Kit. All rights reserved</p>
                </div>
                <div class="col-md-3">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Ajukan Demo</a></li>
                        <li><a href="#">Kelas Work</a></li>
                        <li><a href="#">Kelas.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Kebijakan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Hubungi Kami</h5>
                    <p>Nabilla Anggraini<br>
                        +62 811 3366 763<br>
                        nabilla.anggraini@kelas.com</p>
                    <ul class="list-inline social-icons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>