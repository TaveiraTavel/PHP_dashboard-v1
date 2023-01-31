<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produtos extends BaseController
{
    private $prodModel;
    function __construct()
    {
        $this->prodModel = new ProdutoModel();
    }

    public function index()
    {

        $data['tempProdList'] = $this->prodModel->findAll();

        echo View('templates/header');
        echo View('produtos/index', $data);
        echo View('templates/footer');
    }

    public function cadastrar()
    {
        $data['formErrors'] = session('formErrors');

        echo View('templates/header');
        echo View('produtos/form', $data);
        echo View('templates/footer');
    }

    public function alterar($id)
    {
        $tempProd = $this->prodModel
            ->where('idProd', $id)
            ->first();

        $data['tempProd'] = $tempProd;

        echo View('templates/header');
        echo View('produtos/form', $data);
        echo View('templates/footer');
    }

    public function detalhar($id)
    {
        $tempProd = $this->prodModel
            ->where('idProd', $id)
            ->first();

        $data['tempProd'] = $tempProd;

        echo View('templates/header');
        echo View('produtos/detalhar', $data);
        echo View('templates/footer');
    }

    public function store()
    {
        $request = $this->request
            ->getVar();

        $session = session();

        if (isset($request['idProd'])) {
            $this->prodModel
                ->where('idProd', $request['idProd'])
                ->set($request)
                ->update();

            $session->setFlashdata('alert', 'success_update');
        } else {
            if ($this->prodModel->insert($request)){
                $session->setFlashdata('alert', 'success_create');
            } else {
                return redirect()->back()
                    ->withInput()
                    ->with('formErrors', $this->prodModel->errors());
            }            
        }

        return redirect()->to(
            base_url('/produtos')
        );
    }

    public function excluir()
    {
        $idProd = $this->request->getVar('idProd');

        $this->prodModel
            ->where('idProd', $idProd)
            ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');

        return redirect()->to(
            base_url('/produtos')
        );
    }
};
