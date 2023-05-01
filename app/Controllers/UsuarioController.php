<?php

namespace App\Controllers;

class UsuarioController extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function getAll()
    {
        return die(json_encode($this->usuarioModel->findAll()));
    }

    public function insert()
    {
        return print_r($this->usuarioModel->insert($this->request->getPost()));
    }

}
