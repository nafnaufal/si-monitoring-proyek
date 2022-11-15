<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
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
                'null'            => true,
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
                'null'            => true,
            ],
            'divisi'       => [
                'type'           => 'INT',
                'unsigned'       => true,
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
        $this->forge->addPrimaryKey('username');
        $this->forge->addForeignKey('divisi', 'divisi', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pegawai');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
