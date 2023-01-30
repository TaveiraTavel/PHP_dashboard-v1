<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    private $usuModel;

    function __construct()
    {
        $this->usuModel = new UsuarioModel();
    }

    public function index()
    {
        $tempUsu = $this->usuModel
            ->where('idUsu', session()->get('idUsu'))
            ->first();

        $data['tempUsu'] = $tempUsu;

        echo View('templates/header');
        echo View('usuario/index', $data);
        echo View('templates/footer');
    }

    public function login()
    {
        echo View('usuario/login');
    }

    public function alterar()
    {
        $tempUsu = $this->usuModel
            ->where('idUsu', session()->get('idUsu'))
            ->first();
        
        $data['tempUsu'] = $tempUsu;

        echo View('templates/header');
        echo View('usuario/alterar', $data);
        echo View('templates/footer');
    }

    public function autenticar()
    {
        $request = $this->request->getVar();

        $tempUsu = $this->usuModel
            ->where('apelidUsu like binary', $request['apelidUsu']) // "like binary" para case sensitive
            ->first();

        $session = session();

        if (!empty($tempUsu) && password_verify($request['senhaUsu'], $tempUsu['senhaUsu'])) {
            $session->set('idUsu', $tempUsu['idUsu']); // setando idUsu na sessão
            $session->set('nomUsu', $tempUsu['nomUsu']); // setando nomUsu na sessão
            $session->setFlashdata('alert', 'success_login');

            return redirect()->to(
                base_url('/')
            );
        }
        $session->setFlashdata('alert', 'error_login');

        return redirect()->to(
            base_url('/usuario/login')
        );
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(
            base_url('/usuario/login')
        );
    }

    public function store()
    {
        $session = session();
        $request = $this->request->getVar();
        $idUsu = session()->get('idUsu');

        $tempUsu = $this->usuModel
            ->where('idUsu', $idUsu)
            ->first();

        if (password_verify($request['senhaAtual'], $tempUsu['senhaUsu'])){

            if ($request['senhaNova'] == $request['senhaNovaConf']){

                $this->usuModel
                    ->where('idUsu', $idUsu)
                    ->set('nomUsu', $request['nomUsu'])
                    ->set('apelidUsu', $request['apelidUsu'])
                    ->set('senhaUsu', password_hash($request['senhaNova'], PASSWORD_BCRYPT))
                    ->update();

                $session->set('nomUsu', $request['nomUsu']);
                $session->setFlashdata('alert', 'success_update');

                return redirect()->to(
                    base_url('/usuario')
                );

            } else {
                $session->setFlashdata('alert', 'error_confirmsenha');
            }
        } else {
            $session->setFlashdata('alert', 'error_senhaatual');
        }

        return redirect()->to(
            base_url('/usuario/alterar')
        );
    }
}
