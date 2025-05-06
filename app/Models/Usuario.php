<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function eventoCrea()
    {
        return $this->hasMany(Evento::class, "anfitrion_id");
    }

    public function eventoParticipante()
    {
        return $this->belongsToMany(Evento::class, "participantes", "usuarios_id", "eventos_id");
    }
}
