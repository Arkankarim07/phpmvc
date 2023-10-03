<?php
class Guru_model
{

  private $table = 't_guru';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function ubahDataMahasiswa($data)
  {
    $query = "UPDATE t_guru SET
              guru = :guru
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('guru', $data['guru']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function tambahDataMahasiswa($data)
  {
    $query = "INSERT INTO t_guru VALUES('', :guru)";

    $this->db->query($query);
    $this->db->bind('guru', $data['guru']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM t_guru WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataMahasiswa()
  {
    $keyword = $_POST['keyword'];
    $query = 'SELECT * FROM t_guru WHERE guru LIKE :keyword';
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
