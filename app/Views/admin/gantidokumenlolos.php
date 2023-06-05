<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>

<div class="sb-sidenav-footer">
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Surat Rekomendasi Pemain</h6>
    </div>
   
           
<div class="card-body">

<p>Silahkan Ganti atau Download Surat Rekomendasi Pemain</p>
<form method="post" enctype="multipart/form-data" action="<?= base_url('admin/lolos/gantipdflolos/'.$pemain['id']) ?>">
<?= $pemain['surat_rekomendasi'] ?>
        <input type="file" name="surat_rekomendasi" value="<?= $pemain['surat_rekomendasi'] ?>" class="form-control" >
        <button type="submit" class="btn btn-primary">Simpan</button>



        <a href="<?= site_url('/admin/lolos/downloadsuratlolos/' . $pemain['id']) ?>"class="btn btn-primary">Download Surat</a>
    
<a href="<?= base_url('admin/lolos/pemainlolos/'.$pemain['id']) ?>" class="btn btn-secondary">Kembali</a>
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
