<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg'); ?>

	<h1 class="page-header"><?= $judul ?></h1>

	<form class="form-horizontal" method="POST" action="<?=site_url('nilai/act_edit');?>">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Siswa</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" class="form-control" value="<?=$data_nilai->id_nilai?>">
				<select name="id_siswa" class="form-control">
					<option>-- Pilih Siswa --</option>
					<?php foreach ($data_siswa as $key => $value) { ?>
						<?php
							if ($value->id_siswa == $data_nilai->id_siswa) {
								$selected = 'selected';
							} else {
								$selected = '';
							}
						?>
						<option value="<?=$value->id_siswa?>" <?=$selected?>>
							<?=$value->nama?>	
						</option>						
					<?php } ?>
				</select>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Mata Pelajaran</label>
			<div class="col-sm-10">

				<select name="id_siswa" class="form-control">
					<option>-- Pilih Mapel --</option>
					<?php foreach ($data_mapel as $key => $value) { ?>
						<?php
							if ($value->id_mapel == $data_nilai->id_mapel) {
								$selected = 'selected';
							} else {
								$selected = '';
							}
						?>
						<option value="<?=$value->id_mapel?>" <?=$selected?>>
							<?=$value->mapel?>	
						</option>						
					<?php } ?>
				</select>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nilai</label>
			<div class="col-sm-10">
				<input type="text" name="total_nilai" class="form-control" placeholder="Nama" value="<?=$data_nilai->total_nilai?>">
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