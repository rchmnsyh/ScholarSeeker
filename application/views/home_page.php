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
            <p class="tagline">is the future as expensive as college? don't worry.<br>we facilitize students for the bright future. join us and find your perfect college. </p>
            <a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Sign Up</a>
        </div>
    </header>

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