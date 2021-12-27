<?php

namespace App\Controllers;

use App\Models\DataPasienModel;

class Home extends BaseController
{
    public function index()
    {
        // return view('layouts/template');

        // $model = new DataPasienModel;
        // $data['Datapasien'] = $model->getDataPasien();
        // echo view('datapasien', $data);
        return view('login');
    }
}
