<?php
class Guru extends Controller
{
  public function index()
  {
    $data['judul'] = "Daftar Guru";
    $data['guru'] = $this->model('Guru_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('guru/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = "Detail Guru";
    $data['guru'] = $this->model('Guru_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('guru/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->model('Guru_model')->tambahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/guru');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Guru_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil ', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/guru');
      exit;
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('Guru_model')->getMahasiswaById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Guru_model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil ', 'diubah', 'success');
      header('Location: ' . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/guru');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = "Daftar guru";
    $data['guru'] = $this->model('Guru_model')->cariDataMahasiswa();
    $this->view('templates/header', $data);
    $this->view('guru/index', $data);
    $this->view('templates/footer');
  }
}
