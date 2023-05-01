<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoArquivoModel extends Model {
    protected $table = 'Tipo_Arquivo';
    protected $primaryKey = 'typ_id';
    protected $allowedFields = ['typ_descricao'];

    protected $validationRules = [
        'typ_descricao' => 'required|min_length[3]|is_unique[Tipo_Arquivo.typ_descricao]',
    ];
    protected $validationMessages = [
        'typ_descricao' => [
            'required' => "Campo 'descricao' deve ser preenchido !!!",
            'min_length' => "A descricao do arquivo deve conter, no minimo, 3 letras !!!",
            'is_unique' => "Esta descricao já foi cadastrado !!!"
        ],
    ];
}


?>