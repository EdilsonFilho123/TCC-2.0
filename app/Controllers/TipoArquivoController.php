<?php

namespace App\Controllers;

class TipoArquivoController extends BaseController
{
    private $TipoArquivoModel;

    public function __construct()
    {
        $this->TipoArquivoModel = new \App\Models\TipoArquivoModel();
    }

    public function getAll()
    {
        return print_r($this->TipoArquivoModel->findAll());
    }
    
    public function insert()
    {
        return print_r($this->TipoArquivoModel->insert($this->request->getPost()));
    }
}
