<?php

namespace App\Models;

use CodeIgniter\Model;

class ManajerModel extends Model
{
    protected $table            = 'manajer';
    protected $primaryKey       = "username";
    protected $returnType       = "array";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['username', 'password', 'name', 'tgl_lahir', 'kelamin', 'alamat', 'email', 'no_telp'];
}
