<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_obat'           => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'nama_obat'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'deskripsi_obat'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'jenis_obat'       => [
                'type'              => 'ENUM',
                'constraint'        => "'Generic','NonGeneric'",
                'default'           => 'Generic'
            ],
            'dosis_obat'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '10',
            ],
            'status_obat'       => [
                'type'              => 'ENUM',
                'constraint'        => "'Tersedia','Kosong'",
                'default'           => 'Tersedia'
            ],
        ]);
        $this->forge->addKey('id_obat', TRUE);
        $this->forge->createTable('obat_0069', true);
    }

    public function down()
    {
        $this->forge->dropTable("obat_0069", true);
    }
}