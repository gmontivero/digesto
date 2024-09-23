<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    use HasFactory;

    protected $table = 'bloques';

    protected $fillable = ['nombre'];

    public function autoridades()
    {
       return $this->belongsToMany(Autoridad::class,AutoridadesBloques::class,'bloque_id','autoridad_id')->withPivot('cargo_id');
    }
}
