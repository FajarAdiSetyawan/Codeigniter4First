<?php

$this->extend('layout/template');
$this->section('content');
?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-3">Form Ubah Data Komik</h2>
      <form action="/komik/update/<?= $komik['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
        <div class="form-group">
          <label for="judul" class="bmd-label-floating">Judul</label>
          <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="penulis" class="bmd-label-floating">Penulis</label>
          <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('penulis'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="penerbit" class="bmd-label-floating">Penerbit</label>
          <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('penerbit'); ?>
          </div>
        </div>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
          </div>
          <div>
            <label for="sampul" class="custom-file"><span class="btn"><?= $komik['sampul']; ?></span></label>
            <input type="file" style="visibility: hidden;" class=" form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg" />
            <div class="invalid-feedback">
              <?= $validation->getError('sampul'); ?>
            </div>
            </span>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>