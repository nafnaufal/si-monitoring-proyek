<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ManajerModel;
use App\Models\ProjectModel;
use App\Models\PegawaiModel;
use App\Models\TaskModel;
use App\Models\DivisiModel;

class Task extends BaseController
{
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
    public function insertTask(){
        $task = new TaskModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'progress' => 0,
            'deskripsi' => $this->request->getPost('desc'),
            'pegawai' => $this->request->getPost('employee'),
            'project' => $this->request->getPost('id_project'),
        ];
        $task->insert($data);
        // dd($data);
        return redirect()->to(base_url() . '/');
    }
}
