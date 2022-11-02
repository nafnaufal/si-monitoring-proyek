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

    public function newProject()
    {
        return view('pages/newproject.php');
    }
    public function onGoingProject()
    {
        return view('pages/ongoingproject.php');
    }
    public function completeProject()
    {
        return view('pages/completeproject.php');
    }
    public function projectAlmanac()
    {
        return view('pages/projectalmanac.php');
    }
}
