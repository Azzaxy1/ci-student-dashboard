<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_dosen', 'id_prodi'];

    public function getDosenWithProdi($limit)
    {
        return $this->select('dosen.*, program_studi.nama_prodi')
            ->join('program_studi', 'program_studi.id = dosen.id_prodi')
            ->limit($limit)
            ->findAll();
    }
}
