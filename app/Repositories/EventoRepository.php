<?php

namespace App\Repositories;

use App\Models\Evento;
use InfyOm\Generator\Common\BaseRepository;

class EventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'status',
        'nome',
        'data',
        'ingressos',
        'data_pagamento',
        'local',
        'valor',
        'descricao',
        'largada'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Evento::class;
    }
}
