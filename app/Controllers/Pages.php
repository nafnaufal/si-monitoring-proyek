<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;

class Pages extends BaseController
{
    public function profile()
    {
        $users = new ManajerModel();
        $dataUser = $users->where([
            'username' => session()->get('username'),
        ])->find();
        $data['data'] = $dataUser;
        return view('pages/profile.php', $data);
    }
    public function updateProfile()
    {
        $session = session();
        $id        = $session->get('username');
        $name    = $this->request->getPost('name');
        $date    = $this->request->getPost('date');
        $email        = $this->request->getPost('email');
        $phone        = $this->request->getPost('phone');

        $data = [
                'name' => $name,
                'tgl_lahir' => $date,
                'email' => $email,
                'no_telp' => $phone,
            ];
        $userModel = new ManajerModel();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return redirect()->to('profile');
        } else {
            echo "Something went wrong";
        }
    }
}
