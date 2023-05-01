<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'Usuario';
    protected $primaryKey = 'usu_id';
    protected $allowedFields = [
        'usu_nome',
        'usu_email',
        'usu_senha',
        'usu_imagem',
        'usu_nivel'
    ];

    protected $validationRules = [
        'usu_nome' => 'required|min_length[3]|',
        'usu_email' => 'required|min_length[3]|is_unique[usuario.usu_email]',
    ];
    protected $validationMessages = [
        'usu_nome' => [
            'required' => "Campo 'Nome' deve ser preenchido !!!",
            'min_length' => "O nome do usuario deve conter, no minimo, 3 letras !!!",
        ],
        'usu_email' => [
            'required' => "Email não pode ser nulo !!!",
            'min_length' => "O email do produto deve conter, no minimo, 10 letras !!!",
            'is_unique' => "Este nome já foi cadastrado !!!"
        ],
    ];
}

?>