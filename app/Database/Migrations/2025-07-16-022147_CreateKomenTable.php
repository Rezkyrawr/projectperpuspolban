<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKomenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_comment' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'komen' => [
                'type' => 'TEXT',
            ],
            'id_article' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_comment', true);
        // $this->forge->addForeignKey('id_user', 'tb_user', 'id_user', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_article', 'articles', 'id_article', 'CASCADE', 'CASCADE'); // pastikan tabel `articles` ada
        $this->forge->createTable('tb_komen');
    }

    public function down()
    {
        $this->forge->dropTable('tb_komen');
    }
}
