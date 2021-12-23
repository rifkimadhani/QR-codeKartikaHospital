<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UsersModel;
 
class Users extends Controller
{
    public function index()
    {
        $model = new UsersModel;
        $data['user'] = $model->getUsers();
        echo view('user_view', $data);
    }
 
}