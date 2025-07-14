<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDosenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dosen' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nidk' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama_dosen' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_jurusan' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'id_prodi' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
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

        $this->forge->addKey('id_dosen', true);
        $this->forge->addForeignKey('id_jurusan', 'tb_jurusan', 'id_jurusan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_prodi', 'tb_prodi', 'id_prodi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_dosen');
    }

    public function down()
    {
        $this->forge->dropTable('tb_dosen');
    }
}
