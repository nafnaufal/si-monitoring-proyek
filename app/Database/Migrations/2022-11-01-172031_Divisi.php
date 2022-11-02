<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Divisi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '12',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'manajer'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
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
        // $this->forge->addForeignKey('manajer', 'manajer', 'username', '', 'CASCADE');
        $this->forge->createTable('divisi');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('divisi');
    }
}
