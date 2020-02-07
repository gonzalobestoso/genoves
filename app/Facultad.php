<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facultad extends Model
{
    use SoftDeletes;
    protected $table      = 'facultads';
    protected $primaryKey = 'id';
    protected $fillable   = ['cod_facultad','descripcion', 'direccion', 'telefono', 'paginaweb'];

    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
