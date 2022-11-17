<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dosen'  => [
                'type'  => 'bigint',
                'auto_increment'    => true
            ],
            'nama_dosen'    => [
                'type'  => 'varchar',
                'constraint'    => 30
            ],
            'alamat'    => [
                'type'  => 'varchar',
                'constraint'    => 50
            ],
            'no_telepon'    => [
                'type'  => 'varchar',
                'constraint'    => 15
            ],
            'status' => [
                'type'  => 'enum',
                'constraint' => [
                    'tetap', 'kontrak'
                ]
            ]
        ]);
        $this->forge->addPrimaryKey('id_dosen');
        $this->forge->createTable('dosen', true);
    }

    public function down()
    {
        $this->forge->dropTable('dosen', true);
    }
}
