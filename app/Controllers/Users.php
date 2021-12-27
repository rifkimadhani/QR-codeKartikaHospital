<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where(['email' => $email,])->first();
        if ($dataUser) {
            $verify_pass = password_verify($password,$dataUser->password);            
            if ($verify_pass) {
                $session = session();
                $session_user = [
                    'id'            => $dataUser->id,
                    'email'         => $dataUser->email,
                    'logged_in'     => TRUE
                ];
                $session->set($session_user);
                // var_dump($session->has('id'));
                // exit;
                
                return redirect()->to(base_url('/datapasien'));
            } else {
                echo ('salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
    }
   
}
