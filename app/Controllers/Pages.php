<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ManajerModel;
use App\Models\ProjectModel;
use App\Models\PegawaiModel;
use App\Models\DivisiModel;

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

    public function newTask()
    {
        $project = new ProjectModel();
        $getProject = $project->where([
            'id' => $this->request->getPost('id'),
        ])->find()[0];

        $pegawai = new PegawaiModel();
        $getPeg = $pegawai->where([
            'divisi' => $getProject['divisi'],
        ])->find();


        $data['id_project'] = $this->request->getPost('id');
        $data['member'] = $getPeg;

        // dd($data);
        return view('pages/newtask.php', $data);
    }
}
