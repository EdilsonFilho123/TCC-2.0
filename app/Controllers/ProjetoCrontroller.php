<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class ProjetoController extends BaseController
{
    use ResponseTrait;
    private $ProjetoModel;

    public function __construct()
    {
        $this->ProjetoModel = new \App\Models\ProjetoModel();
    }

    public function getAll()
    {
        $this->respond($this->ProjetoModel->findAll(), 200);
    }

    public function insert()
    {
        return die(var_dump($this->request->getJSON()));
    }

}
