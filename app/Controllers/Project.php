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
        $project = new ProjectModel();
        $newProject = $project->where([
            'id' => $this->request->getPost('id'),
        ])->delete();
        $data['data'] = $newProject;
        return redirect()->to(previous_url());
    }
    public function insertProject()
    {
        $project = new ProjectModel();
        $project->insert([
            'name' => $this->request->getPost('name'),
            'progress' => 0,
            'deskripsi' => $this->request->getPost('desc'),
            'deadline' => $this->request->getPost('deadline'),
            'divisi' => $this->request->getPost('divisi'),
        ]);
        return redirect()->to(base_url() . '/');
    }
}
