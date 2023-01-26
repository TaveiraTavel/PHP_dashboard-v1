<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idProd' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true
            ],

            'nomProd' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'required' => true
            ],

            'descProd' => [
                'type' => 'TEXT',
                'required' => true
            ],

            'qtdProd' => [
                'type' => 'TINYINT',
                'required' => true
            ],

            'qtdMinProd' => [
                'type' => 'TINYINT',
                'required' => true
            ],

            'valCompProd' => [
                'type' => 'DOUBLE',
                'required' => true
            ],

            'valVendProd' => [
                'type' => 'DOUBLE',
                'required' => true
            ],

            'lucroProd' => [
                'type' => 'DOUBLE',
                'required' => true
            ],

            'validadeProd' => [
                'type' => 'DATE',
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

        $this->forge->addKey('idProd', true);
        $this->forge->createTable('tbProdutos');
    }

    public function down()
    {
        $this->forge->dropTable('tbProdutos');
    }
}
