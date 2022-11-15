<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;
use App\Models\ProjectModel;
use App\Models\DivisiModel;

class Division extends BaseController
{
    public function deleteDivision()
    {
        $divisi = new DivisiModel();
        $divisi->where([
            'id' => $this->request->getPost('id'),
        ])->delete();
        return redirect()->to(previous_url());
    }
    public function insertDivision()
    {
        $division = new DivisiModel();
        $division->insert([
            'name' => $this->request->getPost('name'),
            'manajer' => session()->get('username'),
        ]);
        return redirect()->to(base_url() . '/');
    }
}