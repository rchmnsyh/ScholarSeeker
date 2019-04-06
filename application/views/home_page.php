<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Pemanggilan Head -->
    <?php $this->load->view("_partials/head.php") ?>

    <!-- Custom styles -->
    <link href="<?= base_url('assets/css/style_home.css') ?>" rel="stylesheet">

</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Pemanggilan Navbar jika belum login -->
    <?php $this->load->view("_partials/navbar_nologin.php") ?>

    <header class="bg-img" id="home">
        <div class="container text-left mt-5">
            <h1>welcome to <br>scholarseeker</h1>
            <p class="tagline">is the future as expensive as college? Don't worry.<br>We facilitize students for the bright future. Join us and find your perfect college.</p>
            <a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Sign Up</a>
        </div>
    </header>

    <div class="my-5">
        <div class="container text-center">
            <img src="" alt="client logos" class="img-fluid">
        </div>
    </div>

    <div class="section light-bg" id="about">
        <div class="container">

            <div class="section-title">
                <small>ABOUT US</small>
                <h3>Kenapa harus ScholarSeeker</h3>
            </div>

            <div class="row">
                <p class="text-center about-us">Kurangnya website yang menyediakan layanan Beasiswa yang membantu pencari beasiswa untuk mendapatkan akses pendaftaran beasiswa secara langsung dalam satu web secara lengkap menjadi alasan ScholarSeeker dibuat. Mulai dari tampilan yang user-friendly, halaman yang interaktif dan berita terbaru tentang dunia pendidikan.</p>
            </div>
        </div>
    </div>

    <div class="section" id="scholar">
        <div class="container">
            <div class="section-title">
                <small>Scholar</small>
                <h3>Scholar Here</h3>
            </div>

            
        </div>
    </div>

    <div class="section light-bg" id="news">
        <div class="container">
            <div class="section-title">
                <small>News</small>
                <h3>What our News Says</h3>
            </div>

            
        </div>
    </div>

    <div class="section pt-5">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Apa ada format proposal yang baku?</h4>
                    <p class="light-font mb-5">Tidak ada format khusus untuk proposal, namun diharapkan terdapat rencana perkuliahan dan sks per-semester yang akan ditempuh hingga selesai studi, topik apa yang akan ditulis dalam skripsi/tesis/disertasi, deskripsikan aktivitas di luar perkuliahan yang akan dilakukan selama studi dan bagaimana implementasi hasil studi di masyarakat. </p>
                    <h4 class="mb-3">Apa ada format essay yang baku?</h4>
                    <p class="light-font mb-5">essay dengan tema/judul: "Aku Generasi Unggul Kebanggaan Bangsa Indonesia" ditulis sebanyak 3-5 halaman pada kertas A4 dengan format huruf Times New Roman ukuran huruf 12 dengan spasi 1.5 line.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Kenapa saya tidak bisa login padahal saya sudah registrasi dan konfirmasi/aktivasi?</h4>
                    <p class="light-font mb-5">Periksa kembali email/password yang anda ketik di form login, besar kecil huruf juga berpengaruh. Biasanya apabila login melalui browser mobile, huruf pertama yang Anda ketik akan besar/kapital.</p>
                    <h4 class="mb-3">Apa yang dimaksud mahasiswa baru dan mahasiswa on-going?</h4>
                    <p class="light-font mb-5">Mahasiswa baru adalah mahasiswa yang baru mendapatkan surat keterangan lulus di perguruan tinggi atau mahasiswa yang baru melaksanakan perkuliahan di semester 1 dan belum mendapatkan KHS. Sedangkan mahasiswa on-going adalah mahasiswa yang sudah memulai perkuliahan maksimal semester 2 (semua jenjang).</p>

                </div>
            </div>
        </div>
    </div>

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="fas fa-map-marker-alt mr-2"></span> Jl. Telekomunikasi, Jl. Terusan Buah Batu No.01, Sukapura, Dayeuhkolot, Bandung, Jawa Barat 40257</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="fas fa-at mr-2"></span> <a class="mr-4" href="mailto:support@scholarseeker.com">support@scholarseeker.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="fas fa-phone mr-2"></span> <a href="tel:51836362800">518-3636-2800</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="my-5 text-center">
        <p class="mb-2"><small>COPYRIGHT © 2019. ALL RIGHTS RESERVED.</small></p>

        <small>
            <a href="https://github.com/iriyanto27/ScholarSeeker" class="m-2">GITHUB</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>
    
    <!-- Pemanggilan JS dari Bootstrap -->
    <?php $this->load->view("_partials/js.php") ?>

    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/script_home.js') ?>"></script>
</body>
</html>