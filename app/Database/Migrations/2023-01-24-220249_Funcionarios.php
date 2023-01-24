<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Classe responsável pela criação do banco de dados
// da aplicação via PHPMyAdmin
class Funcionarios extends Migration
{
    // método de criação da tabela tbFuncionarios através do comando:
    // ~$ php spark migrate
    public function up()
    {
        $this->forge->addField([
            'idFunc' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true
            ],

            'nomFunc' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'required' => true
            ],

            'dtNascFunc' => [
                'type' => 'DATE',
                'required' => true
            ],

            'RGFunc' => [
                'type' => 'VARCHAR',
                'constraint' => 14,
                'required' => true
            ],

            'CPFFunc' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'required' => true
            ],

            'celFunc' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'required' => true
            ],

            'endFunc' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'required' => true
            ],

            'dtContratFunc' => [
                'type' => 'DATE',
                'required' => true
            ],
            
            'cargoFunc' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'required' => true
            ],

            'salarioFunc' => [
                'type' => 'DOUBLE',
                'required' => true
            ],

            'diaPagtoFunc' => [
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

        $this->forge->addKey('idFunc', true);
        $this->forge->createTable('tbFuncionarios');
    }

    // método de exclusão da tabela tbClientes através do comando:
    // ~$ php spark migrate:rollback
    public function down()
    {
        // método nativo da classe Migration do CodeIgniter
        // que de fato executa o comando de exclusão
        $this->forge->dropTable('tbFuncionarios');
    }
}
