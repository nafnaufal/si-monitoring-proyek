<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
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
            'deadline'       => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'manajer'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
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
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('manajer', 'manajer', 'username', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('divisi', 'divisi', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('project');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('project');
    }
}
