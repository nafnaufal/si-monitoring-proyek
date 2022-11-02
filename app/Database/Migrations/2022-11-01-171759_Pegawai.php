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
            ],
            'tgl_lahir'       => [
                'type'           => 'DATE',
                'null'            => true,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
                'null'            => true,
            ],
            'no_telp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
                'null'            => true,
            ],
            'divisi'       => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'null'            => true,
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
        // $this->forge->addForeignKey('divisi', 'divisi', 'id', '', 'CASCADE');
        $this->forge->createTable('pegawai');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
