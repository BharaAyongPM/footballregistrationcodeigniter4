<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>
<div class="sb-sidenav-footer">
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit  Pemain</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<!-- <?= form_open("admin/pemain/update/{$pemain['id']}") ?> -->
<form method="post" enctype="multipart/form-data" action="<?= base_url('admin/pemain/update/'.$pemain['id']) ?>">

<div class="form-group">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" value="<?= $pemain['nama_lengkap'] ?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" name="tempat_lahir" value="<?= $pemain['tempat_lahir'] ?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="<?= $pemain['tanggal_lahir'] ?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki" <?= ($pemain['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
        <option value="Perempuan" <?= ($pemain['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
        </select>

</div>
<div class="form-group">
    <label for="alamat_lengkap">Alamat Lengkap</label>
    <textarea name="alamat_lengkap" class="form-control" required><?= $pemain['alamat_lengkap'] ?></textarea>
</div>
<div class="form-group">
    <label for="kabupaten">kabupaten/Kota</label>
    <textarea name="kabupaten" class="form-control" required><?= $pemain['kabupaten'] ?></textarea>
</div>
<div class="form-group">
    <label for="alamat_lengkap">Provinsi</label>
    <textarea name="provinsi" class="form-control" required><?= $pemain['provinsi'] ?></textarea>
</div>
<div class="form-group">
    <label for="agama">Agama</label>
    <select name="agama" class="form-control" required>
        <option value="">-- Pilih Agama --</option>
        <option value="Islam" <?= ($pemain['agama'] == 'Islam') ? 'selected' : '' ?>>Islam</option>
        <option value="Kristen" <?= ($pemain['agama'] == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
        <option value="Katolik" <?= ($pemain['agama'] == 'Katolik') ? 'selected' : '' ?>>Katolik</option>
        <option value="Hindu" <?= ($pemain['agama'] == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
        <option value="Budha" <?= ($pemain['agama'] == 'Budha') ? 'selected' : '' ?>>Budha</option>
        <option value="Konghucu" <?= ($pemain['agama'] == 'Konghucu') ? 'selected' : '' ?>>Konghucu</option>
        </select>
</div>
<div class="form-group">
    <label for="kewarganegaraan">Kewarganegaraan</label>
    <select name="kewarganegaraan" class="form-control" required>
        <option value="">-- Pilih kewarganegaraan --</option>
        <option value="Indonesia" <?= ($pemain['kewarganegaraan'] == 'Indonesia') ? 'selected' : '' ?>>Indonesia</option>
        <option value="Asing" <?= ($pemain['kewarganegaraan'] == 'Asing') ? 'selected' : '' ?>>Asing</option>
</select>
</div>
<div class="form-group">
    <label for="no_posisi">Posisi</label>
    <select name="no_posisi" class="form-control" required>
        <option value="">-- Pilih Posisi--</option>
        <option value="Kiper" <?= ($pemain['no_posisi'] == 'Kiper') ? 'selected' : '' ?>>Kiper</option>
        <option value="Bek Tengah" <?= ($pemain['no_posisi'] == 'Bek Tengah') ? 'selected' : '' ?>>Bek Tengah (center back)</option>
        <option value="Bek Penyapu" <?= ($pemain['no_posisi'] == 'Bek Penyapu') ? 'selected' : '' ?>>Bek Penyapu (swepeer) </option>
        <option value="Bek kiri" <?= ($pemain['no_posisi'] == 'Bek kiri') ? 'selected' : '' ?>>Bek kiri (left back)</option>
        <option value="Bek Kanan" <?= ($pemain['no_posisi'] == 'Bek Kanan') ? 'selected' : '' ?>>Bek Kanan (right back)</option>
        <option value="Gelandang Bertahan" <?= ($pemain['no_posisi'] == 'Gelandang Bertahan') ? 'selected' : '' ?>>Gelandang Bertahan (defending midfielder)</option>
        <option value="Gelandang Tengah" <?= ($pemain['no_posisi'] == 'Gelandang Tengah') ? 'selected' : '' ?>>Gelandang Tengah (center midfielder)</option>
        <option value="Gelandang Penyerang" <?= ($pemain['no_posisi'] == 'Gelandang Penyerang') ? 'selected' : '' ?>>Gelandang Penyerang (attacking midfielder)</option>
        <option value="Penyerang Sayap" <?= ($pemain['no_posisi'] == 'Penyerang Sayap') ? 'selected' : '' ?>>Penyerang Sayap (wing forward)</option>
        <option value="Penyerang tengah" <?= ($pemain['no_posisi'] == 'Penyerang tengah') ? 'selected' : '' ?>>Penyerang tengah (center forward)</option>
       
        </select>
</div>
<div class="form-group">
    <label for="kaki_terkuat">Kaki Terkuat</label>
    <select name="kaki_terkuat" class="form-control" required>
        <option value="">-- Pilih Kaki Terkuat --</option>
        <option value="Kaki Keduanya" <?= ($pemain['kaki_terkuat'] == 'Kaki Keduanya') ? 'selected' : '' ?>>Kaki Keduanya</option>
        <option value="Kanan" <?= ($pemain['kaki_terkuat'] == 'Kanan') ? 'selected' : '' ?>>Kanan</option>
        <option value="Kiri" <?= ($pemain['kaki_terkuat'] == 'Kiri') ? 'selected' : '' ?>>Kiri</option>
    </select>
</div>
<div class="form-group">
    <label for="tinggi_badan">Tinggi Badan (cm)</label>
    <input type="number" name="tinggi_badan" value="<?= $pemain['tinggi_badan'] ?>" class="form-control" required>
</div>
<div class="form-group">
    <label for="berat_badan">Berat Badan (kg)</label>
    <input type="number" name="berat_badan" value="<?= $pemain['berat_badan'] ?>" class="form-control" required>
</div>
<div class="form-group">
    <label for="klub_asal">Klub Asal</label>
    <input type="text" name="klub_asal" value="<?= $pemain['klub_asal'] ?>" class="form-control" required>
</div>
<div class="form-group">
    <label for="email_pemain">Email</label>
    <input type="email" name="email_pemain" value="<?= $pemain['email_pemain'] ?>" class="form-control" required>
</div>
<div class="form-group">
    <label for="no_whatsapp">No. WhatsApp</label>
    <input type="text" name="no_whatsapp" value="<?= $pemain['no_whatsapp'] ?>" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?= base_url('admin/pemain/lihatpemain/'.$pemain['id']) ?>" class="btn btn-secondary">Kembali</a>

<?= form_close() ?>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?=$this->endSection(); ?>