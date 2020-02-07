<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
    use SoftDeletes;
    protected $table      = 'carreras';
    protected $primaryKey = 'id';
    protected $fillable   = ['cod_carrera','descripcion', 'facultad_id'];

    public $timestamps = true;
    protected $dates = ['deleted_at'];
    
}