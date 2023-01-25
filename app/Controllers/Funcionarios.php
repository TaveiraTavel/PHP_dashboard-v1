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
};
