<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materia extends Model
{
    use SoftDeletes;
    protected $table      = 'materias';
    protected $primaryKey = 'id';
    protected $fillable   = ['cod_materia','descripcion'];

    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
