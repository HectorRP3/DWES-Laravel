<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = [
        'nick',
        'nombre',
        'apellidos',
        'email',
        'password',
        'karma',
        'suscrito',
        'created_at',
        'updated_at',
        'imagenUrl',
    ];

    public function eventoCrea()
    {
        return $this->hasMany(Evento::class, "anfitrion_id");
    }

    public function eventoParticipante()
    {
        return $this->belongsToMany(Evento::class, "participantes", "usuarios_id", "eventos_id");
    }
}
