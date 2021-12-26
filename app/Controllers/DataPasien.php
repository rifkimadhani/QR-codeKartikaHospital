<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DataPasienModel;

class DataPasien extends Controller
{
    public function index()
    {
        $model = new DataPasienModel;
        $data['Datapasien'] = $model->getDataPasien();
        echo view('datapasien', $data);
    }

    public function tambah()
    {
        echo view('addpasien');
    }

    public function simpan()
    {
        $data = [
            'NoReg' => $this->request->getpost('regist'),
            'Nama'  => $this->request->getpost('nama'),
            'NIK'   => $this->request->getpost('ktp'),
            'JenisKelamin' => $this->request->getpost('jk'),
            'TglLahir' => $this->request->getpost('tgl_lahir'),
            'Negara' => $this->request->getpost('negara'),
            'NoTelp' => $this->request->getpost('telp'),
            'TglHasil' => $this->request->getpost('tgl_hasil'),
            'Hasil' => $this->request->getpost('hasil'),
            'GenN' => $this->request->getpost('gen'),
            'orf1ab' => $this->request->getpost('orf1ab'),
        ];

        $pasien = new DataPasienModel();
        $simpan = $pasien->simpan($data);

        if($simpan)
        {
            return redirect()->to('/datapasien');
        }else{
            echo "Error mek";
        }
    }
}
