<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>

<div class="sb-sidenav-footer">
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">KTP Pemain</h6>
    </div>
   
           
<div class="card-body">

<p>Silahkan Ganti atau Download KTP Pemain</p>
<form method="post" enctype="multipart/form-data" action="<?= base_url('admin/pemain/gantiktp/'.$pemain['id']) ?>">
<<?php if ($pemain['dokumen_ktp']) : ?>
            <img src="<?= base_url('uploads/' . $pemain['dokumen_ktp']) ?>"style="width:100%;max-width:300px" alt="<?= $pemain['dokumen_ktp'] ?>">
        <?php else : ?>
            <img src="<?= base_url('uploads/default.jpeg') ?>" alt="<?= $pemain['dokumen_ktp'] ?>">
        <?php endif; ?> 
        <input type="file" name="dokumen_ktp" value="<?= $pemain['dokumen_ktp'] ?>" class="form-control" >
        <button type="submit" class="btn btn-primary">Simpan</button>



        <a href="<?= site_url('/admin/pemain/downloadktp/' . $pemain['id']) ?>"class="btn btn-primary">Download KTP</a>
    
<a href="<?= base_url('admin/dbadmin/') ?>" class="btn btn-secondary">Kembali</a>
<br>
</form>
</tbody>
</table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<?=$this->endSection(); ?>
