<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="my-3">Daftar Komik</h2>
      <a href="/komik/create" class="btn btn-primary my-3"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
      <?php if (session()->getFlashData('pesan')) : ?>
        <div class="alert alert-success">
          <div class="container">
            <div class="alert-icon">
              <i class="fas fa-check"></i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b><?= session()->getFlashData('pesan'); ?></b>
          </div>
        </div>
      <?php endif; ?>
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($komik as $k) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="/img/<?= $k['sampul']; ?>" alt="" srcset="" class="sampul"></td>
              <td><?= $k['judul']; ?></td>
              <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-raised btn-success">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>