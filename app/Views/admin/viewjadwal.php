<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>

<div class="sb-sidenav-footer">
                        
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Jadwal Latihan</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal</h6> 
        <a href="<?php echo base_url('admin/latihan') ?>" class="btn btn-primary"><i class="fas fa-file-download"></i> Tambah Jadwal </a>
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
            <th>Kode Jadwal</th>
            <th>Tempat</th>
            <th>Tanggal</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Team</th>

        </tr>
    </thead>
                <tbody>
                
                
                <?php foreach ($latihan as $l) : ?>
<tr>

<td><?= $l['kode_jadwal'] ?></td>
                <td><?= $l['tempat'] ?></td>
                <td><?= $l['tanggal'] ?></td>
                <td><?= $l['waktu'] ?></td>
                <td><?= $l['waktuend'] ?></td>
                <td><?= $l['team'] ?></td>
                

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