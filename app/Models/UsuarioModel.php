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
        'usu_imagem'
    ];

    protected $validationRules = [
        'usu_nome' => 'required|min_length[3]|',
        'usu_email' => 'required|min_length[10]|is_unique[Usuario.usu_email]',
    ];
    protected $validationMessages = [
        'usu_nome' => [
            'required' => "Campo 'Nome' deve ser preenchido.",
            'min_length' => "O nome do usuário deve conter, no mínimo, 3 letras.",
        ],
        'usu_email' => [
            'required' => "Email não pode ser nulo.",
            'min_length' => "O email deve conter, no mínimo, 10 letras.",
            'is_unique' => "Este nome já foi cadastrado."
        ],
    ];

    public function getUsuario($email, $senha){
        return $this->db->table('usuario')->where('usu_email', $email)->where('usu_senha', $senha)->get()->getRow();
    }
}

?>