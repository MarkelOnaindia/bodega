<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'email',
        'telefono',
        'persona_contacto',
        'fundacion',
        'restaurante',
        'hotel',
    ];

        public function vinos()
        {
            return $this->hasMany(\App\Models\Vino::class, 'id_bodega', 'id');
        }

}
