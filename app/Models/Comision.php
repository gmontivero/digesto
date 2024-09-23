<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    use HasFactory;

    protected $table = 'comisiones';

    protected $fillable = ['nombre'];

    public function autoridades()
    {
       return $this->belongsToMany(Autoridad::class,'autoridades_comisiones','comision_id','autoridad_id')->withPivot('cargo_id');
    }
}
