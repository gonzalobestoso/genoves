<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use SoftDeletes;
    protected $table      = 'alumnos';
    protected $primaryKey = 'id';
    protected $fillable   = ['dni','nombre', 'apellido', 'domicilio', 'telefono', 'email', 'notificacion'];

    public $timestamps = true;
    protected $dates = ['deleted_at'];

    
}
