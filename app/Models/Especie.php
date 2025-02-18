<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table = 'especies';
    public function evento()
    {
        return $this->belongsToMany(Evento::class, "eventos_especies", "especies_id", "eventos_id");
    }
}
