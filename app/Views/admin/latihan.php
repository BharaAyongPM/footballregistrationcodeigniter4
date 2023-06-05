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
		<h1 class="mt-5 mb-4">Form Jadwal Seleksi</h1>
		<form action="<?= site_url('admin/latihan/save') ?>" method="post">
			
			<div class="form-group">
				<label for="tempat">Tempat</label>
				<input type="text" class="form-control" id="tempat" name="tempat" required>
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal</label>
				<input type="date" class="form-control" id="tanggal" name="tanggal" required>
			</div>
			<div class="form-group">
				<label for="waktu">Waktu Mulai</label>
				<input type="time" class="form-control" id="waktu" name="waktu" required>
			</div>
			<div class="form-group">
				<label for="waktuend">Waktu Selesai</label>
				<input type="time" class="form-control" id="waktuend" name="waktuend" required>
			</div>
			<div class="form-group">
				<label for="team">Team</label>
				<input type="text" class="form-control" id="team" name="team" required>
			</div>
			
		
			<button type="submit" class="btn btn btn-primary">Selanjutnya</button>
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