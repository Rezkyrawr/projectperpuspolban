<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prodi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_prodi' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_jurusan' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id_prodi', true);
        $this->forge->addForeignKey('id_jurusan', 'tb_jurusan', 'id_jurusan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_prodi');
    }

    public function down()
    {
        $this->forge->dropTable('tb_prodi');
    }
}
