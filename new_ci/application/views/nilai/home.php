<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?= $judul ?></h1>
<a href="<?=site_url('Nilai/addNilai');?>" class="btn btn-primary">Tambah Nilai</a>
  <h2 class="sub-header">Section title</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Siswa</th>
          <th>Mapel</th>
          <th>Nilai</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data_nilai as $key => $value): ?>
        <tr>
          <td><?=$value->id_nilai?></td>
          <td><?=$value->nama?></td>
          <td><?=$value->mapel?></td>
          <td><?=$value->total_nilai?></td>
          <td><a href="<?=site_url('nilai/edit/' . $value->id_nilai)?>" class="btn btn-info">Edit</a>
          <a href="<?=site_url('nilai/hapus/' . $value->id_nilai)?>" class="btn btn-danger" onclick = "return confirm('Yakin hapus data?');">Hapus
          </a> 
          </td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>