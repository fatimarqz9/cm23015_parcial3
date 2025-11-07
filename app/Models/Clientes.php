<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    /** @use HasFactory<\Database\Factories\ClientesFactory> */
    use HasFactory;
    protected $table = 'Clientes';
    protected $fillable=["nombre", "telefono","idtipocliente","iddepartamento"];

    public function tipo_cliente(){
        return $this->belongsTo(TipoClientes::class);
    }
    public function departamento(){
        return $this->belongsTo(Departamentos::class);
    }
}
