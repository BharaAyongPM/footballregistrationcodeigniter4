
<?=$this->extend('layout/template2'); ?>


<?=$this->section('content'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">


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

<html>
<head>
	<title>Form Pendaftaran Pemain</title>

</head>
<body >
<div class="formbold-main-wrapper ">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
  <img class="img-fluid" src="<?php echo base_url() ?>assets/img/banner.jpeg" width="500" height="130" alt="">
	<h2>Form Pendaftaran Pemain</h2>
  <?php if (session()->get('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        Data Pemain Berhasil <strong><?= session()->getFlashdata("message"); ?></strong>
  </div>
  <?php endif; ?>

  <br>
  <p>
       <P> Selamat Datang di From Pendaftaran Seleksi
          Jakarta raya League Kelahiran 2002-2024</P>
            <br><br>
        
          Silahkan isi data-data berikut dengan benar
      
        <br><br>
       
  <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
	<form action="<?php echo base_url() ?>daftar/savepemain" method="post" enctype="multipart/form-data">
	<div class="formbold-input">
        <label for="nama_lengkap">Nama Lengkap (SESUAI KTP)</label>
        <input type="text" name="nama_lengkap" class="formbold-form-input" id="nama_lengkap" value="<?= set_value('nama_lengkap') ?>">
    </div>
    <div class="formbold-input">
        <label for="tempat_lahir">Tempat Lahir (SESUAI KTP)</label>
        <input type="text" name="tempat_lahir" class="formbold-form-input" id="tempat_lahir" value="<?= set_value('tempat_lahir') ?>">
    </div>
    <div class="formbold-input">
        <label for="tanggal_lahir">tanggal Lahir (SESUAI KTP)</label>
        <input type="date" name="tanggal_lahir" class="formbold-form-input" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
      <div class="formbold-input">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="formbold-form-input" id="jenis_kelamin"value="<?= set_value('jenis_kelamin') ?>">
           
            <option value="Laki-laki"checked>Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="formbold-input">
        <label for="alamat_lengkap">Alamat Lengkap (SESUAI KTP)</label>
        <textarea name="alamat_lengkap" class="formbold-form-input" id="alamat_lengkap"value="<?= set_value('alamat_lengkap') ?>"></textarea>
    </div>
    <div class="formbold-input">
        <label for="kabupaten">Kabupaten/Kota (SESUAI KTP)</label>
        <input type="text" name="kabupaten" class="formbold-form-input" id="kabupaten"value="<?= set_value('kabupaten') ?>">
    </div>
    <div class="formbold-input">
        <label for="provinsi">Provinsi (SESUAI KTP)</label>
        <input type="text" name="provinsi" class="formbold-form-input" id="provinsi"value="<?= set_value('provinsi') ?>">
    </div>
    <div class="formbold-input">
        <label for="agama">Agama</label>
        <select name="agama" class="formbold-form-input" id="agama"value="<?= set_value('agama') ?>">
        <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
  </select>
    </div>
    <div class="formbold-input">
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <select name="kewarganegaraan" class="formbold-form-input"  id="kewarganegaraan"value="<?= set_value('kewarganegaraan') ?>">
        <option value="Indonesia"checked>Indonesia</option>
        <option value="Asing">Asing</option>
  </select>
    </div>
    <div class="formbold-input">
        <label for="no_posisi">Posisi pemain</label>
        <select name="no_posisi" class="formbold-form-input"  id="no_posisi"value="<?= set_value('no_posisi') ?>">
        <option value="">Pilih Posisi</option>
            <option value="Kiper">Kiper</option>
            <option value="Bek Tengah">Bek Tengah (center back)</option>
            <option value="Bek Penyapu">Bek Penyapu (swepeer) </option>
            <option value="Bek kiri">Bek kiri (left back)</option>
            <option value="Bek Kanan">Bek Kanan (right back)</option>
            <option value="Gelandang Bertahan">Gelandang Bertahan (defending midfielder)</option>
            <option value="Gelandang Tengah">Gelandang Tengah (center midfielder)</option>
            <option value="Gelandang Penyerang">Gelandang Penyerang (attacking midfielder)</option>
            <option value="Penyerang Sayap">Penyerang Sayap (wing forward)</option>
            <option value="Penyerang tengah">Penyerang tengah (center forward)</option>
  </select>
    </div>
    <div class="formbold-input">
        <label for="kaki_terkuat">Kaki Terkuat</label>
        <select name="kaki_terkuat" class="formbold-form-input"  id="kaki_terkuat"value="<?= set_value('kaki_terkuat') ?>">
            <option value="">Pilih Kaki Terkuat</option>
            <option value="Kaki Keduanya">Kaki Keduanya</option>
            <option value="Kanan">Kanan</option>
            <option value="Kiri">Kiri</option>
            
        </select>
    </div>
    <div class="formbold-input">
    <label for="tinggi_badan">Tinggi Badan (cm)</label>
    <input type="number" name="tinggi_badan" class="formbold-form-input" id="tinggi_badan"value="<?= set_value('tinggi_badan') ?>">
</div>
<div class="formbold-input">
    <label for="berat_badan">Berat Badan (kg)</label>
    <input type="number" name="berat_badan" class="formbold-form-input" id="berat_badan"value="<?= set_value('berat_badan') ?>">
</div>
<div class="formbold-input">
    <label for="klub_asal">Klub Asal</label>
    <input type="text" name="klub_asal" class="formbold-form-input" id="klub_asal"value="<?= set_value('klub_asal') ?>">
</div>
<div class="formbold-input">
    <label for="email_pemain">Email</label>
    <input type="email" name="email_pemain" class="formbold-form-input" id="email_pemain"value="<?= set_value('email_pemain') ?>">
</div>
<div class="formbold-input">
    <label for="no_whatsapp">No. WhatsApp</label>
    <input type="number" name="no_whatsapp" class="formbold-form-input" id="no_whatsapp"value="<?= set_value('no_whatsapp') ?>">
</div>
<br> </br>
        <P>-Maksimal Ukuran File 2MB  </p>
        <p> -File *KTP *PDF *FOTO (Di Haruskan Format nama)</p> 
        <p> Contoh : namakamu_KTP.</P>  
        
<br> </br>
<div class="formbold-input">
    <label for="dokumen_ktp">Dokumen KTP foto(jpg/png)MAX 2 MB</label>
    <input type="file" name="dokumen_ktp" class="formbold-form-input" id="dokumen_ktp"value="<?= set_value('dokumen_ktp') ?>">
</div>
<div class="formbold-input">
    <label for="foto">Foto 3x4 (jpg/png)MAX 2 MB</label>
    <input type="file" name="foto" class="formbold-form-input" id="foto"value="<?= set_value('foto') ?>">
</div>
<div class="formbold-input">
    <label for="surat_rekomendasi_club">Surat Rekomendasi Club (pdf)MAX 2 MB</label>
    <input type="file" name="surat_rekomendasi" class="formbold-form-input" id="surat_rekomendasi_club"value="<?= set_value('surat_rekomendasi') ?>">
</div>

<button type="submit" class="formbold-btn">DAFTAR</button>
  </body>
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
    color: black;
    background-image: url("<?php echo base_url() ?>public/assets/img/bg.png");
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1px;
    
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    
    padding: 40px;
    background: white;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 30px;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    text-align: center;
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
</style>
<?=$this->endSection(); ?>