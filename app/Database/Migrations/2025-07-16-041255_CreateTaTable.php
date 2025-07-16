<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_article' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_mahasiswa' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'id_dosen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'nama_pembimbing_manual' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'tahun_lulus' => [
                'type' => 'YEAR',
                'null' => false,
            ],
            'id_jurusan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_prodi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_kategory' => [ // 👉 UBAH SESUAI NAMA TABEL DAN FIELD
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kelengkapan_ta' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'bab1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'bab2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'bab3' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'bab4' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
           'bab5' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'bab6' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'lampiran' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'tgl_uploads' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id_article', true);
        $this->forge->addForeignKey('id_mahasiswa', 'tb_mahasiswa', 'id_mahasiswa', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_dosen', 'tb_dosen', 'id_dosen', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('id_jurusan', 'tb_jurusan', 'id_jurusan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_prodi', 'tb_prodi', 'id_prodi', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_kategory', 'kategory', 'id_kategory', 'CASCADE', 'CASCADE'); // 👉 PENTING: SESUAI NAMA TABEL & FIELD!

        $this->forge->createTable('tb_article');
    }

    public function down()
    {
        $this->forge->dropTable('tb_article');
    }
}
