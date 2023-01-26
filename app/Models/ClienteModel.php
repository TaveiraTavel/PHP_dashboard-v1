<?php

namespace App\Models;

use CodeIgniter\Model;

// classe responsável por modelar os dados utilizados 
// na aplicação mediante organização do banco de dados
class ClienteModel extends Model
{
    protected $table = 'tbClientes';
    protected $primaryKey = 'idCli';
    protected $allowedFields = [
        'idCli',
        'nomCli',
        'dtNascCli',
        'celCli',
        'endCli',
        'limitCredCli'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
