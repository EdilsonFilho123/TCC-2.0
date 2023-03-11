<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $testeModel;

    public function __construct()
    {
        $this->testeModel = new \App\Models\TesteModel();
    }
    public function index()
    {
        return print_r($this->testeModel->findAll());
    }
}
