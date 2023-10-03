<?php 
 class Jurusan extends Controller{
  public function index()
  {
    $data['judul'] = "Jurusan";
    $data['jurusan'] = $this->model('Jurusan_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('jurusan/index', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->model('Jurusan_model')->tambahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('Jurusan_model')->getMahasiswaById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Jurusan_model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil ', 'diubah', 'success');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Jurusan_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil ', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = "Daftar Jurusan";
    $data['jurusan'] = $this->model('Jurusan_model')->cariDataMahasiswa();
    $this->view('templates/header', $data);
    $this->view('jurusan/index', $data);
    $this->view('templates/footer');
  }
 }