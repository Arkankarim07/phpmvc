<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahDataGuru" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Guru
      </button>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/guru/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari guru" id="keyword" name="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>


  <h3 class="mt-3">Daftar Guru</h3>
  <div class="row">
    <div class="col mx-auto">
      <?php foreach ($data['guru'] as $guru) : ?>
        <ul class="list-group ">
          <li class="list-group-item"><?= $guru['guru'] ?>
            <a href="<?= BASEURL; ?>/guru/hapus/<?= $guru['id']; ?>" class="badge bg-danger text-bg-primary float-end m-lg-1" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>

            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $guru['id']; ?>" class="badge bg-warning text-bg-primary float-end m-lg-1 tampilModalUbahGuru" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $guru['id']; ?>">Ubah</a>

            <a href="<?= BASEURL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge text-bg-primary float-end m-lg-1">Details</a>
          </li>

        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabelGuru" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelGuru">Tambah Data Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/guru/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="guru" name="guru">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data Guru</button>
        </form>
      </div>
    </div>
  </div>
</div>