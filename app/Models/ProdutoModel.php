<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
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
    
    protected $validationRules = [
        'nomProd'       => 'required|max_length[128]|is_unique[tbProdutos.nomprod]',
        'descProd'      => 'required',
        'qtdProd'       => 'required|integer',
        'qtdMinProd'    => 'required|integer',
        'valCompProd'   => 'required|decimal',
        'valVendProd'   => 'required|decimal',
        'lucroProd'     => 'required|decimal',
        'validadeProd'  => 'date'
    ];
}
