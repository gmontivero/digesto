<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $fillaable = ['nombre','imagen'];

    public function noticias(){
        return $this->belongsToMany(Noticia::class,'imagen_noticia');
    }
}
