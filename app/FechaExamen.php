<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FechaExamen extends Model
{
    use SoftDeletes;
    protected $table      = 'fecha_examens';
    protected $primaryKey = 'id';
    protected $fillable   = ['fecha','fecha_inicio', 'fecha_fin', 'turno', 'materia_carrera_id'];

    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
