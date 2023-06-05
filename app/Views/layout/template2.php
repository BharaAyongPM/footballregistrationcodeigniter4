
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jakarta Select</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
  


</head>
<body>
 
  <!-- ======= Header ======= -->
  <nav class="navbar navbar-light bg-black">
        <div class="container col-md-2 col-sm-2">
            <a class="navbar-brand col-md-2 col-sm-2" href="#">
              
                <img src="<?php echo base_url('assets/img/busabola2.png'); ?>" alt="gambar" class="gambar-tengah">
            </a>
            
        </div>
    </nav>
  <header id="header" class="sticky-top d-flex ">
    <!-- <div class="jumbotron fixed-top ">
      <img src="assets/img/logo.png" width="200px" height="155px"><br> 
      
  </div> -->

    <div class="container d-flex align-items-center">
  
      <div class="logo me-auto">
         <!-- <h1><a href="index.html">JAKARTA <br>SELECT</a></h1>  -->
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href=""><img src="<?php echo base_url('assets/img/card3.png'); ?>" width="50" height="auto"  alt="logo" ></a> 
      </div> 
      
      
  
    <nav id="navbar" class="navbar order-last order-lg-2">
      <!-- <form>
        <input type="text" placeholder="Cari di sini...">
        <input type="submit" value="Cari">
      </form> -->
      <ul>

        <li><a class="nav-link scrollto active" href="<?php echo base_url('/') ?>">Home</a></li>
        
        
        
        <li class="dropdown"><a href="#"><span>Seleksi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('daftar/') ?>">Pendaftaran</a></li>
                  <li><a href="<?php echo base_url('pages/peserta/') ?>">Data Peserta</a></li>
                  <li><a href="<?php echo base_url('pages/pesertalolos/') ?>">Peserta Lolos</a></li>
             
                </ul>
        <li><a class="nav-link scrollto" href="#">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <!-- <div class="header-social-links d-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-youtube"></i></i></a>
    </div> -->
  </header>



  <?=$this->renderSection('content'); ?>

  
</body>

</html>