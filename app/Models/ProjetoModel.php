<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjetoModel extends Model {
    protected $table = 'Projeto';
    protected $primaryKey = 'pjt_id';
    protected $allowedFields = [
        'pjt_titulo',
        'pjt_descricao',
        'pjt_termo_abertura',
        'pjt_status',
        'pjt_data_inicial',
        'pjt_data_final',
        'pjt_usu_resp_id'
    ];

    protected $validationRules = [
        'pjt_titulo' => 'required|min_length[3]|is_unique[Projeto.pjt_titulo]',
    ];
    protected $validationMessages = [
        'pjt_titulo' => [
            'required' => "O campo 'Título' deve ser preenchido.",
            'min_length' => "O título do arquivo deve conter, no mínimo, 3 letras.",
            'is_unique' => "Esse título já foi cadastrado."
        ],
    ];
}


?>