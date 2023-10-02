<?php
class Kelas extends Controller
{
  public function index()
  {
    $data['judul'] = "Kelas";
    $data['kelas'] = $this->model('Kelas_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('kelas/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = "Detail mahasiswa";
    $data['kelas'] = $this->model('Kelas_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('kelas/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->model('Kelas_model')->tambahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/kelas');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Kelas_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil ', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal ', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/kelas');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = "Daftar Kelas";
    $data['kelas'] = $this->model('Kelas_model')->cariDataMahasiswa();
    $this->view('templates/header', $data);
    $this->view('kelas/index', $data);
    $this->view('templates/footer');
  }
}
