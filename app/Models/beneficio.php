<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $table = 'beneficios';

    public function especie()
    {
        return $this->belongsToMany(Especie::class, "beneficios_especies", "beneficio_id", "especies_id");
    }
}
