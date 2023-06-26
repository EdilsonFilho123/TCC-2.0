<?php

namespace App\Models;

use CodeIgniter\Model;

class ArquivoModel extends Model {
    protected $table = 'Arquivo';
    protected $primaryKey = 'arq_id';
    protected $allowedFields = [
        'arq_nome',
        'pjt_id'
    ];

    protected $validationRules = [
        'arq_nome' => 'is_unique[Arquivo.arq_nome]',
    ];
    protected $validationMessages = [
        'arq_nome' => [
            'is_unique' => "Esse nome de arquivo já foi cadastrado."
        ],
    ];
}


?>