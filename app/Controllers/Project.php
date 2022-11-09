<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;
use App\Models\ProjectModel;

class Project extends BaseController
{
    public function deleteProject()
    {
        // $project = new ProjectModel();
        // $newProject = $project->where([
        //     'id' => $this->request->getPost('id'),
        // ])->delete();
        // $data['data'] = $newProject;
        dd($this->request->getPost('id'));
        // return redirect()->to(previous_url());
    }
    public function insertProject()
    {
        $project = new ProjectModel();
        $m = $project->where([
            'divisi' => 1,
        ])->orderBy('id', 'DESC')->find();
        $project->insert([
            'id' => (int)$m[0]['id'] + 1,
            'name' => $this->request->getPost('name'),
            'progress' => 0,
            'deskripsi' => $this->request->getPost('desc'),
            'deadline' => $this->request->getPost('deadline'),
            'divisi' => $this->request->getPost('divisi'),
        ]);
        return redirect()->to(base_url() . '/');
    }
}
