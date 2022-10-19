<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Manajer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tgl_lahir'       => [
                'type'           => 'DATE',
                'null'            => true,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'no_telp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ]

        ]);
        $this->forge->addPrimaryKey('username', true);
        $this->forge->createTable('manajer');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('manajer');
    }
}
