<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table='contactos';
    protected $primaryKey='id';
    protected $fillable=['nombre','telefono','direccion'];
    protected $guarded=[];
    public $timestamps=false;
}
