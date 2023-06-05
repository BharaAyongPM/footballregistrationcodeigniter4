<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>

<div class="sb-sidenav-footer">
                        
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Peserta Seleksi Dan Tim</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
        
        <a href="<?php echo base_url('admin/latihan/masuktim') ?>" class="btn btn-primary"><i class="fas fa-file-create"></i> Tambah Peserta  </a>
    </div>
    <div class="card-header py-3">
    <form action="" method="post">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Masukan Nama Pencarian.." name="keyword" id="keyword" >
  <button class="btn btn-outline-secondary" type="submit"  name="submit"id="button-addon2">Cari</button>
</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
        <tr>
            <th>No</th>
            <th>Team</th>
            <th>Kode Pemain</th>
            <th>Nama</th>
            <th>Alamat</th>

        </tr>
    </thead>
                <tbody>
                
                <?php $i = 1 ; ?>
                <?php foreach ($data as $key => $value) : ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $value['team'] ?></td>

                <td><?= $value['kode'] ?></td>
                <td><?= $value['nama_lengkap'] ?></td>
                <td><?= $value['alamat_lengkap'] ?></td>
                
                

</tr>
<?php endforeach; ?>
</tbody>
</table>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<script>
$(function(){

    <?php if(session()->has("success")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?= session("success") ?>'
            
        })
    <?php } ?>
});

</script>
<!-- End of Main Content -->
<?=$this->endSection(); ?>