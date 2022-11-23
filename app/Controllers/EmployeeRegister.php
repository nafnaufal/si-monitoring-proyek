<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class EmployeeRegister extends BaseController
{
    public function register()
    {
        return view('pages/employee/auth-register-basic.html');
    }
    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[pegawai.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'email' => [
                "rules" => "required|min_length[3]|max_length[100]|valid_email|is_unique[pegawai.email]"
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new PegawaiModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'divisi' => 3,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);
        return redirect()->to('employee/login');
    }
}
