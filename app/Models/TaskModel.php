<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table            = 'task';
    protected $primaryKey       = "id";
    protected $returnType       = "array";
    protected $useAutoIncrement = true;
    protected $useTimestamps    = true;
    protected $allowedFields    = ['id', 'name', 'deskripsi', 'progress', 'deadline', 'start', 'pegawai', 'project'];
}
