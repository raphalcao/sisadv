<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reu extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nome',      
    ];
    
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}