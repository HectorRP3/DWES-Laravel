<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = 'usuarios';

    public function eventoCrea()
    {
        return $this->hasMany(Evento::class, "anfitrion_id");
    }

    public function eventoParticipante()
    {
        return $this->belongsToMany(Evento::class, "participantes", "usuarios_id", "eventos_id");
    }
}
