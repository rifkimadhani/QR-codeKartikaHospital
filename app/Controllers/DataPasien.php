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
        echo view('datapasien_view', $data);
    }
}
