<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?= $judul ?></h1>
<a href="<?=site_url('Guru/addGuru');?>" class="btn btn-primary">Tambah Guru</a>
  <h2 class="sub-header">Section title</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data_guru as $key => $value): ?>
        <tr>
          <td><?=$value->id_guru?></td>
          <td><?=$value->nama_guru?></td>
          <td><?=$value->alamat_guru?></td>
          <td><a href="<?=site_url('guru/edit/' . $value->id_guru)?>" class="btn btn-info">Edit</a>
          <a href="<?=site_url('guru/hapus/' . $value->id_guru)?>" class="btn btn-danger" onclick = "return confirm('Yakin hapus data?');">Hapus
          </a> 
          </td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>