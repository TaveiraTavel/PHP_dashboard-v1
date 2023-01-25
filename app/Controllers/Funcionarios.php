<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;

class Funcionarios extends BaseController
{
    private $funcModel;
    function __construct()
    {
        $this->funcModel = new FuncionarioModel();
    }

    public function index()
    {

        $data['tempFuncList'] = $this->funcModel
                                            ->findAll();

        echo View('templates/header');
        echo View('funcionarios/index', $data);
        echo View('templates/footer');
    }

    public function cadastrar()
    {
        echo View('templates/header');
        echo View('funcionarios/form');
        echo View('funcionarios/footer');
    }

    public function alterar($id)
    {
        $tempFunc = $this->funcModel
            ->where('idFunc', $id)
            ->first();
        
        $data['tempFunc'] = $tempFunc;

        echo View('templates/header');
        echo View('funcionarios/form', $data);
        echo View('templates/footer');
    }

    public function detalhar($id)
    {
        $tempFunc = $this->funcModel
            ->where('idFunc')
            ->first();
        
        $data['tempFunc'] = $tempFunc;

        echo View('templates/header');
        echo View('funcionarios/form', $data);
        echo View('templates/footer');
    }
};
