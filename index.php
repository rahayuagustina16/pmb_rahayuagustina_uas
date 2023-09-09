<?php
   include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>PMB | Stmik Al Fath</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets/img/stmiklogo.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
      rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">

   <!-- =======================================================
  * Template Name: Moderna
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between align-items-center">

         <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>STMIK AL-FATH</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar">
            <ul>
               <li><a class="active " href="index.html">Home</a></li>
               <li><a href="list-mahasiswa.php">Pendaftar</a></li>
               <li><a href="form-daftar.php" class="text-warning">Daftar Baru</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

      </div>
   </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex justify-cntent-center align-items-left">
      <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

         <!-- Slide 1 -->
         <div class="carousel-item active">
            <div class="carousel-container">
               <h2 class="animate__animated animate__fadeInDown text-dark">WELCOME TO <span>STMIK AL-FATH</span></h2>
               <h3 class="animate__animated animate__fadeInUp text-dark">Penerimaan Mahasiswa Baru</h3>
               <a href="form-daftar.php" class="btn-get-started animate__animated animate__fadeInUp text-dark">Daftar
                  Sekarang !</a>
            </div>
         </div>



      </div>
   </section><!-- End Hero -->

   <main id="main">

      <!-- ======= Services Section ======= -->
      <section class="services">
         <div class="container">

            <div class="row">
               <div class="col-md-3">
                  <div class="step">
                     <span class="number">01</span>
                     <h3>Pendaftaran Akun</h3>

                  </div>
               </div>
               <div class="col-md-3">
                  <div class="step">
                     <span class="number">02</span>
                     <h3>Masuk / &nbsp;&nbsp;&nbsp;&nbsp; Log In</h3>

                  </div>
               </div>
               <div class="col-md-3">
                  <div class="step">
                     <span class="number">03</span>
                     <h3>Lengkapi Identitas</h3>

                  </div>
               </div>
               <div class="col-md-3">
                  <div class="step">
                     <span class="number">04</span>
                     <h3>Pembayaran Administrasi</h3>

                  </div>
               </div>


            </div>

         </div>
      </section>
      <!-- End Services Section -->


      <!-- ======= Features Section ======= -->
      <section class="features">
         <div class="container">

            <div class="section-title">
               <h2>Cara Penggunaan Aplikasi</h2>
               <p>berikut adalah cara lengkap penggunaan aplikasi ini :</p>
            </div>

            <div class="row" data-aos="fade-up">
               <div class="col-md-5">
                  <img src="assets/img/daftar.png" class="img-fluid" alt="">
               </div>
               <div class="col-md-7 pt-4">
                  <h3>Pendaftaran Akun.</h3>
                  <p class="fst-italic">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore
                     magna aliqua.
                  </p>
                  <ul>
                     <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                     <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  </ul>
               </div>
            </div>

            <div class="row" data-aos="fade-up">
               <div class="col-md-5 order-1 order-md-2">
                  <img src="assets/img/signin.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-md-7 pt-5 order-2 order-md-1">
                  <h3>Masuk / Login</h3>
                  <p class="fst-italic">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore
                     magna aliqua.
                  </p>
                  <p>
                     Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                     voluptate
                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                     sunt in
                     culpa qui officia deserunt mollit anim id est laborum
                  </p>
               </div>
            </div>

            <div class="row" data-aos="fade-up">
               <div class="col-md-5">
                  <img src="assets/img/identitas.png" class="img-fluid" alt="">
               </div>
               <div class="col-md-7 pt-5">
                  <h3>Lengkapi Identitas</h3>
                  <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit
                     aut quia voluptatem hic voluptas dolor doloremque.</p>
                  <ul>
                     <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                     <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                     <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                  </ul>
               </div>
            </div>

            <div class="row" data-aos="fade-up">
               <div class="col-md-5 order-1 order-md-2">
                  <img src="assets/img/resepsionis.png" class="img-fluid" alt="">
               </div>
               <div class="col-md-7 pt-5 order-2 order-md-1">
                  <h3>Pembayaran Administrasi</h3>
                  <p class="fst-italic">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore
                     magna aliqua.
                  </p>
                  <p>
                     Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                     voluptate
                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                     sunt in
                     culpa qui officia deserunt mollit anim id est laborum
                  </p>
               </div>
            </div>

         </div>
      </section><!-- End Features Section -->

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
      <div class="container">
         <h3>STMIK AL-FATH</h3>
         <p>membangun negri bersama generasi paham teknologi</p>
         <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
         </div>
         <div class="copyright">
            &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
         </div>
         <div class="credits">
            Designed by <a href="https://bootstrapmade.com/" class="text-dark">BootstrapMade</a>
         </div>
         <br>
         <div class="modify">
            Modify by <br>
            <a href="https://www.instagram.com/erimaulana.69/" class="text-dark">Rahayu Agustina</a>
         </div>
      </div>
   </footer>
   <!-- End Footer -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>

</body>

</html>