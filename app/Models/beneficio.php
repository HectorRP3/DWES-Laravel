<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Beneficio extends Model
{
    use HasFactory;
    protected $table = 'beneficios';

    protected $fillable = [
        'descripcion',
        'created_at',
        'updated_at',
    ];

    public function especie()
    {
        return $this->belongsToMany(Especie::class, "beneficios_especies", "beneficio_id", "especies_id");
    }
}
