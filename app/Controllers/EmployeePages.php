<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;
use App\Models\TaskModel;
use App\Models\ProjectModel;
use App\Models\DivisiModel;



class EmployeePages extends BaseController
{
    public function index()
    {
        return view('pages/employee/index');
    }
    
    public function employeeTask()
    {
        $task  = new TaskModel();
        $getTask = $task->where([
            'pegawai' => session()->get('username'),
        ])->find();
        $data['data'] = $getTask;
        return view('pages/employee/task', $data);
    }
    public function detailTask()
    {
        $project = new TaskModel();
        $getProject = $project->where([
            'id' => $this->request->getPost('id'),
        ])->find();
        $data['data'] = $getProject[0];

        // dd($data);
        return view('pages/employee/taskdetail.php', $data);
    }
    public function editTask()
    {
        $div = new TaskModel();
        $divList = $div->where([
            'id' => $this->request->getPost('id'),
        ])->find();
        $data['data'] = $divList[0];
        // dd($data);
        return view('pages/employee/edittask.php', $data);
    }
    public function updateTask()
    {
        $session = session();
        $id        = $this->request->getPost('id');
        $name    = $this->request->getPost('name');
        $progress    = $this->request->getPost('progress');
        $desc        = $this->request->getPost('deskripsi');

        $data = [
            'name' => $name,
            'progress' => $progress,
            'deskripsi' => $desc,
        ];
        $userModel = new TaskModel();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return redirect()->to('employee/home');
        } else {
            echo "Something went wrong";
        }
    }
}
