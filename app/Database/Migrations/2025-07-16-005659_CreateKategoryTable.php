<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKategoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategory' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'kategory' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_kategory', true);
        $this->forge->createTable('kategory');
    }

    public function down()
    {
        $this->forge->dropTable('kategory');
    }
}
