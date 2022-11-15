<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ManajerModel;
use App\Models\ProjectModel;
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
    public function newProject()
    {
        $div = new DivisiModel();
        $divList = $div->where([
            'manajer' => session()->get('username'),
        ])->find();
        $data['data'] = $divList;
        // dd($divList);
        return view('pages/newproject.php', $data);
    }
    public function onGoingProject()
    {
        $project = new ProjectModel();
        $onGoingProject = $project->where([
            'divisi' => 3,
            'progress >=' => 0,
            'progress <' => 100,
        ])->find();
        $data['data'] = $onGoingProject;
        return view('pages/ongoingproject.php', $data);
    }
    public function completeProject()
    {
        $project = new ProjectModel();
        $completeProject = $project->where([
            'divisi' => 3,
            'progress' => 100,
        ])->find();
        $data['data'] = $completeProject;
        return view('pages/completeproject.php', $data);
    }
    public function projectAlmanac()
    {
        $project = new ProjectModel();
        $projectAlmanac = $project->where([
            'divisi' => 3,
        ])->find();
        $data['data'] = $projectAlmanac;
        return view('pages/projectalmanac.php', $data);
    }

    public function newDivision()
    {
        return view('pages/newdivision.php');
    }
    public function division()
    {
        $divisi = new DivisiModel();
        $getDiv = $divisi->where([
            'manajer' => session()->get('username'),
        ])->find();
        $data['data'] = $getDiv;
        return view('pages/division.php', $data);
    }
}
