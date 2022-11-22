<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table            = 'project';
    protected $primaryKey       = "id";
    protected $returnType       = "array";
    protected $useAutoIncrement = true;
    protected $useTimestamps    = true;
    protected $allowedFields    = ['id', 'name', 'deskripsi', 'progress', 'deadline','manajer', 'divisi'];
}
