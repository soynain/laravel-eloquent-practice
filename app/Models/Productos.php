<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table='productos';
    /**Avoiding default eloquent columns to be created */
    public $timestamps = false;
    /*Protecting columns*/
    protected $fillable=[
        'idProducto', 
        'nombre_producto',
        'fecha_registro',
        'cantidad_stock'
    ];
}
