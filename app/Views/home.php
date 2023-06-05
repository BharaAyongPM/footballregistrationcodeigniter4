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
			<!-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> -->

			<!-- <div class="carousel-inner" role="listbox"> -->

				<!-- Slide 1 -->
				<!-- <div class="carousel-item active" style="background-image: url(assets/img/slide1.png)"> -->
					<!-- <div class="carousel-container"> -->
						
					<!-- </div> -->
				<!-- </div>  -->

				<!-- Slide 2 -->
				<!-- <div class="carousel-item" style="background-image: url(assets/img/slide1.png)">
					<div class="carousel-container">
						
					</div>
				</div> -->

				<!-- Slide 3 -->
				<!-- <div class="carousel-item" style="background-image: url(assets/img/slide1.png)">
					<div class="carousel-container">
						
					</div>
				</div> -->

			</div>

			<!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
			</a>

		</div> -->
	</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about ">
  <div class="container center">

  <div class="row justify-content-center">
      <div class="col-lg-6" data-aos="zoom-in">
        <img src="<?php echo base_url('assets/img/baner2.png'); ?>" width="800" height="400" class="img-fluid" alt="">
      </div></div>
      
    </div>

  </div>
</section><!-- End About Section -->
<div class="container center">
<div class="table-responsive" data-aos="zoom-in">
    <table class="table">
        
		<thead>
    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <!-- <th>Alamat</th> -->
                        <!-- <th>Kabupaten</th> -->
                        <!-- <th>provinsi</th> -->
                       
                        <!-- <th>Kewarganegaraam</th> -->
                        <th>Posisi</th>
                        <th>Kaki terkuat</th>
                        <!-- <th>TB</th>
                        <th>BB</th> -->
                        <th>Klub Asal</th>
                       
                    </tr>
</thead>
<tbody>
  <?php $i = 1; ?>
<?php foreach ($table as $row): ?>
<tr>
<th scope="row"><?= $i++;?></th>
<td><?= $row['kode']; ?></td>   
<td><?= $row['nama_lengkap']; ?></td>
<!-- <td><?= $row['alamat_lengkap']; ?></td> -->
<!-- <td><?= $row['kabupaten']; ?></td> -->
<!-- <td><?= $row['provinsi']; ?></td> -->
<!-- <td><?= $row['kewarganegaraan']; ?></td> -->
<td><?= $row['no_posisi']; ?></td>
<td><?= $row['kaki_terkuat']; ?></td>

<td><?= $row['klub_asal']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<a href="<?php echo base_url('pages/peserta/') ?>" class="btn btn btn-primary btn-custom">Lihat Selengkapnya</a>
        </div>
</div>
</div>
    <section id="about" class="about ">
  <div class="container center">

  <div class="row justify-content-center">
      <div class="col-lg-6" data-aos="zoom-in">
        <img src="<?php echo base_url('assets/img/baner3.png'); ?>" alt="Gambar" style="max-width: 100%; height: auto;">
      
      
    </div>

  </div>
</section><!-- End About Section -->
<div class="container center">
<div class="table-responsive" data-aos="zoom-in">
    <table class="table">
        
		<thead>
    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <!-- <th>Alamat</th> -->
                        <!-- <th>Kabupaten</th>
                        <th>provinsi</th> -->
                       
                        <!-- <th>Kewarganegaraam</th> -->
                        <th>Posisi</th>
                        <th>Kaki terkuat</th>
                        <!-- <th>TB</th>
                        <th>BB</th> -->
                        <th>Klub Asal</th>
                       
                    </tr>
</thead>
<tbody>
  <?php $i = 1; ?>
<?php foreach ($lolos as $row): ?>
<tr>
<th scope="row"><?= $i++;?></th> 
<td><?= $row['kode']; ?></td>  
<td><?= $row['nama_lengkap']; ?></td>
<!-- <td><?= $row['alamat_lengkap']; ?></td> -->
<!-- <td><?= $row['kabupaten']; ?></td> -->
<!-- <td><?= $row['provinsi']; ?></td> -->
<!-- <td><?= $row['kewarganegaraan']; ?></td> -->
<td><?= $row['no_posisi']; ?></td>
<td><?= $row['kaki_terkuat']; ?></td>

<td><?= $row['klub_asal']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<a href="<?php echo base_url('pages/pesertalolos/') ?>" class="btn btn btn-primary btn-custom">Lihat Selengkapnya</a>
    <br><br> <br> <br>    </div>
</div>
</div>
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