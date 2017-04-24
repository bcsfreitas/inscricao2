<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Piloto
 * @package App\Models
 * @version April 24, 2017, 11:28 pm UTC
 */
class Piloto extends Model
{
    use SoftDeletes;

    public $table = 'pilotos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'boolean',
        'nome' => 'string',
        'equipe' => 'string',
        'patrocinador' => 'string',
        'telefone' => 'integer',
        'nomeapoio' => 'string',
        'telapoio' => 'integer',
        'moto' => 'string',
        'filiacao' => 'string',
        'datanasc' => 'date',
        'cep' => 'string',
        'logradouro' => 'string',
        'numero' => 'integer',
        'complemento' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
