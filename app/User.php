<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    const USUARIO_VERIFICADO = '1';
    Const USUARIO_NO_VERIFICADO = '0';
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $fillable   = ['usuario','pass', 'dni', 'nombre', 'apellido', 'email', 'tipousuario_id', 'alumno_id','verificado', 'token_verificacion'];

    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $hidden = [
        'password',
        'remember_token',
        "token_verificacion"
    ];

    public function esVerificado()
    {
        return $this->verified == User::USUARIO_VERIFICADO;
    }

    public static function generarTokenVerificacion()
    {
        return str_random(40);
    }
}
