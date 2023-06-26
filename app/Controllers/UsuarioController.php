<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class UsuarioController extends BaseController
{
    use ResponseTrait;
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function getAll()
    {
        $this->respond($this->usuarioModel->findAll(), 200);
    }

    public function insert()
    {
        return die(var_dump($this->request->getJSON()));
    }

}
