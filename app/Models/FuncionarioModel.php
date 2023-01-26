<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table = "tbFuncionarios";
    protected $primaryKey = "idFunc";
    protected $allowedFields = [
        'idFunc',
        'nomFunc',
        'dtNascFunc',
        'RGFunc',
        'CPFFunc',
        'celFunc',
        'endFunc',
        'dtContratFunc',
        'cargoFunc',
        'salarioFunc',
        'diaPagtoFunc'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";
    protected $deletedField = "deleted_at";
}
