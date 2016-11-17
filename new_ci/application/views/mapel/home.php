<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?= $judul ?></h1>
<a href="<?=site_url('Mapel/addMapel');?>" class="btn btn-primary">Tambah Mapel</a>
  <h2 class="sub-header">Section title</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Mata Pelajaran</th>
          <th>Guru</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data_mapel as $key => $value): ?>
        <tr>
          <td><?=$value->id_mapel?></td>
          <td><?=$value->mapel?></td>
          <td><?=$value->nama_guru?></td>
          <td><a href="<?=site_url('mapel/edit/' . $value->id_mapel)?>" class="btn btn-info">Edit</a>
          <a href="<?=site_url('mapel/hapus/' . $value->id_mapel)?>" class="btn btn-danger" onclick = "return confirm('Yakin hapus data?');">Hapus
          </a> 
          </td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>