<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class ArquivoController extends BaseController
{
    use ResponseTrait;
    private $ArquivoModel;

    public function __construct()
    {
        $this->ArquivoModel = new \App\Models\ArquivoModel();
    }

    public function getAll()
    {
        $this->respond($this->ArquivoModel->findAll(), 200);
    }

    public function insert()
    {
        return die(var_dump($this->request->getJSON()));
    }

}