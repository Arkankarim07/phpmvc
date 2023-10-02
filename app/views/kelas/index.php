<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/kelas/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa" id="keyword" name="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>


  <h3 class="mt-3">Daftar Kelas</h3>
  <div class="row">
    <div class="col mx-auto">
      <?php foreach ($data['kelas'] as $siswa) : ?>
        <ul class="list-group ">
          <li class="list-group-item"><?= $siswa['kelas'] ?>

            <a href="<?= BASEURL; ?>/kelas/detail/<?= $siswa['id']; ?>" class="badge text-bg-primary float-end m-lg-1">Details</a>
          </li>

        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/kelas/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="nama" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Tataboga">Tataboga</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data Siswa</button>
        </form>
      </div>
    </div>
  </div>
</div>