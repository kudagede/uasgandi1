<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Baju extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'baju_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'baju_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'baju_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'baju_harga'          => [
                'type'           => 'INT',
                'constraint'     => 32,
                'null' => true,
            ],
            'baju_img'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('baju_id', true);
        $this->forge->createTable('baju');
    }

    public function down()
    {
        $this->forge->dropTable('baju');
    }
}
