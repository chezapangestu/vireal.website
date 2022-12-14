<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{

    public function index()
    {
        return view('register');
    }

    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[5]|max_length[12]|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 5 Karakter',
                    'max_length' => '{field} Maksimal 12 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[12]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 8 Karakter',
                    'max_length' => '{field} Maksimal 12 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UserModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('name')
        ]);
        return redirect()->to('/signin');
    }
}
