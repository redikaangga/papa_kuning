<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg'); ?>

	<h1 class="page-header"><?= $judul ?></h1>

	<form class="form-horizontal" method="POST" action="<?=site_url('nilai/act_tambah');?>">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Siswa</label>
			<div class="col-sm-10">

				<select name="id_siswa" class="form-control">
					<option>-- Pilih Siswa --</option>
					<?php foreach ($siswa as $value) { ?>
						<option value="<?=$value->id_siswa?>" >
							<?=$value->nama?>	
						</option>
					<?php } ?>
				</select>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Mata Pelajaran</label>
			<div class="col-sm-10">

				<select name="id_mapel" class="form-control">
					<option>-- Pilih Mapel --</option>
					<?php foreach ($nilai as $value) { ?>
						<option value="<?=$value->id_mapel?>" >
							<?=$value->mapel?>	
						</option>
					<?php } ?>
				</select>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Total Nilai</label>
			<div class="col-sm-10">
				<input type="text" name="total_nilai" class="form-control" placeholder="Nilai">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<a href="<?php echo site_url('nilai');?>" class="btn btn-default">Kembali</a>
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>
		</div>
	</form>

</div>