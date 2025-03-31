<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'tipoEvento',
        'tipoTerreno',
        'fecha',
        'imagenUrl',
        'anfitrion_id',
        'created_at',
        'updated_at',
    ];

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
