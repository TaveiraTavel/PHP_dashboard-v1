<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table = "tbProdutos";
    protected $primaryKey = "idProd";
    protected $allowedFields = [
        'idProd',
        'nomProd',
        'descProd',
        'qtdProd',
        'qtdMinProd',
        'valCompProd',
        'valVendProd',
        'lucroProd',
        'validadeProd'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";
    protected $deletedField = "deleted_at";
}
