<?php

namespace App\Models;

use CodeIgniter\Model;

class AtividadeModel extends Model {
    protected $table = 'Atividade';
    protected $primaryKey = 'atv_id';
    protected $allowedFields = [
        'atv_titulo',
        'atv_descricao',
        'atv_status',
        'pjt_id',
        'usu_resp_id'
    ];

    protected $validationRules = [
        'atv_titulo' => 'required|min_length[3]|is_unique[Atividade.atv_titulo]',
    ];
    protected $validationMessages = [
        'atv_titulo' => [
            'required' => "O campo 'Título' deve ser preenchido.",
            'min_length' => "O título do arquivo deve conter, no mínimo, 3 letras.",
            'is_unique' => "Esse título já foi cadastrado."
        ],
    ];
}


?>