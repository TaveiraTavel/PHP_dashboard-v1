<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Classe responsável pela criação do banco de dados
// da aplicação via PHPMyAdmin
class Clientes extends Migration
{
    // método de criação da tabela tbClientes através do comando:
    // ~$ php spark migrate
    public function up()
    {
        $this->forge->addField([
            'idCli' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'auto_increment' => true
            ],

            'nomCli' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'required' => true
            ],

            'dtNascCli' => [
                'type' => 'DATE',
                'required' => true
            ],

            'celCli' => [
                'type' => 'VARCHAR',
                'constraint' => 11
            ],

            'endCli' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'limitCredCli' => [
                'type' => 'DOUBLE',
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

        // métodos nativo da classe Migration do CodeIgniter
        // que, respectivamente, indica a chave primaria
        // e executa o comando de criação
        $this->forge->addKey('idCli', true);
        $this->forge->createTable('tbClientes');
    }

    // método de exclusão da tabela tbClientes através do comando:
    // ~$ php spark migrate:rollback
    public function down()
    {
        // método nativo da classe Migration do CodeIgniter
        // que de fato executa o comando de exclusão
        $this->forge->dropTable('tbClientes');
    }
}
