<?php

namespace App\Models;

use CodeIgniter\Model;

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
    protected $createField = 'create_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
