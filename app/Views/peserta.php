<?=$this->extend('layout/template'); ?>


<?=$this->section('content'); ?>
<br><br><br><br>


<main id="main">
<!-- ======= About Section ======= -->

  <div class="container center">

  <div class="row justify-content-center">
      <div class="col-lg-12" data-aos="zoom-in">
      <h1 class="mt-1"> Daftar Peserta <span style="color:red;"> Jakarta Select </span></h1>
      </div>
      
    </div>

  </div>
><!-- End About Section -->
<div class="container center">
<div class="table-container-responsive" data-aos="zoom-in">
  <div class="row">
    <div class="col-6"> 
     
      <form action="" method="post">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Masukan Nama Pencarian.." name="keyword" id="keyword" >
  <button class="btn btn-outline-secondary" type="submit"  name="submit"id="button-addon2">Cari</button>
</div>
</div></form></div>
    <table class="table">
        
		<thead>
    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kabupaten</th>
                        <th>provinsi</th>
                       
                        <th>Kewarganegaraam</th>
                        <th>No Posisi</th>
                        <th>Kaki terkuat</th>
                        <!-- <th>TB</th>
                        <th>BB</th> -->
                        <th>Klub Asal</th>
                       
                    </tr>
</thead>
<tbody>
  <?php $i = 1 + (5 * ($currentPage -1)); ?>
<?php foreach ($table as $row): ?>
<tr>
<th scope="row"><?= $i++;?></th>   
<td><?= $row['nama_lengkap']; ?></td>
<td><?= $row['alamat_lengkap']; ?></td>
<td><?= $row['kabupaten']; ?></td>
<td><?= $row['provinsi']; ?></td>
<td><?= $row['kewarganegaraan']; ?></td>
<td><?= $row['no_posisi']; ?></td>
<td><?= $row['kaki_terkuat']; ?></td>

<td><?= $row['klub_asal']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?= $pager->links('table','default_simple') ?>
        </div>
</div>
</div>
   


</main><!-- End #main -->
<?=$this->endSection(); ?>