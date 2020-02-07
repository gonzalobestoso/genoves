<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNoticia extends Model
{
    
    protected $table      = 'tipo_noticias';
    protected $primaryKey = 'id';
    protected $fillable   = ['descripcion'];

    public $timestamps = true;
    
}
