<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;

class Login extends BaseController
{
    public function login()
    {
        return view('pages/auth-login-basic.html');
    }
    public function lupa_password()
    {
        return view('pages/auth-forgot-password-basic.html');
    }
    public function process()
    {
        $users = new ManajerModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        // dd($dataUser);
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            // return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url().'/login');
    }
}
