<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    private $usuModel;

    function __construct()
    {
        $this->usuModel = new UsuarioModel();
    }
    public function index()
    {
        echo View('login/index');
    }

    public function autenticar()
    {
        $request = $this->request->getVar();

        $tempUsu = $this->usuModel
            ->where('apelidUsu like binary', $request['apelidUsu']) 
            ->where('senhaUsu like binary', $request['senhaUsu']) // "like binary" para case sensitive
            ->first();

        $session = session();

        if (!empty($tempUsu)) {
            $session->set('nomUsu', $tempUsu['nomUsu']);
            $session->setFlashdata('alert', 'success_login');

            return redirect()->to(
                base_url('/')
            );
        } else {
            $session->setFlashdata('alert', 'error_login');

            return redirect()->to(
                base_url('/login')
            );
        }
    }
}
