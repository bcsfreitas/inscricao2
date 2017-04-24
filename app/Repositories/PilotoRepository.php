<?php

namespace App\Repositories;

use App\Models\Piloto;
use InfyOm\Generator\Common\BaseRepository;

class PilotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nome',
        'equipe',
        'patrocinador',
        'telefone',
        'nomeapoio',
        'telapoio',
        'moto',
        'filiacao',
        'datanasc',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Piloto::class;
    }
}
