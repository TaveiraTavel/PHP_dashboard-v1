<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Models\FuncionarioModel;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Home extends Controller
{
    private $cliModel;
    private $funcModel;
    private $prodModel;
    
    function __construct()
    {
        $this->cliModel = new ClienteModel();
        $this->funcModel = new FuncionarioModel();
        $this->prodModel = new ProdutoModel();
    }

    public function index()
    {
        $data['countCli'] = count(
            $this->cliModel->findAll()
        );

        $data['countFunc'] = count(
            $this->funcModel->findAll()
        );

        $data['countProd'] = count(
            $this->prodModel->findAll()
        );

        echo View('templates/header');
        echo View('home/index', $data);
        echo View('templates/footer');
    }
}
