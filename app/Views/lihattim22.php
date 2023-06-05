<?=$this->extend('layout/template'); ?>


<?=$this->section('content'); ?>
<br>
<section id="about2" class="about2 ">
		<!--  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->
    <div class="container center">
    <div class="row justify-content-center">
      <div class="col-lg-15" data-aos="zoom-in">
        <img src="<?php echo base_url('assets/img/slide1.png'); ?>"  class="img-fluid" alt="">
      </div>
			

			</div>

		
	</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about ">
  <div class="container center">

  <div class="row justify-content-center">
  <?php foreach ($team as $l => $value) : ?>
  <h1 class="mt-1"> Jadwal Latihan <?= $value ->team  ?> <span style="color:red;"> Jakarta Select </span></h1>
  <?php endforeach; ?>
    </div>

  </div>
</section><!-- End About Section -->
<section>
<div class="container center">
<div class="table-responsive" data-aos="zoom-in">
<table class="table">
                <thead>
                    <tr>
                    <th>Kode Pemain</th>
                  
                    <th>Nama</th>
                        <th>Foto</th>
                        </tr>
                </thead>
                <tbody>   
                <?php $i = 1; ?>
                <?php foreach ($teama as $l => $value) : ?>
                  <tr>
<th ><?= $value ->kode ?></th>

<td><?= $value ->nama_lengkap ?></td>   
<td><img src="<?= base_url('uploads/' . $value ->foto) ?>"style="width:100%;max-width:100px" alt="<?= $value ->foto ?>">
<?php endforeach; ?></td>

</tbody>
</table>
</section>
<section id="about" class="about section-bg " >
<div class="container">
<div class="section-title" data-aos="fade-up">
          <h2><span style="color:red; "><b>Seleksi Jakarta Select </b></span></h2>
          
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          <br>
          <a href="<?php echo base_url('daftar/') ?>" class="btn btn btn-primary btn-custom">Daftar Sekarang</a>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box ">
            <img src="<?php echo base_url('assets/img/jkt.png'); ?>" alt="Gambar" style="max-width: 100%; height: auto;">
           
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
         
            <div class="icon-box ">
            <img src="<?php echo base_url('assets/img/terbuka.png'); ?>" alt="Gambar" style="max-width: 100%; height: auto;">
            
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">

            <div class="icon-box ">
            <img src="<?php echo base_url('assets/img/ketentuan.png'); ?>" alt="Gambar" style="max-width: 100%; height: auto;">
            
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">

            <div class="icon-box ">
            <img src="<?php echo base_url('assets/img/skoter.png'); ?>" alt="Gambar" style="max-width: 100%; height: auto;">
            
            </div>

          </div>
          
</section>

</main><!-- End #main -->
<?=$this->endSection(); ?>