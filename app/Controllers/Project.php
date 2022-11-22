<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;
use App\Models\TaskModel;
use App\Models\ProjectModel;
use App\Models\DivisiModel;

class Project extends BaseController
{
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
            'manajer' => session()->get('username'),
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
            'manajer' => session()->get('username'),
            'progress' => 100,
        ])->find();
        $data['data'] = $completeProject;
        return view('pages/completeproject.php', $data);
    }
    public function projectAlmanac()
    {
        $project = new ProjectModel();
        $projectAlmanac = $project->where([
            'manajer' => session()->get('username'),
        ])->find();
        $data['data'] = $projectAlmanac;
        return view('pages/projectalmanac.php', $data);
    }
    public function detailProject()
    {
        $project = new ProjectModel();
        $getProject = $project->where([
            'id' => $this->request->getPost('id'),
        ])->find();
        $data['data'] = $getProject[0];

        $task = new TaskModel();
        $getTask = $task->where([
            'project' => $this->request->getPost('id'),
        ])->findAll();

        $data['task'] = $getTask;
        // dd($data);
        return view('pages/projectdetail.php', $data);
    }
    public function deleteProject()
    {
        $project = new ProjectModel();
        $project->where([
            'id' => $this->request->getPost('id'),
        ])->delete();
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
            'manajer' => session()->get('username'),
            'divisi' => $this->request->getPost('divisi'),
        ]);
        return redirect()->to(base_url() . '/');
    }
}
