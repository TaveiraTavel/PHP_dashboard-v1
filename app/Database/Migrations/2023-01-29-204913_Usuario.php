<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idUsu' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'auto_increment' => true
            ],

            'nomUsu' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'required' => true
            ],

            'apelidUsu' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'required' => true
            ],

            'senhaUsu' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
                'required' => true
            ],

            'created_at' => [
                'type' => 'DATETIME'
            ],

            'updated_at' => [
                'type' => 'DATETIME'
            ],

            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('idUsu', true);
        $this->forge->createTable('tbUsuario');
    }

    public function down()
    {
        $this->forge->dropTable('tbUsuario');
    }
}
