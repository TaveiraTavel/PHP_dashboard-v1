<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'tbUsuario';
    protected $primaryKey = 'idUsu';
    protected $allowedFields = [
        'idUsu',
        'nomUsu',
        'apelidUsu',
        'senhaUsu'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
