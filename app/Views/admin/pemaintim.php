<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
	label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
}

label input[type="checkbox"] {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

label span {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  border: 1px solid #aaa;
}

label input[type="checkbox"]:checked ~ span:after {
  display: block;
}

label span:after {
  content: "";
  position: absolute;
  display: none;
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid #333;
  border-width: 0 3px 3px 0;
  transform: rotate(45deg);
} </style>
<link href="<?php echo base_url() ?>assets-admin/css/sb-admin-2.css" rel="stylesheet">
<div class="container">
		<h1 class="mt-5 mb-4">Form Masukan Pemain ke Tim</h1>
		<form action="<?= site_url('admin/latihan/masuk') ?>" method="post">
			
			<div class="form-group">

			<label for="team">Team Name:</label>
		<select name="id_latihan" id="id_latihan">
			<option value="">Select team</option>
			<?php foreach ($team as $teama): ?>
				<option value="<?= $teama['id'] ?>"><?= $teama['team'] ?></option>
			<?php endforeach; ?>
		</select>
      </div>
			<div class="form-group">
			<label for="id_pemain">Nama Pemain:</label>
		<select name="id_pemain" id="id_pemain">
			<option value="">Pilih Nama</option>
			<?php foreach ($pemain as $p): ?>
				<option value="<?= $p['id'] ?>"><?= $p['nama_lengkap'] ?></option>
			<?php endforeach; ?>
		</select>
      </div>
		<p>Silahkan Inputkan Nama Tim yang sudah di buat tadi dan masukan nama peserta lalu klik selanjutnya untuk input peserta lagi,Jika Sudah Selesai menginputkan silahkan tekan tombol selesai </p>
			<button type="submit" class="btn btn btn-primary">Selanjutnya</button>
      <a href="<?= base_url('admin/latihan/viewpeserta') ?>" class="btn btn-secondary">Selesai</a>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
	<script>
		$(document).ready(function () {
			bsCustomFileInput.init()
		})
	</script>
	<style> 
	.scrollable-checkbox-list {
  max-height: 200px;
  overflow-y: auto;
}
</style>

<?=$this->endSection(); ?>