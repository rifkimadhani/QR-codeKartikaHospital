<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPasienModel extends Model
{
    protected $table      = 'Datapasien';

    public function getDataPasien($NoReg = false)
    {
        if ($NoReg === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NoReg' => $NoReg]);
        }
    }
}
