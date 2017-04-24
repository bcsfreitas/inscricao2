<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evento
 * @package App\Models
 * @version April 24, 2017, 11:32 pm UTC
 */
class Evento extends Model
{
    use SoftDeletes;

    public $table = 'eventos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'status' => 'boolean',
        'nome' => 'string',
        'data' => 'date',
        'ingressos' => 'boolean',
        'data_pagamento' => 'date',
        'local' => 'string',
        'valor' => 'string',
        'descricao' => 'string',
        'largada' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
