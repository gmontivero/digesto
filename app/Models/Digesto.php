<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digesto extends Model
{
    use HasFactory;

    protected $fillable = ['numero','titulo','resumen','fecha','pdf','tipo_id'];

}
