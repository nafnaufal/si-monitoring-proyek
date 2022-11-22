<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;
use App\Models\PegawaiModel;
use App\Models\ProjectModel;
use App\Models\DivisiModel;


class Division extends BaseController
{
    public function detailDivision()
    {
        $divisi = new DivisiModel();
        $getDivisi = $divisi->where([
            'id' => $this->request->getPost('id'),
        ])->find();
        $data['data'] = $getDivisi[0];

        $pegawai = new PegawaiModel();
        $getPeg = $pegawai->where([
            'divisi' => $this->request->getPost('id'),
        ])->find();
        $data['member'] = $getPeg;
        // dd($this->request->getPost('id'));
        return view('pages/divisiondetail.php', $data);
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
    public function addMember()
    {
        $data = [
            'divisi' => $this->request->getPost('id'),
        ];
        
        $userModel = new PegawaiModel();
        $userModel->update($this->request->getPost('username'), $data);

        return redirect()->to(base_url() . '/');
    }

    public function deleteMember()
    {

        $data = [
            'divisi' => 3,
        ];
        
        $userModel = new PegawaiModel();
        $userModel->update($this->request->getPost('id'), $data);

        return redirect()->to(base_url() . '/');
    }
}