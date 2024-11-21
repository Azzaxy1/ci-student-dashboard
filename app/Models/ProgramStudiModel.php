<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProgramStudiModel extends Model 
{
  protected $table = 'program_studi';
  protected $primaryKey = "id";
  protected $allowFields = ["nama_prodi"];
}

