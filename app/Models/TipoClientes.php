<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoClientes extends Model
{
    /** @use HasFactory<\Database\Factories\TipoClientesFactory> */
    use HasFactory;

  protected $table= "Tipo_clientes";
  protected $fillable= ["descripcion_tipo"];

  public function clientes(){
    return  $this->hasMany(Clientes::class);
  }

}
