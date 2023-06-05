<?=$this->extend('admin/layout'); ?>

<?=$this->section('content'); ?>
<div class="sb-sidenav-footer">
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Pemain ke jadwal </h6>$team
    </div>

    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <h2>Tambah Pemain ke Team</h2>
	<form action="<?php echo base_url('admin/latihan/team');?>" method="post">
  <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/latihan/team/') ?>">

		<table>
			<tr>
				<td>Nama Pemain:</td>
				<td>
					<select name="nama_lengkap">
						<?php foreach($pemain as $p): ?>
							<option value="<?php echo $p['id']; ?>"><?php echo $p['nama_lengkap']; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
      <tr>
				<td>Foto Pemain:</td>
				<td>

				</td>
			</tr>
			<tr>
				<td>Tim:</td>
				<td>
        <select name="team">
        <?php foreach($team as $t): ?>
						
          <option value="<?php echo $t['team']; ?>"><?php echo $t['team']; ?></option>
              <?php endforeach; ?>
					
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
<!-- End of Main Content -->
<?=$this->endSection(); ?>