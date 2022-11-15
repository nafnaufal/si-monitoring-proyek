<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Manajer;
use App\Models\ManajerModel;
use App\Models\ProjectModel;

class Division extends BaseController
{
    public function deleteDivision()
    {
        return redirect()->to(previous_url());
    }
    public function insertDivision()
    {
        return redirect()->to(base_url() . '/');
    }
}