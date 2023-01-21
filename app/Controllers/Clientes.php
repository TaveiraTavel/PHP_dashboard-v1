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

    // método responsável por inserir ou atualizar
    // no banco e redirecionar a navegação
    public function store()
    {
        $request = $this->request->getVar();

        if (isset($request['idCli'])) { // atualizar
            $this->CliModel
                ->where('idCli', $request['idCli'])
                ->set($request)
                ->update();
        } else { // inserir
            $this->CliModel
                ->insert($request);
        }

        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to(
            base_url('/clientes')
        );
    }

    // método responsável por excluir um registro
    // do banco de dados e redirecionar a navegação
    public function excluir()
    {
        $idCli = $this->request->getVar('idCli');

        $this->CliModel
            ->where('idCli', $idCli)
            ->delete();

        return redirect()->to(
            base_url('/clientes')
        );
    }

    public function detalhar($id)
    {
        $tempCli = $this->CliModel
            ->where('idCli', $id)
            ->first();

        $data['tempCli'] = $tempCli;

        echo View('templates/header');
        echo View('clientes/detalhar', $data);
        echo View('templates/footer');
    }
}
