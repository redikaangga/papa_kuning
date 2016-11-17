<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?= $judul ?></h1>
<a href="<?=site_url('Siswa/addSiswa');?>" class="btn btn-primary">Tambah Siswa</a>
  <h2 class="sub-header">Section title</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data_siswa as $key => $value): ?>
        <tr>
          <td><?=$value->id_siswa?></td>
          <td><?=$value->nama?></td>
          <td><?=$value->alamat?></td>
          <td><?=$value->nama_kelas?></td>
          <td><a href="<?=site_url('siswa/edit/' . $value->id_siswa)?>" class="btn btn-info">Edit</a>
          <a href="<?=site_url('siswa/hapus/' . $value->id_siswa)?>" class="btn btn-danger" onclick = "return confirm('Yakin hapus data?');">Hapus
          </a> 
          </td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>