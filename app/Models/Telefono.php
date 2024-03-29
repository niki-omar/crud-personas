<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable=[
        'persona_id',
        'telefono',
        'tipo_telefono'
    ];
        protected $table='telefonos';
    // RELACION UNO A MUCHOS INVERSA
    public function persona(){
        return $this->belongsTo('app\Models\Persona');
    }
}

