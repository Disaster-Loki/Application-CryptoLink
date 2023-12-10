<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('public/') ?>/imgs/01.jpg" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?= base_url('public/') ?>/vendor/aos/aos.css">
  <link href="<?= base_url('public/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('public/') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('public/') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('public/') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('public/') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('public/') ?>/css/style-home.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="<?= base_url("register") ?>" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Register</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>about</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="title">Crypto Link</h1>
      <p>The future <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
      
      <div class="">
        <a href="login">
          <button class="but" type="link">Login</button>
        </a>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url('public/') ?>/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/aos/aos.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/typed.js/typed.umd.js"></script>
  <script src="<?= base_url('public/') ?>/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('public/') ?>/vendor//php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('public/') ?>/js/home.js"></script>

</body>

</html>