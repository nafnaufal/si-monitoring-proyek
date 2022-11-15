<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Task extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'deskripsi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 1000,
                'null'            => true,
            ],
            'progress'       => [
                'type'           => 'INT',
                'null'            => true,
            ],
            'start'       => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'deadline'       => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'pegawai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'project'       => [
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
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('pegawai', 'pegawai', 'username', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('project', 'project', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('task');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('task');
    }
}
