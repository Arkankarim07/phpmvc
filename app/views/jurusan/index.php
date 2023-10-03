<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahDataJurusan" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Jurusan
      </button>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/jurusan/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa" id="keyword" name="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>


  <h3 class="mt-3">Daftar Jurusan</h3>
  <div class="row">
    <div class="col mx-auto">
      <?php foreach ($data['jurusan'] as $jurusan) : ?>
        <ul class="list-group ">
          <li class="list-group-item"><?= $jurusan['jurusan'] ?>
            <a href="<?= BASEURL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="badge bg-danger text-bg-primary float-end m-lg-1" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>

            <a href="<?= BASEURL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="badge bg-warning text-bg-primary float-end m-lg-1 tampilModalUbahJurusan" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $jurusan['id']; ?>">Ubah</a>

          </li>

        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabelJurusan" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabelJurusan">Tambah Data Jurusan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data Jurusan</button>
        </form>
      </div>
    </div>
  </div>
</div>