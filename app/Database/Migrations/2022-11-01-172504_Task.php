<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Task extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT'
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
                'null'            => true,
            ],
            'progress'       => [
                'type'           => 'INT',
                'null'            => true,
            ],
            'deadline'       => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'start'       => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'pegawai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'            => true,
            ],
            'project'       => [
                'type'           => 'INT',
                'constraint'     => '12',
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
        $this->forge->addPrimaryKey('id', true);
        // $this->forge->addForeignKey('pegawai', 'pegawai', 'username', '', 'CASCADE');
        // $this->forge->addForeignKey('project', 'project', 'id', '', 'CASCADE');
        $this->forge->createTable('task');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('task');
    }
}
