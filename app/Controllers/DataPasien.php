<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DataPasienModel;
use CodeItNow\BarcodeBundle\Utils\QrCode;

class DataPasien extends BaseController
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

    public function edit($id)
    {
        $model = new DataPasienModel;
        $data['row'] = $model->where('NoReg', $id)->first();
        echo view('editpasien', $data);
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
            'Orf1ab' => $this->request->getpost('orf1ab'),
        ];

        $pasien = new DataPasienModel();
        $simpan = $pasien->simpan($data);

        if ($simpan) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to('/datapasien');
        } else {
            echo "Error";
        }
    }

    public function update($NoReg)
    {
        $data = [
            'NoReg' => $NoReg,
            'Nama'  => $this->request->getpost('nama'),
            'NIK'   => $this->request->getpost('ktp'),
            'JenisKelamin' => $this->request->getpost('jk'),
            'TglLahir' => $this->request->getpost('tgl_lahir'),
            'Negara' => $this->request->getpost('negara'),
            'NoTelp' => $this->request->getpost('telp'),
            'TglHasil' => $this->request->getpost('tgl_hasil'),
            'Hasil' => $this->request->getpost('hasil'),
            'GenN' => $this->request->getpost('gen'),
            'Orf1ab' => $this->request->getpost('orf1ab'),
        ];

        $pasien = new DataPasienModel();
        $simpan = $pasien->editData($data, $NoReg);
        // dd($simpan);

        if ($simpan) {
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to('/datapasien');
        } else {
            echo "Error";
        }
    }

    public function delete($NoReg)
    {
        $pasien = new DataPasienModel();
        $data['Datapasien'] = $pasien->delete($NoReg);
        session()->setFlashdata('pesan', 'Data Telah Dihapus.');
        return redirect()->to('/datapasien');
    }

    public function qrcode($NoReg)
    {
        $model = new DataPasienModel;
        $qrCode = new QrCode();
        $url = base_url();

        $data = $model->where('NoReg', $NoReg)->first();
        $pesan = $url . '/hasil/' . $data['NoReg'];
        $qrCode
            ->setText($pesan)
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
            ->setLabel('Scan Qr Code')
            ->setLabelFontSize(16)
            ->setImageType(QrCode::IMAGE_TYPE_PNG);
        $data = '<img style="margin-left:auto;margin-right:auto;"  src="data:' . $qrCode->getContentType() . ';base64,' . $qrCode->generate() . '" id=img  download = Data.png />';

        return $data;
    }
    public function hasil($NoReg)
    {
        $model = new DataPasienModel;
        $data['row'] = $model->where('NoReg', $NoReg)->first();
        echo view('detailhasil', $data);
    }
}
