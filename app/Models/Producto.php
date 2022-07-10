<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'talla_id', 'observaciones', 'marca_id', 'cantidad_inventario', 'fecha_embarque'
    ];

    public function marca()
    {
        return $this->hasOne(Marca::class,'id','marca_id');
    }

    public function talla()
    {
        return $this->hasOne(Talla::class,'id','talla_id');
    }
}
