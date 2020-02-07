<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use SoftDeletes;
    protected $table      = 'noticias';
    protected $primaryKey = 'id';
    protected $fillable   = ['titulo','encabezado', 'contenido', 'destacado', 'fecha_inicio', 'fecha_fin', 'imagen', 'tiponotificacion_id', 'materia_carrera_id' ];

    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
