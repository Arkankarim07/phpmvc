<?php 
class About extends Controller{
  public function index($nama = 'Arkan', $pekerjaan = 'siswa', $umur = 16)
  {
    $data['nama'] = $nama;
    $data['umur'] = $umur;
    $data['pekerjaan'] = $pekerjaan;
    $data['judul'] = "About";
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

}