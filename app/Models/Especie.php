<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Especie extends Model
{
    use HasFactory;
    protected $table = 'especies';

    protected $fillable = [
        'nombreCientifico',
        'nombreComun',
        'clima',
        'regionOrigen',
        'crecimiento',
        'imagenUrl',
        'enlace',
        'created_at',
        'updated_at',
    ];

    public function evento()
    {
        return $this->belongsToMany(Evento::class, "eventos_especies", "especies_id", "eventos_id")->withPivot("cantidad");
    }

    public function beneficio()
    {
        return $this->belongsToMany(Beneficio::class, "beneficios_especies", "especies_id", "beneficio_id");
    }
}
