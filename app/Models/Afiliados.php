<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Afiliados extends Authenticatable
{

    protected $table = 'afiliados';

    protected $fillable = [
        'afiliado_id',
        'poliza_id',
        'nombre',
        'documento',
        'fecha_nacimiento',
        'domicilio'
    ];
   
}
