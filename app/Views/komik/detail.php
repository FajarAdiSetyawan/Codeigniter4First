<?php

$this->extend('layout/template');

$this->section('content');
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="mt-3">Detail Komik</h2>
      <div class="card mb-3 bg-light" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/img/<?= $komik['sampul']; ?>" class="card-img mt-3">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-dark"><?= $komik['judul']; ?></h5>
              <p class="card-text text-dark"><b>Penulis: </b> <?= $komik['penulis']; ?></p>
              <p class="card-text text-dark"><small class="text-muted"><b>Penerbit: </b> <?= $komik['penerbit']; ?></small></p>
              <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning"><i class="far fa-edit mr-2"></i> Edit</a>
              <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin');"><i class="fas fa-trash mr-2"></i> Hapus</button>
              </form>
              <br>
              <a href="/komik">Kembali ke daftar komik</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>