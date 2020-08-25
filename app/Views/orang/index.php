<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="my-3">Daftar Orang</h2>
    </div>
    <div class="col form-inline">
      <form action="" method="post" class=" ml-auto">
        <div class="input-group mb-3">
          <div class="form-group no-border ">
            <input type="text" class="form-control" placeholder="Cari" name="keyword">
          </div>
          <button type="submit" class="btn btn-white btn-just-icon btn-round mt-4" name="submit">
            <i class="material-icons">search</i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1 + (5 * ($currentPage - 1));
          foreach ($orang as $o) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $o['nama']; ?></td>
              <td><?= $o['alamat']; ?></td>
              <td><a href="" class="btn btn-raised btn-success">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <?= $pager->links('orang', 'orang_pagination'); ?>
</div>
</div>
</div>

<?= $this->endSection(); ?>