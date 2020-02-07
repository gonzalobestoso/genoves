<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model
{
    
    protected $table      = 'tipo_users';
    protected $primaryKey = 'id';
    protected $fillable   = ['descripcion'];

    public $timestamps = true;
}
