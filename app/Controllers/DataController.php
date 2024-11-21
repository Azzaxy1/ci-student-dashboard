<?php

namespace App\Controllers;

use App\Models\ProgramStudiModel;
use App\Models\MahasiswaModel;
use App\Models\DosenModel;

class DataController extends BaseController
{
    public function programStudi()
    {
        $model = new ProgramStudiModel();
        $data['prodi'] = $model->findAll(10);
        return view('data/program_studi', $data);
    }

    public function mahasiswa()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->getMahasiswaWithProdi(10);
        return view('data/mahasiswa', $data);
    }

    public function dosen()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->getDosenWithProdi(10);
        return view('data/dosen', $data);
    }
}
