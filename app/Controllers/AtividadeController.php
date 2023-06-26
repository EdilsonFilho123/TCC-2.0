<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class AtividadeController extends BaseController
{
    use ResponseTrait;
    private $AtividadeModel;

    public function __construct()
    {
        $this->AtividadeModel = new \App\Models\AtividadeModel();
        $this->request = (Object) $this->request;
    }

    public function getAll()
    {
        $this->respond($this->AtividadeModel->findAll(), 200);
    }

    public function insert()
    {
        return die(var_dump($this->request->getJSON()));
    }

}
