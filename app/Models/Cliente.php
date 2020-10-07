<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nome',
        'email',
        'numero_processo',
        'telefone',
        'observacao',
        'reu_id',
        'data_audiencia'
    ];

    public function reu()
    {
        return $this->belongsTo(Reu::class);
    }
}