<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_documento_id', 'numero_documento', 'nombres',
        'apellido_paterno', 'apellido_materno', 'telefono',
        'direccion', 'sexo_id'
    ];

    /**
     * Get the user associated with the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
