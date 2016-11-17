<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg'); ?>

	<h1 class="page-header"><?= $judul ?></h1>

	<form class="form-horizontal" method="POST" action="<?=site_url('guru/act_edit');?>">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" class="form-control" value="<?=$data_guru->id_guru?>">

				<input type="text" name="nama_guru" class="form-control" placeholder="Nama" value="<?=$data_guru->nama_guru?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat_guru" class="form-control" value="<?=$data_guru->alamat_guru?>">
			</div>
		</div>	
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<a href="<?php echo site_url('guru');?>" class="btn btn-default">Kembali</a>
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>
		</div>
	</form>

</div>