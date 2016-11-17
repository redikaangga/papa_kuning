<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg'); ?>

	<h1 class="page-header"><?= $judul ?></h1>

	<form class="form-horizontal" method="POST" action="<?=site_url('mapel/act_tambah');?>">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="mapel" class="form-control" placeholder="Mata Pelajaran">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Guru</label>
			<div class="col-sm-10">

				<select name="id_guru" class="form-control">
					<option>-- Pilih Guru --</option>
					<?php foreach ($guru as $value) { ?>
						<option value="<?=$value->id_guru?>" >
							<?=$value->nama_guru?>	
						</option>
					<?php } ?>
				</select>

			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<a href="<?php echo site_url('mapel');?>" class="btn btn-default">Kembali</a>
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>
		</div>
	</form>

</div>