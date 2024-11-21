<?php 
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model 
{
  protected $table = "mahasiswa";
  protected $primaryKey = "id";
  protected $allowFields = ["nama_mahasiswa", 'id_prodi'];

  public function getMahasiswaWithProdi($limit)
  {
    return $this->select('mahasiswa.*, program_studi.nama_prodi')
    ->join('program_studi', 'program_studi.id = mahasiswa.id_prodi')
    ->limit($limit)
    ->findAll();
  }
}

?>