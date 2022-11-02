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
                'constraint'     => '12'
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
        $this->forge->addPrimaryKey('id', true);
        // $this->forge->addForeignKey('divisi', 'divisi', 'id', '', 'CASCADE');
        $this->forge->createTable('project');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('project');
    }
}
