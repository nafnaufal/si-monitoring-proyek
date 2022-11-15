<?php

namespace App\Models;

use CodeIgniter\Model;

class DivisiModel extends Model
{
    protected $table            = 'divisi';
    protected $primaryKey       = "id";
    protected $returnType       = "array";
    protected $useTimestamps    = true;
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'name', 'manajer'];
}
