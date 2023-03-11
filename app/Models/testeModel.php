<?php

namespace App\Models;

use CodeIgniter\Model;

class TesteModel extends Model {
    protected $table = 'produtos';
    protected $primaryKey = 'teste_id';
    protected $allowedFields = ['teste_id', 'teste_nome'];


    // protected $validationRules = [
    //     'nome' => 'required|min_length[3]|is_unique[produtos.nome]',
    //     'valor' => 'required|numeric',
    // ];
    // protected $validationMessages = [
    //     'nome' => [
    //         'required' => "Campo 'Nome' deve ser preenchido !!!",
    //         'min_length' => "O nome do produto deve conter, no minimo, 3 letras !!!",
    //         'is_unique' => "Este nome já foi cadastrado !!!"
    //     ],
        
    //     'valor' => [
    //         'required' => "Campo 'Nome' deve ser preenchido !!!",
    //         'numeric' => "O valor só pode conter numeros (e '.' para casas decimais) !!!"
    //     ],
    // ];
}


?>