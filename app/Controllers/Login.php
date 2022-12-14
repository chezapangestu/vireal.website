<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    public function index()
    {
        return view('signin');
    }

    public function sign(){
        $user = new UserModel();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $dataUser = $user->where([
            'username' => $username,
            ])->first();
            // var_dump($password);
            // echo "\n";
            // var_dump($dataUser['password']);
            // exit();
        if ($dataUser) {
            if ($password == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'name' => $dataUser['nama'],
                    'logged_in' => TRUE
                ]);
                if($dataUser['role'] == 1){
                    return redirect()->to('/admin');
                }else{
                    return redirect()->to(base_url());
                }
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->to('/signin');
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->to('/signin');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }

}
