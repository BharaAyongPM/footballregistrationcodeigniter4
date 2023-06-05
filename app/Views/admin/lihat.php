<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>

<div class="sb-sidenav-footer">
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Pemain</h6>
    </div>
   
           
<div class="card-body">
        <div class="table-responsive">
        <a href="<?= base_url('admin/dbadmin/') ?>" class="btn btn-secondary">Kembali</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tbody>
    <tr>
            <td>Kode Pemain</td>
            <td><?= $pemain['kode'] ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?= $pemain['nama_lengkap'] ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td><?= $pemain['tempat_lahir'] ?>, <?= $pemain['tanggal_lahir'] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $pemain['jenis_kelamin'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $pemain['alamat_lengkap'] ?></td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td><?= $pemain['kabupaten'] ?></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td><?= $pemain['provinsi'] ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><?= $pemain['agama'] ?></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td><?= $pemain['kewarganegaraan'] ?></td>
        </tr>
        <tr>
            <td>No. Posisi</td>
            <td><?= $pemain['no_posisi'] ?></td>
        </tr>
        <tr>
            <td>Kaki Terkuat</td>
            <td><?= $pemain['kaki_terkuat'] ?></td>
        </tr>
        <tr>
            <td>Tinggi Badan</td>
            <td><?= $pemain['tinggi_badan'] ?> cm</td>
        </tr>
        <tr>
            <td>Berat Badan</td>
            <td><?= $pemain['berat_badan'] ?> kg</td>
        </tr>
        <tr>
            <td>Klub Asal</td>
            <td><?= $pemain['klub_asal'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $pemain['email_pemain'] ?></td>
        </tr>
        <tr>
            <td>No. WhatsApp</td>
            <td><?= $pemain['no_whatsapp'] ?></td>
        </tr>
        <tr>
            <td>Dokumen KTP</td>
            <td><?php if ($pemain['foto']) : ?>
            <img src="<?= base_url('uploads/' . $pemain['dokumen_ktp']) ?>"style="width:100%;max-width:100px" alt="<?= $pemain['dokumen_ktp'] ?>">
        <?php else : ?>
            <img src="<?= base_url('uploads/default.jpeg') ?>" alt="<?= $pemain['dokumen_ktp'] ?>">
        <?php endif; ?><a href="<?php echo base_url('admin/pemain/editktp/'.$pemain['id']) ?>" class="btn btn btn-primary">Lihat KTP</a</td>
        </tr>
        <tr>
            <td>Surat Rekomendasi Club</td>
            <td><?= $pemain['surat_rekomendasi'] ?> &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/pemain/surat/'.$pemain['id']) ?>" class="btn btn btn-primary">Lihat</a></td>
</tr>
<td>Foto </td>
<td><?php if ($pemain['foto']) : ?>
            <img src="<?= base_url('uploads/' . $pemain['foto']) ?>"style="width:100%;max-width:100px" alt="<?= $pemain['foto'] ?>">
        <?php else : ?>
            <img src="<?= base_url('uploads/default.jpeg') ?>" alt="<?= $pemain['foto'] ?>">
        <?php endif; ?> <a href="<?php echo base_url('admin/pemain/editfoto/'.$pemain['id']) ?>" class="btn btn btn-primary">LihatFoto</a></td>
        
<tr> 
    <td><a href="<?php echo base_url('admin/pemain/edit/'.$pemain['id']) ?>" class="btn btn btn-primary">Edit</a> </td>
    <td><form method="post" action="admin/pemain/delete/<?php echo $pemain['id']; ?>">
    <input type="hidden" name="_method" value="DELETE" />
    <button type="submit" class="btn btn-danger">Delete</button> </td>
    

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
