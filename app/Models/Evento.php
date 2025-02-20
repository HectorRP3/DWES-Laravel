<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    public function usuarioCrea()
    {
        return $this->belongsTo(Usuario::class, "anfitrion_id");
    }

    public function usuarioParticipante()
    {
        return $this->belongsToMany(Usuario::class, "participantes", "eventos_id", "usuarios_id");
    }

    public function especie()
    {
        return $this->belongsToMany(Especie::class, "eventos_especies", "eventos_id", "especies_id")->withPivot("Cantidad");
    }
}
