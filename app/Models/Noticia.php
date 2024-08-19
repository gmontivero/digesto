<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','encabezado','cuerpo','fecha','foto'];

    public function imagens(){
        return $this->belongsToMany(Imagen::class,'imagen_noticia');
    }
}
