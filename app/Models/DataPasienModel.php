<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPasienModel extends Model
{
    protected $table      = 'Datapasien';
    protected $primaryKey = 'NoReg';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['NoReg', 'Nama', 'NIK', 'JenisKelamin', 'TglLahir', 'Negara', 'NoTelp', 'TglHasil', 'Hasil', 'GenN', 'Orf1ab'];

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'regist',
    //             'label' => 'No Registrasi',
    //             'rules' => 'required|numeric'
    //         ],
    //         [
    //             'field' => 'ktp',
    //             'label' => 'No KTP',
    //             'rules' => 'required|numeric'
    //         ],
    //         [
    //             'field' => 'telp',
    //             'label' => 'No Telepon',
    //             'rules' => 'required|numeric'
    //         ]
    //     ];
    // }

    public function getDataPasien($NoReg = false)
    {
        if ($NoReg === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NoReg' => $NoReg]);
        }
    }

    public function simpan($data)
    {
        return $this->db->table('Datapasien')->insert($data);
    }

    public function editData($data, $NoReg)
    {
        $query = $this->db->table('Datapasien')->update($data, array('NoReg' => $NoReg));
        return $query;
    }

    public function hapus($NoReg)
    {
        $query = $this->db->table('Datapasien')->delete(array('NoReg' => $NoReg));
        return $query;
    }
}
