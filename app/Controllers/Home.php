<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        echo View('templates/header');
        echo View('home/index');
        echo View('templates/footer');
    }
}
