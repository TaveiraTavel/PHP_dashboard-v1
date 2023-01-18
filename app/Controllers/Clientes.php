<?php

namespace App\Controllers;

use App\Models\ClienteModel;

// classe responsável por fazer a comunicação entre as Views e as Models de
// forma que executa buscas/alterações no banco antes de enviar/receber os dados
class Clientes extends BaseController
{
    // construtor da variável CliModel
    private $CliModel;
    function __construct()
    {
        $this->CliModel = new ClienteModel();
    }

    // URL: /clientes/index
    public function index()
    {
        $tempCliList = $this->CliModel
            ->findAll();

        $data['tempCliList'] = $tempCliList;

        echo View('templates/header');
        echo View('clientes/index', $data);
        echo View('templates/footer');
    }

    // URL: /clientes/cadastrar
    public function cadastrar()
    {
        echo View('templates/header');
        echo View('clientes/cadastrar');
        echo View('templates/footer');
    }

    // URL: /clientes/alterar/{id}
    public function alterar($id)
    {
        $tempCli = $this->CliModel
            ->where('idCli', $id)
            ->first();

        $data['tempCli'] = $tempCli;

        echo View('templates/header');
        echo View('clientes/alterar', $data);
        echo View('templates/footer');
    }

    // método responsável por inserir/atualizar
    // no banco e redirecionar a navegação
    public function store()
    {
        $dados = $this->request->getVar();

        if (isset($dados['idCli']))
        {
            $this->CliModel
                ->where('idCli', $dados['idCli'])
                ->set($dados)
                ->update();
        }
        else
        {
            $this->CliModel
                ->insert($dados);
        }

        return redirect()->to('/clientes');
    }
    
}
