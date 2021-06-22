<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
    protected $table = 'empleados';
    protected $primaryKey = 'id';

    protected $fillable=[
        'nombre', 'codigo','ap_paterno','ap_materno','email','tipoContrato','estado'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
