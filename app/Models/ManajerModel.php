<?php

namespace App\Models;

use CodeIgniter\Model;

class ManajerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'manajer';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = "object";
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'password', 'name', 'tgl_lahir', 'kelamin', 'alamat', 'email', 'no_telp'];

}
